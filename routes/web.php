<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Your Recipes
    Route::get('/profile/recipes', [ProfileController::class, 'yourRecipes'])->name('recipes');

    // Recipe CRUD
    Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
    Route::post('/recipe/add', [RecipeController::class, 'store'])->name('recipe.store');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
});

// Form tambah resep
Route::get('/recipe/add', function () {
    return view('recipe.addrecipe');
})->middleware('auth')->name('recipe.add');

Route::get('/search', function () {
    return view('search');
})->name('search');

require __DIR__ . '/auth.php';
