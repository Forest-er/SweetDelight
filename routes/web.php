<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/recipe', function () {
    return view('recipe.recipe');
})->name('recipe');
    
Route::get('/recipe/add', function () {
    return view('recipe.addrecipe');
})->name('recipe/add');
require __DIR__.'/auth.php';
