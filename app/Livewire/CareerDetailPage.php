<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CareerDetail;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.html')]
class CareerDetailPage extends Component {
    use WithFileUploads;

    public $cv;
    public $cvPreviewUrl;
    public $uploaded = false;
    public $finalPath;
    public $index = 1;

    public $format;

    public function updatedCv()
    {
        // Validasi file
        $this->validate([
            'cv' => 'required|mimes:pdf|max:1024',
        ]);

        
        $this->format = "CV_" . (string)$this->index . ".pdf";
        $this->index++;

        $this->cvPreviewUrl = $this->cv->storeAs('temp_cv', $this->format, 'public');
        $this->uploaded = true;
        
    }

    public function removeCv()
    {
        if ($this->cvPreviewUrl) {
            Storage::disk('public')->delete($this->cvPreviewUrl); 

        }

        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
         $this->index--;
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

        
        CareerDetail::Create(
            [
            'user_id' => Auth::user()->id,
               'cv' => $this->finalPath,
               'score' => 0
            ]
        );

        $this->reset(['cv', 'cvPreviewUrl', 'uploaded']);
        session()->flash('message', '"CV-mu berhasil dikirim ya Gokers!"');
    }

    public function render()
    {
        return view('livewire.career-detail');
    }
};

?>

