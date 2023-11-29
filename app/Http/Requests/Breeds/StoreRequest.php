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
    public function attributes()
    {
        return [
            'name' => 'Nombre',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'El nombre ya esta en uso',
            'name.regex' => 'Ingrese solo letras',
        ];
    }
}
