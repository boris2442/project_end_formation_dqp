<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sexe' => 'required|string|in:Masculin,Feminin',
            'date_naissance' => 'nullable|date',
            'telephone' => 'nullable|string|max:55',
            'adresse' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'filiere' => 'nullable|string|max
            'lieu_de_naissance' => 'required|string|max:255',
            // Add other fields as necessary
        ];
    }
    public function messages()
    {
        return [
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

        ];
    }
}
