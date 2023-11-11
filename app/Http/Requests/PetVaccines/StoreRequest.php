<?php

namespace App\Http\Requests\PetVaccines;

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
            'pet_id' => ['required', 'numeric','exists:App\Models\Pet,id'],
            'vaccine_id' => ['required', 'numeric', 'exists:App\Models\Vaccine,id'],
            'aplication' => ['required','date'],
            'next_aplication'=> ['nullable','date'],
        ];
    }
}
