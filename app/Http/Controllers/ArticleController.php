<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articulos.articulos');
    }

    public function create()
    {
        return view('articulos.articulos-create');
    }

    public function store(Request $request)
    {
        // Validar campos
        $datos = $request->validate([
            'title' => 'required|max:60',
            'url' => 'required'
        ]);

        // Guardar Datos
        Article::create([
            'title' => $datos['title'],
            'url' => $datos['url']
        ]);

        // Redireccionar

        return redirect()->route('articulos.index');
    }
}
