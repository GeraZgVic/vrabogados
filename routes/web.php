<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DespachoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\LoginController;
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/areas-practica', [AreaController::class, 'index'])->name('area.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/despachos/cdmx', [DespachoController::class, 'cdmx'])->name('mexico.index');
Route::get('/despachos/guadalajara-jal', [DespachoController::class, 'guadalajara'])->name('guadalajara.index');
Route::get('/despachos/vhsa-tab', [DespachoController::class, 'vhsa'])->name('vhsa.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
