<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe; // <- penting!
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        return redirect()->route('profile')->with('success', 'Resep berhasil dipublikasikan!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Simpan gambar
        $gambarPath = $request->file('gambar')->store('recipes', 'public');

        // Simpan data resep
        Recipe::create([
            'id_user' => Auth::id(),
            'id_kategori' => $request->id_kategori,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('profile')->with('success', 'Resep berhasil dipublikasikan!');
    }


    public function show($id)
    {
        $recipe = \App\Models\Recipe::with('user', 'kategori')->findOrFail($id);
        return view('recipe.show', compact('recipe'));
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->gambar && file_exists(storage_path('app/public/' . $recipe->gambar))) {
            unlink(storage_path('app/public/' . $recipe->gambar));
        }

        $recipe->delete();

        return redirect()->route('profile')->with('success', 'Resep berhasil dihapus!');
    }
}
