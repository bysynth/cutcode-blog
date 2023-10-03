<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('web')->guest() || auth('admin')->guest();
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email:dns'],
            'password' => ['required', 'string', 'min:1']
        ];
    }
}
