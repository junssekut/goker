<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Url;
use Livewire\Component;

class Form extends Component
{

    #[Url()]
    public $companies = [];


    public function save()
    {
        dump($this->companies);
    }

    public function render()
    {

        return view(
            'livewire.form'
        );
    }