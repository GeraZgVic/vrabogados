<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class MostrarArticulos extends Component
{

    // #[Url] //Si queremos que muestre la URL
    public $search = '';
    public $category_id = '';

    public function render()
    {
        $query = Article::orderBy('created_at', 'desc');

        // Filtrar los inventarios que coinciden con el término de búsqueda (title)
        if ($this->search) {
            $query->where(function ($innerQuery) {
                $innerQuery->where('title', 'LIKE', "%" . $this->search . "%");
            });
        }
        
        if($this->category_id) {
            $query->whereHas('category', function ($innerQuery) {
                $innerQuery->where('id', $this->category_id);
            });
        }

        $articles = $query->get();
        $categories = Category::all();
        return view('livewire.mostrar-articulos', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }
}
