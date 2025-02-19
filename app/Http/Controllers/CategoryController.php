<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Vérifie que la requête fonctionne bien

        return Inertia::render(
            'Categories',
            [
                'categories' => $categories
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Traitement de l'image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->extension();
            $imageName = time() . '.' . $imageExtension;
            $image->move(public_path('uploads/images'), $imageName);
            $imagePath = 'uploads/images/' . $imageName;  // Stockage du chemin de l'image
        }

        // Générer le slug avec le nom et des chiffres aléatoires
        $slug = Str::slug($request->name) . '-' . rand(1000, 9999);

        // Créer la catégorie
        Category::create([
            'name' => $request->name,
            'slug' => $slug,  // Ajoute le slug ici
            'image' => $imagePath  // Utiliser la variable $imagePath pour l'image
        ]);

        // Retourner à la page précédente avec un message de succès
        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/images'), $imageName);
            $category->image = 'uploads/images/' . $imageName;
        }

        $category->save();

        return response()->json(['success' => 'Catégorie mise à jour avec succès.']);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json(['success' => 'Catégorie supprimée avec succès.']);
    }
}
