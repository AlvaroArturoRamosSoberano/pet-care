<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetStoreRequest extends FormRequest
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
            'pet_name' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
            'birthday' => ['required', 'date'],
            'specie_id' => ['required', 'numeric', 'exists:App\Models\Specie,id'],
            'hair_color' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
            'image_path' => ['required', 'string'],
            'client_id' => ['required', 'numeric', 'exists:App\Models\Client,id'],
        ];
    }
}
