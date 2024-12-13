<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StgContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stgs=DB::select('select * from stagiaire');
        return  view ('stagiaireReveal')->with(compact('stgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiareForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidationRequest $request)
    {
        // $validatedData = $request->validate([
        //     'nom' => 'required|regex:/^[a-zA-Z\s]*$/', 
        //     'prenom' => 'required|regex:/^[a-zA-Z\s]*$/',
        //     'date_naissance' => 'required|date',
        //     'adresse' => 'required|string',
        // ], [
        //     "nom.required" => "Le nom est obligatoire",
        //     "prenom.required" => "Le prénom est obligatoire",
        //     "date_naissance.required" => "La date de naissance est obligatoire",
        // ]);
        
        // Alternatively, if you want to handle numeric values in "nom" field:
        // 'nom' => 'required|regex:/^[a-zA-Z\s]*$/',
        
        Stagiaire::create($request->all());
        return redirect()->route('stg.index')->with('success', 'le stagiaire a été ajouter');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stg = DB::select("SELECT * FROM stagiaire WHERE id = ?", [$id]);
        // return $stg;
         return view('stagiaireShow')->with(compact('stg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stg = DB::select("SELECT * FROM stagiaire WHERE id = ?", [$id]);
        return view('stagiaireUpdate')->with(compact('stg'));
        // return view('stagiaireUpdate')->with('stg', $stg);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidationRequest $request, string $id)
    {
        // $validatedData=$request->validate([
        //     'nom'=>'required|string',
        //     'prenom'=>'required|string',
        //     'date_naissance'=>'required|date',
        //     'adresse'=>'required|string',
        // ]);
        // DB::table('stagiaire')->update($validatedData);
        // return 1;
        $update = DB::update("UPDATE stagiaire SET nom=?, prenom=?, date_de_naissance=?, adresse=? WHERE id=?", [
            $request->nom,
            $request->prenom,
            $request->date_naissance,
            $request->adresse,
            $id
        ]);
        return $update;
        return redirect()->route('stg.index');
        // return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM stagiaire WHERE id=?", [$id]);
        return Redirect::back();
    }

}
