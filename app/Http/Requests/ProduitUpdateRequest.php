<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitUpdateRequest extends FormRequest
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
            'Nom_Produit' => ['required', 'string' , 'max:100'], 
            'Protein' => ['required', 'numeric', 'max:100'],
            'Sodium' => ['required', 'numeric', 'max:100'],
            'Magnesium' => ['required', 'numeric', 'max:100'],
            'Potassium' => ['required', 'numeric', 'max:100'],
            'Cobalt' => ['required', 'numeric', 'max:100'],
            'Manganese' => ['required', 'numeric', 'max:100'],
            'Zinc' => ['required', 'numeric', 'max:100'],
            'Iodine' => ['required', 'numeric', 'max:100'],
            'Vitamin_A' => ['required', 'numeric', 'max:100'],
            'Vitamin_D' => ['required', 'numeric', 'max:100'],
            'Vitamin_E' => ['required', 'numeric', 'max:100']
        ];
    }
}
