<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required|max:10|min:5',
            'role' => 'required|numeric'
        ];
    }

    public function messages() {
        return[
            'email.required'=>'Entrez un email.',
            'email.email'=>'Entrez un email.',
            'password.required'=>'Entrez un mot de passe.',
            'password.max'=>'10 caractères maximum',
            'password.min'=>'5 caractères minimum',
        ];
    }
}

