<?php

namespace App\Http\Requests\PetDetails;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'pet_id' => ['required', 'numeric', 'exists:App\Models\Pet,id'],
            'age' => ['required', 'numeric'],
            'weight_kg' => ['required'],
        ];
    }
}
