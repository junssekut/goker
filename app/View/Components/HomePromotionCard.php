<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomePromotionCard extends Component
{
    public $title;
    public $color;
    public $button;
    public $asset;
  
    /**
     * Create a new component instance.
     */
    public function __construct($title, $color, $button, $asset)
    {
        //
        $this->title = $title;
        $this->color = $color;
        $this->button = $button;
        $this->asset = $asset;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-promotion-card');
    }
}
