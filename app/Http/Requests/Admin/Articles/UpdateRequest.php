<?php

namespace App\Http\Requests\Admin\Articles;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('articles')->ignore($this->article)],
            'slug' => ['required', 'string', 'min:3', 'max:255', Rule::unique('articles')->ignore($this->article)],
            'cover' => ['nullable', File::image()],
            'content' => ['required', 'string', 'min:10'],
            'link' => ['nullable', 'string', 'min:7', 'max:255'],
            'author_id' => ['required', Rule::exists('admins', 'id')],
            'categories' => ['required'],
            'categories.*' => ['required', 'numeric', Rule::exists('categories', 'id')],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'author_id' => $this->user('admin')->id
        ]);
    }

    public function attributes(): array
    {
        return [
            'title' => '"Заголовок"',
            'slug' => '"Slug"',
            'cover' => '"Обложка"',
            'content' => '"Содержимое"',
            'link' => '"Ссылка"',
            'categories' => '"Категории"',
        ];
    }

    public function messages(): array
    {
        return [
            'categories.*.required' => 'Нужно указать хотя бы одну категорию.',
            'categories.*.*' => 'Ошибка выбора категории.',
        ];
    }
}
