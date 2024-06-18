<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarArticles extends Component
{
    use WithPagination;
    // #[Url] //Si queremos que muestre la URL
    public $search = '';

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

        $articles = $query->paginate(2);

        return view('livewire.mostrar-articles', [
            'articles' => $articles
        ]);
    }
}
