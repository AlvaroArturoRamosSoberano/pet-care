<?php

namespace App\Http\Requests\Pets;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'birthday' => ['nullable','date'],
            'specie_id' => ['required', 'numeric', 'exists:App\Models\Specie,id'],
            'hair_color' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
            'image_path' => ['required', 'string'],
            'customer_id' => ['required', 'numeric', 'exists:App\Models\Customer,id'],
        ];
    }
}
