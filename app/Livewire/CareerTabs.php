<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareerTabs extends Component
{
    public $activeTab = 'pelamar'; // Default tab

    public $careerId;

    public function mount($careerId)
    {
        $this->careerId = $careerId;
    }

    public function switchTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
{   
    return view('livewire.career-tabs', [
        'activeTab' => $this->activeTab, // Pass $activeTab
        'careerId' => $this->careerId,   // Pass $careerId if needed in the view
    ]);
}

}
