<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class employeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    //     $Templ = Employe::select('poste')->distinct()->get();
    //     if (request('search1')) {
    //         $employes = Employe::where('nom', request('search1'))->get();
    //         $employes = Employe::where('poste', request('search1'))->get();
    //     }else{
    //         $employes=Employe::all();
    //     }
    //     return view('employe.indexEmploye')->with(compact('employes'));
    // }
    public function index()
{
    $query = Employe::query();

    // Récupère les sociétés distinctes pour le formulaire de sélection
    $Lemployes = Employe::select('Societe')->distinct()->get();

    // Vérifie si le terme de recherche pour 'nom' est fourni
    if ($searchNom = request('search1')) {
        $query->where('nom', 'like', '%' . $searchNom . '%');
    }

    // Vérifie si le terme de recherche pour 'Societe' est fourni
    if ($searchSociete = request('search2')) {
        $query->where('Societe', $searchSociete);
    }

    $employes = $query->get();

    // Retourne la vue avec les données des employés et des sociétés
    return view('employe.indexEmploye', compact('employes', 'Lemployes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employe.createEmploye');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $employe = new Employe();
        $employe->nom= $request->input('nom');
        $employe->poste= $request->input('poste');
        $employe->Societe = $request->input('Societe');
        $employe->Salaire= $request->input('Salaire');
        $employe->save();
        return redirect()->route('employe.index')->with('success', 'Employer Ajouté avec
        succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employe = Employe::find($id);
        return view('employe.showEmploye')->with(compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employe = Employe::find($id);
        return view('employe.editEmploye')->with(compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe1 = Employe::findOrFail($id);
        $employe1->nom = $request->get('nom');
        $employe1->poste = $request->get('poste');
        $employe1->Societe = $request->get('Societe');
        $employe1->Salaire = $request->get('Salaire');
        $employe1->update();
        return redirect()->route('employe.index')->with('success', 'Employe Modifié avecsuccès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emp = Employe::findOrFail($id);
        $emp->delete();
        return redirect()->route('employe.index')->with('success', 'Employé a été supprimé
        avec succès');
    }
}
