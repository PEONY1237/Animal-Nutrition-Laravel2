<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // return $this->user()->can('create articles');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'CIN' => ['required', 'string', 'min:6' , 'max:7'],
            'Nom_Client' => ['required', 'string' , 'max:100'], 
            'Prenom_Client' => ['required', 'string' , 'max:100'], 
            'Email_Client' => ['required', 'email', 'max:100'],
            'Telephone' => ['required', 'string', 'max:20'],
            'Password_Client' => ['required' , 'password' , 'min:8']
        ];
    }
}
