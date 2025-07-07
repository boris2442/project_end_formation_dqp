<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FiliereRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Le nom de la filiere est requis.',
            'name.string' => 'Le nom de la filiere doit être une chaîne de caractères.',
            'name.max' => 'Le nom de la filiere ne peut pas dépasser 100 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
        ];
    }
}
