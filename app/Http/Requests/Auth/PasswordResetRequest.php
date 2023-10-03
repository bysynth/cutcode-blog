<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth('web')->guest();
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email:dns']
        ];
    }
}
