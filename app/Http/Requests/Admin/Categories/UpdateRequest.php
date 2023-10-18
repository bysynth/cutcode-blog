<?php

namespace App\Http\Requests\Admin\Categories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255', Rule::unique('categories')->ignore($this->category)],
            'slug' => ['required', 'string', 'min:3', 'max:255', Rule::unique('categories')->ignore($this->category)],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => '"Название"',
            'slug' => '"Slug"'
        ];
    }
}
