<?php

namespace App\Http\Requests\Customers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

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
            'name' => [
                'required',
                'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/',
                'max:20',
                'min:3',
                'alpha',
            ],
            'last_name' => [
                'required',
                'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/',
                'max:20',
                'min:3',
                'alpha',
            ],
            'email' => [
                'required',
                'email',
                'max:50',
                Rule::unique('customers', 'email')->ignore($this->customer->id)
            ],
            'password' => [
                'required',
                'min:8',
            ],
            'phone_number' => [
                'required',
                'numeric',
                'min:10',
                Rule::unique('customers', 'phone_number')->ignore($this->customer->id)
            ],
            'address' => [
                'required',
                'string',
            ],
            'image_path' => [
                'required',
                // 'image',
                // 'mimes:jpg, bmp, png, jpeg',
                // 'file',
                // 'max:5120',
                // 'dimensions:min_width=100,min_height=100,max_width=800,max_height=800'
            ],
        ];
    }
}
