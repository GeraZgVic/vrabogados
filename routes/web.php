<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/areas-practica', [AreaController::class, 'index'])->name('area.index');
