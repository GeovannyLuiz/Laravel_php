<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateContact extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        $rules = [
            'name' => ['required', 'min:6'],
            'phone' => ['required', 'max:9'],
            'email' => ['required', 'email', 'unique:contacts']
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = ['required', 'email', Rule::unique('contacts')->ignore($this->id)];
        }
        return $rules;
    }
}
