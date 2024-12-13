<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //remember to switch to true
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
            'nom' => 'required|regex:/^[a-zA-Z\s]*$/', 
            'prenom' => 'required|regex:/^[a-zA-Z\s]*$/',
            'tel'=>'required|numeric',
            'date_naissance' => 'required|date',
            'office'=>'required|string',
            'filiere' => 'required|regex:/^[a-zA-Z\s]*$/',
            'image'=>'image|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [
            "nom.required" => "Le nom est obligatoire",
            "prenom.required" => "Le prénom est obligatoire",
            "tel.required" => "Le numéro de téléphone est obligatoire",
            "office.required" => "L'office est obligatoire",
            "filiere.required" => "La filière est obligatoire",
            "image.required"=>"s'il vous plait entrer une image",
        ];
    }
}
