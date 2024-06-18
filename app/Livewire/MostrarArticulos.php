<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarArticulos extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.mostrar-articulos');
    }
}
