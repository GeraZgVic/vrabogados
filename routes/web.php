<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DespachoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NosotrosController;

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/areas-practica', [AreaController::class, 'index'])->name('area.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/despachos/cdmx', [DespachoController::class, 'cdmx'])->name('mexico.index');
Route::get('/despachos/guadalajara-jal', [DespachoController::class, 'guadalajara'])->name('guadalajara.index');
Route::get('/despachos/vhsa-tab', [DespachoController::class, 'vhsa'])->name('vhsa.index');


