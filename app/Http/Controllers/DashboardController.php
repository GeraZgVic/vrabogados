<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $posts = Post::all();
        $articles = Article::all();
        
        return view('auth.dashboard', [
            'posts' => $posts,
            'articles' => $articles
        ]);
    }
}
