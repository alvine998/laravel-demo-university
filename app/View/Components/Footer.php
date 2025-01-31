<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Footer extends Component
{
    public $year;
    public $company;

    public function __construct($year = null, $company = 'MyApp')
    {
        $this->year = $year ?? date('Y');
        $this->company = $company;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
