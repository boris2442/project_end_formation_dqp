<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NiveauRequest;
use Illuminate\Http\Request;
use App\Models\Niveau;

class NiveauController extends Controller
{
    //

    public function index()
    {
        $niveaux = Niveau::paginate(5);
        return view('pages.list-niveau', compact('niveaux'));
    }
    public function create()
    {
        return view('pages.add-niveau');
    }
    public function store(NiveauRequest $request)
    {
        // Si tu as un NiveauRequest, remplace Request par NiveauRequest
        $data = $request->validated();
        Niveau::create($data);
        return redirect()->route('niveau.index')->with('success', 'Niveau ajouté avec succès.');
    }

    public function edit($id)
    {
        $niveau = Niveau::findOrFail($id);
        return view('pages.update-niveau', compact('niveau'));
    }

    public function update(NiveauRequest $request, $id)
    {
        // Si tu as un NiveauRequest, remplace Request par NiveauRequest
        $data = $request->validated();
        $niveau = Niveau::findOrFail($id);
        $niveau->update($data);
        return redirect()->route('niveau.index')->with('success', 'Niveau modifié avec succès.');
    }

    public function delete($id)
    {
        $niveau = Niveau::findOrFail($id);
        $niveau->delete();
        return redirect()->route('niveau.index')->with('success', 'Niveau supprimé avec succès.');
    }
}
