<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class MostrarArticulos extends Component
{

    // #[Url] //Si queremos que muestre la URL
    public $search = '';

    public function render()
    {
        $query = Article::orderBy('created_at', 'desc');

        // Filtrar los inventarios que coinciden con el término de búsqueda (title)
        if ($this->search) {
            $query->where(function ($innerQuery) {
                $innerQuery->where('title', 'LIKE', "%" . $this->search . "%");
            });
        }

        $articles = $query->get();

        return view('livewire.mostrar-articulos', [
            'articles' => $articles
        ]);
    }
}
