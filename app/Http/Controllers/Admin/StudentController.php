<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //

    public function index()
    {
        return view('pages.add-student');
    }
    public function create()
    {
        return view('pages.add-student');
    }
    public function store(Request $request)
    {
        // Validate and store the student data
        $data = $request->validate(
            [
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'sexe' => 'required|string|in:Masculin,Feminin',
                'date_naissance' => 'nullable|date',
                'telephone' => 'nullable|string|max:15',
                'adresse' => 'nullable|string|max:255',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'filiere' => 'nullable|string|max
                'lieu_de_naissance' => 'required|string|max:255',
                // Add other fields as necessary
            ],
            [
                'name.required' => 'Le nom est requis.',
                'surname.required' => 'Le prénom est requis.',
                'email.required' => 'L\'email est requis.',
                'sexe.required' => 'Le sexe est requis.',
                'lieu_de_naissance.required' => 'Le lieu de naissance est requis.',
                'photo.image' => 'La photo doit être une image valide.',
                'photo.mimes' => 'La photo doit être au format jpeg, png, jpg, gif ou svg.',
                'photo.max' => 'La photo ne doit pas dépasser 2MB.',
                'date_naissance.date' => 'La date de naissance doit être une date valide.',
                'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 15 caractères.',
                'adresse.max' => 'L\'adresse ne doit pas dépasser 255 caractères.',
                'email.email' => 'L\'email doit être une adresse email valide.',
                'email.max' => 'L\'email ne doit pas dépasser 255 caractères.',
                'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
                'surname.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
                'lieu_de_naissance.max' => 'Le lieu de naissance ne doit pas dépasser 255 caractères.',
                'sexe.in' => 'Le sexe doit être soit Masculin soit Feminin.',

            ]
        );
        // ]);

        // Store the student data in the database
        Student::create($data);

        return redirect()->route('student.create')->with('success', 'Student added successfully!');
    }
}
