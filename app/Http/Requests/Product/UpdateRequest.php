<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255', // Обязательное поле, строка максимум 255 символов
            'description' => 'nullable|string', // Опциональное поле, строка
            'price' => 'required|numeric|min:0.01', // Обязательное поле, числовое значение больше 0.01
            'category_id' => 'required|exists:categories,id', // Обязательное поле, должно существовать в таблице categories в поле id
        ];
    }
}
