<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialiteRequest;
use Illuminate\Http\Request;
use App\Models\Specialite; // Assuming you have a Specialite model
class SpecialiteController extends Controller
{
    //
    public function create()
    {
        return view('pages.add-specialite');
    }
    public function store(SpecialiteRequest $request)
    {
        // Validate and store the specialite data
        $data = $request->validated();

        // Assuming you have a Specialite model to handle the database interaction
        Specialite::create($data);

        return redirect()->route('specialite.index')->with('success', 'Spécialité ajoutée avec succès.');
    }
    public function index(Request $request)
    {
        $query = Specialite::query();
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        $specialites = $query->paginate(9);
        return view('pages.list-specialite', compact('specialites'));
    }
    public function edit($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('pages.update-specialite', compact('specialite'));
    }
    public function update(SpecialiteRequest $request, $id)
    {
        $specialite = Specialite::findOrFail($id);
        $data = $request->validated();
        $specialite->update($data);
        return redirect()->route('specialite.index')->with('success', 'Spécialité mise à jour avec succès.');
    }
    public function delete($id)
    {
        $specialite = Specialite::findOrFail($id);
        $specialite->delete();
        return redirect()->route('specialite.index')->with('success', 'Spécialité supprimée avec succès.');
    }
    public function show($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('pages.show-specialite', compact('specialite'));
    }
}
