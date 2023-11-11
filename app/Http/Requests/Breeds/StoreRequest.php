<?php

namespace App\Http\Requests\Breeds;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'unique:App\Models\Breed,name', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
        ];
    }
}
