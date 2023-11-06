<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreedStoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'unique:App\Models\Breed,name', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
        ];
    }
}
