<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SearchController;

Route::post('/search', [SearchController::class, 'store'])->name('main.store');
Route::get('/show', [SearchController::class, 'show'])->name('main.show');

// Route::get('/main',[AcoController::class,'index'])->name('ACO.index');
// Route::post('/main.store',[AcoController::class,'store'])->name('ACO.store');
// Route::get('/show',[AcoController::class,'show'])->name('ACO.show');
