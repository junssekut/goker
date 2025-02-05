<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Career;
use Illuminate\Support\Facades\Log;

#[Layout('layouts.html')]
class CareerPage extends Component
{
    public $name =[];
    // public $locations = [];
    public $careers;
    public $selectedFilters = [];
    public $distinctLocations = [];
    public $count = 0;

    protected $listeners = ['filterCareers' => 'filterCareers'];
    public function mount()
    {
        // Fetch all careers initially
        $this->careers = Career::all();
        $this->count = $this->careers->count();
        $this->distinctLocations = Career::select('location')->distinct()->pluck('location')->toArray();
        $this->name = Career::select('name')->distinct()->pluck('name')->toArray();
    }

    // create a function for storing image to db   
    

    
    

    public function filterCareers(array $filterValue)
    {
        if(in_array('All', $filterValue)) {
            $this->careers = Career::all();
            $this->count = $this->careers->count();
        } else {
            $query = Career::query();
            foreach ($filterValue as $filter) {
                    if (in_array($filter, $this->distinctLocations)) {
                        $query->where('location', 'like', '%'. $filter . '%');
                    } else {
                            $query->where('name', 'like', '%' . $filter . '%');
                        
                    }
                
            }
            $this->careers = $query->get();
            $this->count = $this->careers->count();
           
        }
        
    }

    public function render()
    {
        // $careers = Career::all();
        return view('livewire.career');
    }
    
}
