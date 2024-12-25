<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CareerDetail;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Career;

#[Layout('layouts.html')]
class CareerDetailPage extends Component {
    use WithFileUploads;

    public $cv;
    public $cvPreviewUrl;
    public $uploaded = false;
    public $finalPath;
    public $career;

    public $format;

    public function updatedCv()
    {
        // Validasi file
        $this->validate([
            'cv' => 'required|mimes:pdf|max:1024',
        ]);

        
        $this->format = "CV_" . (string)$this->career->id . "_" .  (string)Auth::user()->id . ".pdf";

        $this->cvPreviewUrl = $this->cv->storeAs('temp_cv', $this->format, 'public');
        $this->uploaded = true;
        
    }

    public function removeCv()
    {
        if ($this->cvPreviewUrl) {
            Storage::disk('public')->delete($this->cvPreviewUrl); 

        }

        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
    }

    public function submitCV()
    {
        // Pindahkan file ke direktori final
                $this->finalPath = Storage::disk('public')->putFileAs(
            'cv_uploads', 
            new \Illuminate\Http\File(storage_path('app/public/' . $this->cvPreviewUrl)), 
            $this->format // Menggunakan nama file yang sama seperti $format
        );


        // Hapus file sementara
        Storage::disk('public')->delete($this->cvPreviewUrl);

        
        CareerDetail::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'career_id' => $this->career->id,
            ],
            [
                'cv' => $this->finalPath,
                'score' => 0,
                'date_updated' => now(), // Ensure that the date_updated field is set to the current timestamp
            ]
        );


        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
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

