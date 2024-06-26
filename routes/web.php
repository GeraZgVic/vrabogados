<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DespachoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\DashboardController;


Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});

// Cambio de Idioma
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

// Rutas de páginas del sitio
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/areas-practica', [AreaController::class, 'index'])->name('area.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');

Route::get('/contacto', [DespachoController::class, 'index'])->name('contacto.index');
Route::get('/despachos/cdmx', [DespachoController::class, 'cdmx'])->name('mexico.index');
Route::get('/despachos/guadalajara-jal', [DespachoController::class, 'guadalajara'])->name('guadalajara.index');
Route::get('/despachos/vhsa-tab', [DespachoController::class, 'vhsa'])->name('vhsa.index');

// RUTAS DE SERVICIOS DESTACADOS
Route::get('areas-practica/derecho-civil', [AreaController::class, 'civil'])->name('area.civil');

// Autenticación para usuario
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// SOLO POSTS - BLOG
Route::post('/images', [PostController::class, 'storeImage'])->middleware('auth')->name('images.store');
Route::get('/dashboard/ver-post', [PostController::class, 'index'])->middleware('auth')->name('post.index');
Route::get('/dashboard/crear-post', [PostController::class, 'create'])->middleware('auth')->name('post.create');
Route::post('/dashboard/crear-post', [PostController::class, 'store'])->middleware('auth')->name('post.store');

Route::get('/dashboard/ver-articulos', [ArticleController::class, 'index'])->middleware('auth')->name('articulos.index');
Route::get('/dashboard/agregar-articulos', [ArticleController::class, 'create'])->middleware('auth')->name('articulos.create');
Route::post('/dashboard/agregar-articulos', [ArticleController::class, 'store'])->middleware('auth')->name('articulos.store');
Route::get('/dashboard/articulo/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth')->name('articulos.edit');
Route::put('/dashboard/articulo/{article}', [ArticleController::class, 'update'])->middleware('auth')->name('articulos.update');
Route::delete('/dashboard/delete-articulo/{article}', [ArticleController::class, 'destroy'])->middleware('auth')->name('articulos.destroy');

Route::get('/post/{id}/{title}', [PostController::class, 'show'])->name('post.show');
Route::get('/dashboard/post/{post}/edit', [PostController::class, 'edit'])->middleware('auth')->name('post.edit');  
Route::put('/dashboard/post/{post}', [PostController::class, 'update'])->middleware('auth')->name('post.update');
Route::delete('/dashboard/delete-post/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('post.destroy');

