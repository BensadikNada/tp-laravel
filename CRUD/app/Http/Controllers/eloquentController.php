<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class eloquentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants=Stagiaire::all();
        return view('eloquentIndex')->with(compact("etudiants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eloquentCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrudRequest $request)
    {
        // $image=null;
        
        // if ($request->hasFile('image')){
        //     $image = time() . '.' . $request->image->extension();
        //     $request->image->storeAs('public/profile', $image);
        // } 

        if($request->hasFile('image')){
           $image= $request['image'] = $request->file('image')->store('profile', 'public');
        }

        // dd($image);
        $etudiants = new Stagiaire($request->all());
        $etudiants->image = $image; // Assign the filename to the image field
        $etudiants->save(); // Save the Stagiaire instance to the database

        // Stagiaire::create($request->all());
        return redirect()->route('etudiant.index')->with('sucsess', 'add with success');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $etudiant = Stagiaire::find($id);

    return view('eloquentShow')->with(compact('etudiant'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant=Stagiaire::find($id);
        return view('eloquentEdit')->with(compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CrudRequest $request, string $id)
    {
        // $etudiant=Stagiaire::find($id);
        // $etudiant->update($request->all());

        $etudiant = Stagiaire::findOrFail($id);
        if ($request->hasFile('image')) {
            $nomPhoto = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $nomPhoto);
            $etudiant->image = $nomPhoto;
        }
        $etudiant->update($request->all());
        return redirect()->route('etudiant.index')->with('sucsess', 'update with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiant=Stagiaire::find($id);
        $etudiant->delete();
        return Redirect::back()->with('sucsess', 'delete with success');
    }
}
