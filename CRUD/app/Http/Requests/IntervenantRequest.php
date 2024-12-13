<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntervenantRequest extends FormRequest
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
            'matricule' => 'required|string|max:255|unique:etablissements,matricule',
            'nom' => 'required|string|max:255',
            'datenaissance' => 'required|date',
            'intitule_diplome' => 'required|string|max:255',
            'type_diplome' => 'required|string|max:255',
            'specialite_diplome' => 'required|string|max:255',
            'type_intervenant' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ];
    }
    public function messages(): array
    {
        return [
            'matricule.required' => 'The matricule is required.',
            'matricule.string' => 'The matricule must be a string.',
            'matricule.max' => 'The matricule may not be greater than 255 characters.',
            'matricule.unique' => 'The matricule has already been taken.',
            'nom.required' => 'The name is required.',
            'nom.string' => 'The name must be a string.',
            'nom.max' => 'The name may not be greater than 255 characters.',
            'datenaissance.required' => 'The date of birth is required.',
            'datenaissance.date' => 'The date of birth is not a valid date.',
            'intitule_diplome.required' => 'The diploma title is required.',
            'intitule_diplome.string' => 'The diploma title must be a string.',
            'intitule_diplome.max' => 'The diploma title may not be greater than 255 characters.',
            'type_diplome.required' => 'The diploma type is required.',
            'type_diplome.string' => 'The diploma type must be a string.',
            'type_diplome.max' => 'The diploma type may not be greater than 255 characters.',
            'specialite_diplome.required' => 'The diploma specialty is required.',
            'specialite_diplome.string' => 'The diploma specialty must be a string.',
            'specialite_diplome.max' => 'The diploma specialty may not be greater than 255 characters.',
            'type_intervenant.required' => 'The intervenant type is required.',
            'type_intervenant.string' => 'The intervenant type must be a string.',
            'type_intervenant.max' => 'The intervenant type may not be greater than 255 characters.',
            'status.required' => 'The status is required.',
            'status.string' => 'The status must be a string.',
            'status.in' => 'The status must be either active or inactive.',
        ];
    }
}
