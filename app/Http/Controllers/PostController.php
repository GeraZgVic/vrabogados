<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.crear-post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image
        ]);

        return redirect()->route('post.create')->with('success', 'Post Creado Correctamente');
    }

    public function storeImage(Request $request)
    {
        // Validar que el archivo subido sea una imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Obtener el archivo de la solicitud(imagen)
            $imagen = $request->file('file');

            // Generar un nombre único para la imagen
            $nombreImagen = Str::uuid() . "." . $imagen->extension();

              // Crear una instancia de Intervention Image
            $imagenServidor = Image::make($imagen);

            // Redimensionar o manipular la imagen según sea necesario
            $imagenServidor->fit(1000, 1000);

            // Definir la ruta de almacenamiento
            $destinationPath = public_path('uploads');

            // Verificar si la carpeta existe, si no, crearla
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Guardar la imagen en el servidor
            $imagenPath = $destinationPath . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);

            // Retornar la respuesta en formato JSON
            return response()->json(['image' => $nombreImagen], 200);
            
        } catch (\Exception $e) {
           // Manejar cualquier excepción y retornar una respuesta de error
           return response()->json(['error' => 'Error al subir la imagen', 'details' => $e->getMessage()], 500);
        }

    }

    public function show(Post $post)
    {
    }

    public function edit(Post $post)
    {
    }


    public function update(Request $request, Post $post)
    {
    }

    public function destroy(Post $post)
    {
    }
}
