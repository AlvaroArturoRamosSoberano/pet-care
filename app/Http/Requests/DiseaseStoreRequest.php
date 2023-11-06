<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiseaseStoreRequest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\Disease,name', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/', 'unique:App\Models\Disease,name'],
            'description' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/', 'max:255'],
            'symptom' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/'],
        ];
    }
}
