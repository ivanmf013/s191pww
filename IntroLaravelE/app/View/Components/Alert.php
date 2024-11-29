<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    //variable publica
    public $tipo;

    public function __construct($tipo)
    {
        $this->tipo= $tipo;
        //FUNCIÓN PUBLICA
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
