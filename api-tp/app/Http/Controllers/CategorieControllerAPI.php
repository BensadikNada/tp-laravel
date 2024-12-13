<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieControllerAPI extends Controller
{
    public function listeCategories()
    {
        // $listeCategorie = Categorie::all();
        $listeCategorie=DB::table('categories')->paginate(3);
        return   $listeCategorie;
    }
    public function supprimerCategorie(string $id)
    {
        $resultats = Categorie::destroy($id);
        if ($resultats > 0) {
            return response()->json("La categorie id=$id est bien supprimée", 200);
        } else {
            return response()->json("Erreur La categorie id=$id n'est pas supprimée", 400);
        }
    }

    public function ajouterCategorie(Request $request)
    {
        Categorie::create($request->all());
        return response()->json("La Categorie est bien ajoutée", 200);
    }

    public function modifierCategorie(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json("La categorie est bien modifiée", 200);
    }
}
