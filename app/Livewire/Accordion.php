<?php

namespace App\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public $texto;
    public function render()
    {
        return view('livewire.accordion');
    }
}
