<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index() {
        return view('areas');
    }

    public function civil() {

        return view('servicios.civil');
    }

    public function penal() {

        return view('servicios.penal');
    }

    public function laboral() {

        return view('servicios.laboral');
    }

    public function administrativo() {

        return view('servicios.administrativo');
    }

    public function mercantil() {

        return view('servicios.mercantil');
    }
    public function tributaria() {

        return view('servicios.tributaria');
    }

}
