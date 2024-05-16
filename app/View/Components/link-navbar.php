<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkNavbar extends Component
{
    public $route;
    public $text;

    public function render(): View|Closure|string
    {
        return view('components.link-navbar');
    }
}
