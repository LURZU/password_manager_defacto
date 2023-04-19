<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'Le champs titre est requis ou doit comporter au moins 8 caractères',
            'content.required' => 'Le champs slug est requis ou doit comporter au moins 8 caractères',
            'slug.required' => 'Le slug est déjà utilisé ou doit comporter au moins 8 caractères',
            'category_id.required' => 'Vous devez sélectionner une catégorie valide',
        ];
    }

}
