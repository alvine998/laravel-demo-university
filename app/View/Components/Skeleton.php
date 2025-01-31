<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Skeleton extends Component
{
    public $width;
    public $height;

    public function __construct($width = 'w-full', $height = 'h-6')
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skeleton');
    }
}
