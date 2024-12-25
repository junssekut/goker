<?php

namespace App\Livewire;

use Debugbar;

use App\Models\UserProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.html')]
class UserProfileForm extends Component
{
    public $name, $nickname, $birth_place, $dob, $domicile, $education_level, $school, $major, $experience;
    public $gender = null;
    public $step = 1; // Track current step

    // Map gender values for display
    public $genderMap = [
        'M' => 'Laki-Laki',
        'F' => 'Wanita',
    ];

    protected $rulesStep1 = [
        'name' => 'required|string|min:3',
        'nickname' => 'required|string',
        'birth_place' => 'required|string',
        'dob' => [
            'required',
            'date',
            'before:today',
            'after:1900-01-01',
        ],
        'gender' => 'required|string|in:F,M',
        'domicile' => 'required|string',
    ];

    protected $rulesStep2 = [
        'education_level' => 'required|string|in:SMA / K,D3,S1,S2,S3',
        'school' => 'required|string',
        'major' => 'required|string',
        'experience' => 'required|string',
    ];

    public function rules()
    {
        return $this->step == 1 ? $this->rulesStep1 : $this->rulesStep2;
    }

    public function nextStep()
    {
        $this->dispatch('input_error');
     
        $this->validate();
        $this->step++;   
    }

    public function submitProfile()
    {
        $this->dispatch('input_error');
        $this->validate();

        // Save or update the profile
        UserProfile::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'name' => $this->name,
                'nickname' => $this->nickname,
                'birth_place' => $this->birth_place,
                'dob' => $this->dob,
                'gender' => $this->gender, // Stored as M or F
                'domicile' => $this->domicile,
                'education_level' => $this->education_level,
                'school' => $this->school,
                'major' => $this->major,
                'experience' => $this->experience,
            ]
        );

        
        session()->flash('message', 'Profile successfully saved!');
        return redirect()->route('home');
    }

    public function updatedGender($value)
    {
        // Convert display value to database value if necessary
        $this->gender = array_search($value, $this->genderMap) ?: $value;
    }

    public function render()
    {
        return view('livewire.profile.user-profile-form');
    }
}
