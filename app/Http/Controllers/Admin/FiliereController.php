<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    //
    public function index()
    {
        return view('pages.add-filiere');
    }
    public function create()
    {
        return view('pages.add-filiere');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|'
        ]);
        Filiere::create($validateData);
    }
}
