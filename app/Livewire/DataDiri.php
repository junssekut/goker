<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;

class DataDiri extends Component
{
    #[Rule('required|min:3')]
    public $name;
    #[Rule('required|min:3')]
    public $panggilan;
    #[Rule('required|regex:/^[a-zA-Z\s]+-[0-3][0-9]-[0-1][0-9]-\d{4}$/',)]
    public $lahir;
    #[Rule('required')]
    public $kelamin;
    #[Rule('required|min:4')]
    public $domisili;
    #[Rule('required|min:4')]
    public $sekolah;

    public function submit() {
        $credentials = $this->validate();

        session()->flash('success', 'anjay');
    }

    public function render()
    {
        return view('livewire.data-diri');
    }
}
