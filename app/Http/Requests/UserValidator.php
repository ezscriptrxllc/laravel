<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required'
            ],
            'email' => [
                'required',
                'email:rfc',
                Rule::unique('users','email')->ignore($this->user)
            ],
            'password' => [
                Rule::requiredIf(!isset($this->user)),
                'confirmed',
                Password::min(8)->mixedCase()->numbers()
            ]
        ];
    }
}
