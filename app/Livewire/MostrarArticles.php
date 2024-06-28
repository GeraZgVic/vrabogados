<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarArticles extends Component
{
    use WithPagination;
    // #[Url] //Si queremos que muestre la URL
    public $search = '';
    public $category_id = '';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
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

        $articles = $query->paginate(6);
        $categories = Category::all();
        return view('livewire.mostrar-articles', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }
}
