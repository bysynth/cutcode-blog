<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class NewPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('web')->guest();
    }

    public function rules(): array
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'string', 'email:dns', 'max:255'],
            'password' => ['required', 'string', 'confirmed', Password::defaults()]
        ];
    }
}
