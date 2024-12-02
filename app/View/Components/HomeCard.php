<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeCard extends Component
{
    public $title;
    public $color;
    public $asset;
    public $description;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $asset, $color, $description)
    {
        //
        $this->title = $title;
        $this->asset = $asset;
        $this->color = $color;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-card');
    }
}
