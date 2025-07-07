<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FiliereRequest;
// use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    //
    public function index()
    {
        $filieres=Filiere::paginate(5);
        return view('pages.list-filiere', compact('filieres'));
    }
    public function create()
    {
        return view('pages.add-filiere');
    }
    public function store(FiliereRequest $request)
    {
        $validateData = $request->validated();
        Filiere::create($validateData);
        return redirect()->name('filiere.index')->with('success', 'filiere ajoutée avec success');
    }
    public function delete($id){
        $filiere=Filiere::findOrFail($id);
         $filiere->delete();

        return redirect()->route('filiere.index')->with('success', 'filiere supprimé avec succès.');
    }
}
