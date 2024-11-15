<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component

{
    //parametros para trabajar del construtor 

    public $encabezado;
    public $titulo;
    public $textoBoton;

    public function __construct($encabezado,$titulo,$textoBoton)
    {
        //asignar valores atributos de la tarjeta

        $this->encabezado = $encabezado;
        $this->titulo = $titulo;
        $this->textoBoton = $textoBoton;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
