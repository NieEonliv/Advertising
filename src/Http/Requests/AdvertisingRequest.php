<?php

namespace Nieeonliv\Advertising\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdvertisingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'position' => ['required', 'unique:advertisings,position'],
            'tag' => 'required',
            'style' => '',
            'option' => 'json',
        ];
    }

    public function messages(): array
    {
        return [
            'position.required' => 'Укажите позицианирование рекламы',
            'position.unique' => 'Позицианирование рекламы должно быть уникальным',
            'tag.required' => 'Поле тегов обязательно',
            'option.json' => 'Оибка при обработки option',
        ];
    }
}
