<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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
Route::get('/despachos/cdmx', [DespachoController::class, 'cdmx'])->name('mexico.index');
Route::get('/despachos/guadalajara-jal', [DespachoController::class, 'guadalajara'])->name('guadalajara.index');
Route::get('/despachos/vhsa-tab', [DespachoController::class, 'vhsa'])->name('vhsa.index');

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
