<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    //
    public function index()
    {
        return view('pages.add-specialite');
    }
}
