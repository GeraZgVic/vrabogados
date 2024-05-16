<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/areas-practica', [AreaController::class, 'index'])->name('area.index');
Route::get('/nosotros', [AboutController::class, 'index'])->name('about.index');
