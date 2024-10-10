<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieAdminController extends Controller
{
    public function getCategories()
    {
        $categories = Categorie::latest()->get();
        return response()->json($categories, 200);
    }
    public function getOneCategorie($id)
    {
        $categorie = Categorie::find($id);
        if (is_null($categorie)) {
            return response()->json(['message' => 'Categorie Not Found '], 404);
        }
        return response()->json(Categorie::find($id), 200);
    }
    public function addCategorie(Request $request)
    {
        $categorie = Categorie::create($request->all());
        return response($categorie, 201);
    }
    public function updateCategorie(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        if (is_null($categorie))
            return response()->json(['message' => 'Categorie Not Found'], 404);

        $categorie->update($request->all());
        return response($categorie, 200);
    }
    public function deleteCategorie($id)
    {
        $categorie = Categorie::find($id);
        if (is_null($categorie))
            return response()->json(['message' => 'Categorie Not Found'], 404);

        $categorie->delete();
        return response()->json(['message' => 'Categorie supprimée avec succès'], 200);
    
    }
}