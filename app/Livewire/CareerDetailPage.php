<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CareerDetail;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Career;
use App\Services\CVScoringService;

#[Layout('layouts.html')]
class CareerDetailPage extends Component {
    use WithFileUploads;

    public $cv;
    public $cvPreviewUrl;
    public $uploaded = false;
    public $finalPath;
    public $career;
    public $format;
    public $isUploading = false;
    public $isProcessingAI = false;
    // public $isLoading = false;

    public function updatedCv()

{
    // ✅ 1. Langsung trigger update UI
    $this->dispatch('cvUploadingStart'); // Mengirim event ke frontend

    $this->validate([
        'cv' => 'required|mimes:pdf|max:1024',
    ]);

    $this->format = "CV_" . $this->career->id . "_" . Auth::guard('user')->id() . ".pdf";
    $this->cvPreviewUrl = $this->cv->storeAs('temp_cv', $this->format, 'public');
    $this->uploaded = true;

    // ✅ 2. Kirim event selesai upload
    $this->dispatch('cvUploadingEnd');
}


    public function removeCv()
    {
        if ($this->cvPreviewUrl) {
            Storage::disk('public')->delete($this->cvPreviewUrl); 

        }

        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
    }

    public function submitCV(CVScoringService $cVScoringService)
    {
        // $this->isLoading = true;
        // Pindahkan file ke direktori final
        $this->isProcessingAI = true;
        $this->finalPath = Storage::disk('public')->putFileAs(
            'cv_uploads', 
            new \Illuminate\Http\File(storage_path('app/public/' . $this->cvPreviewUrl)), 
            $this->format // Menggunakan nama file yang sama seperti $format
        );


        // Hapus file sementara
        Storage::disk('public')->delete($this->cvPreviewUrl);

        $requirement = $this->career->detail->Requirement;
        $jobdesk = $this->career->detail->Jobdesk;

        // Proses file melalui service
        $resp = $cVScoringService->processCv(
            storage_path('app/public/' . $this->finalPath),
            $requirement,
            $jobdesk
        );

        // dd($resp);

        $score = $resp['score'];
        $reason = $resp['reason'];
        
        CareerDetail::updateOrCreate(
            [
                'user_id' => Auth::guard('user')->id(),
                'career_id' => $this->career->id,
            ],
            [
                'cv' => $this->finalPath,
                'score' => $score,
                'review' => $reason,
                'date_updated' => now(), // Ensure that the date_updated field is set to the current timestamp
            ]
        );

        $this->isProcessingAI = true;
        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
        // $this->isLoading = false;
        session()->flash('message', '"CV-mu berhasil dikirim ya Gokers!"');
    }

     public function mount($careerId)
    {
        $this->career = Career::with('detail')->findOrFail($careerId);
    }

    public function render()
    {
        return view('livewire.career-detail');
    }
};

?>

