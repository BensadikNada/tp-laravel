<?php

namespace App\Http\Controllers;

use App\Http\Requests\IntervenantRequest;
use App\Models\Intervenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IntervenantController extends Controller
{
    public function index()
    {
        $inters = Intervenant::all();
        return view('intervenants.listIntervenant')->with(compact('inters'));
    }

    public function create()
    {
        return view('intervenants.addIntervenant');
    }

    public function store(Request $request)
    {
        Intervenant::create($request->all());
        return redirect()->route('intervenants.listIntervenant')->with('success', 'Intervenant a été ajouté avec succès');
    }

    public function show(string $id)
    {
        $inter = Intervenant::findOrFail($id);
        return view('intervenants.detailsIntervenant')->with(compact('inter'));
    }

    public function edit(string $id)
    {
        $inter = Intervenant::findOrFail($id);
        return view('intervenants.updateIntervenant')->with(compact('inter'));
    }

    public function update(Request $request, string $id)
    {
        $inter = Intervenant::findOrFail($id);
        $inter->update($request->all());
        return redirect()->route('intervenants.listIntervenant')->with('success', 'Intervenant a été modifié avec succès');
    }

    public function destroy(string $id)
    {
        Intervenant::destroy($id);
        return Redirect::back()->with('success', 'Intervenant supprimé avec succès');
    }
}
