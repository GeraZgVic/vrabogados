<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespachoController extends Controller
{
    public function index() {
        return view('contacto');
    }
    
    public function cdmx() {
        return view('despachos.cdmx');
    }
    public function guadalajara() {
        return view('despachos.guadalajara');
    }

    public function vhsa() {
        return view('despachos.vhsa');
    }
}
