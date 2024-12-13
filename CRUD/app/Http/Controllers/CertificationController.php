<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Intervenant;
use App\Models\Domaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CertificationController extends Controller
{
    public function index()
    {
        // Eager load the 'intervenant' and 'domaine' relationships
        $certifs = Certification::with(['intervenant', 'domaine'])->get();
        return view('certification.listCertification')->with(compact('certifs'));
    }

    public function create()
    {
        $intervenants = Intervenant::all();
        $domaines = Domaine::all();
        return view('certification.addCertification', compact('intervenants', 'domaines'));
    }

    public function store(Request $request)
    {
        Certification::create($request->all());
        return redirect()->route('certifications.index')->with('success', 'Certification a été ajoutée avec succès');
    }

    public function show(string $id)
    {
        $certification = Certification::with(['intervenant', 'domaine'])->findOrFail($id);
        return view('certification.detailsCertification', compact('certification'));
    }

    public function edit(string $id)
    {
        $certif = Certification::with(['intervenant', 'domaine'])->findOrFail($id);
        $intervenants = Intervenant::all();
        $domaines = Domaine::all();
        return view('certification.updateCertification', compact('certif', 'intervenants', 'domaines'));
    }

    public function update(Request $request, string $id)
    {
        $certif = Certification::findOrFail($id);
        $certif->update($request->all());
        return redirect()->route('certifications.index')->with('success', 'Certification a été modifiée avec succès');
    }

    public function destroy(string $id)
    {
        Certification::destroy($id);
        return Redirect::back()->with('success', 'Certification supprimée avec succès');
    }
}
