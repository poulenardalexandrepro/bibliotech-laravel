<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::actives()
            ->orderBy('nom')
            ->withCount('livres')
            ->get();

        return view('categories.index', compact('categories'));
    }

    public function show(string $slug)
    {
        $categorie = Categorie::where('slug', $slug)->firstOrFail();

        return view('categories.show', compact('categorie'));
    }
}
