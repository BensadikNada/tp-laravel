<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|regex:/^[a-zA-Z\s]*$/', 
            'prenom' => 'required|regex:/^[a-zA-Z\s]*$/',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            "nom.required" => "Le nom est obligatoire",
            "prenom.required" => "Le prénom est obligatoire",
            "date_naissance.required" => "La date de naissance est obligatoire",
        ];
    }
}
