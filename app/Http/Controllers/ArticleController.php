<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articulos.articulos');
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('articulos.articulos-create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        // Validar campos
        $datos = $request->validate([
            'title' => 'required|max:60',
            'url' => 'required',
            'category_id' => 'required'
        ]);

        // Guardar Datos
        Article::create([
            'title' => $datos['title'],
            'url' => $datos['url'],
            'category_id' => $datos['category_id']
        ]);

        // Redireccionar
        return redirect()->route('articulos.index')->with('success', 'Creado Correctamente');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('articulos.editar-article', [
            'article' => $article,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Article $article) 
    {
        // Validar campos
        $datos = $request->validate([
            'title' => 'required|max:70',
            'url' => 'required',
            'category_id' => 'required'
        ]);

        // Actualizar campos
        $article->update([
            'title' => $datos['title'],
            'url' => $datos['url'],
            'category_id' => $datos['category_id']
        ]);

        // Redirigir a vista index
        return redirect()->route('articulos.index')->with('success', 'Actualizado Correctamente');
    }

    public function destroy(Article $article) {
        $article->delete();
    }
}
