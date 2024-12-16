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
    public $careers = [];
    public $selectedFilters = [];
    public $distinctLocations = [];

    protected $listeners = ['filterCareers' => 'filterCareers'];
    public function mount()
    {
        // Fetch all careers initially
        $this->careers = Career::all();
        $this->distinctLocations = Career::select('location')->distinct()->pluck('location')->toArray();
        $this->name = Career::select('name')->distinct()->pluck('name')->toArray();
    }
    

    public function filterCareers($filterValue)
    {
        if($filterValue === 'All') {
            $this->careers = Career::all();
        } else {
            if (!in_array($filterValue, $this->selectedFilters)) {
                $this->selectedFilters[] = $filterValue;
                
             }
            $query = Career::query();

            // dd($this->selectedFilters);
            foreach ($this->selectedFilters as $filter) {
                    // Check if it's a location filter (assuming location filters are strings)
                    if (in_array($filter, $this->distinctLocations)) {
                        $query->where('location', 'like', '%'. $filter . '%');
                    } else {
                        // If it's not a location, it's assumed to be a name filter
                        // foreach($filter as $f) {
                            $query->where('name', 'like', '%' . $filter . '%');
                        // }
                        
                    }
                
            }

            // Execute the query to get the filtered careers
            $this->careers = $query->get();
            // dd($this->careers);
        }
        // dd('Hello');
        // Add the new filter value if it doesn't already exist
        
    }

    
    public function render()
    {
        // $careers = Career::all();
        return view('livewire.career');
    }

    
}
