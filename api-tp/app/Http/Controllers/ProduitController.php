<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function indexApi()
    {
        $lisetProduits = Produit::all();
        return $lisetProduits;
    }

    public function produitDetailsApi(string $id)
    {
        $produit = Produit::findorFail($id);
        return $produit;
    }

    public function supprimerProduitApi(string $id)
    {
        $resultats = Produit::destroy($id);
        if ($resultats > 0) {
            return response()->json("Le produit id=$id est bien supprime", 200);
        } else {
            return response()->json("Erreur le produit id=$id n'est pas supprime", 400);
        }
    }

    public function ajouterProduit(Request $request)
    {
        Produit::create($request->all());
        return response()->json("Le produit est bien ajouté", 200);
    }

    public function modifierProduit(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->update($request->all());
        return response()->json("Le produit est bien modifié", 200);
    }
}
