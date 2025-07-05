<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FraisRequest extends FormRequest
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
            'tranche1' => 'numeric|min:0',
            'tranche2' => 'numeric|min:0',
            'tranche3' => 'numeric|min:0'
        ];
    }
    public function messages()
    {
        return   [
            'tranche1.numeric' => 'La tranche1 doit etre un nombre',
            'tranche1.numeric' => 'La tranche1 doit etre un nombre',
            'tranche2.numeric' => 'La tranche2 doit etre un nombre',
            'tranche2.min' => 'La tranche 2 doit etre superieur a 0',
            'tranche3.min' => 'La tranche 3 doit etre superieur a 0',
            'tranche3.min' => 'La tranche 3 doit etre superieur a 0',
        ];
    }
}
