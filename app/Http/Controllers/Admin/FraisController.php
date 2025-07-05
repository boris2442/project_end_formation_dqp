<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FraisRequest;

use App\Models\Frai;

class FraisController extends Controller
{
    //
    public function index()
    {
        return view('pages.add-frais');
    }
    public function create()
    {
        return view('pages.add-frais');
    }
    public function store(FraisRequest $request)
    {
        $data = $request->validated();
        $data['total'] = $data['tranche1'] + $data['tranche2'] + $data['tranche3'];
        Frai::create($data);
        return redirect()->route('frais.index')->with('Frais add with successfull');
    }
}
