<?php

namespace App\Http\Requests\LoginController;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя',
            'name.string' => 'Поле имя должно быть строкой',
            'email.required' => 'Введите Email',
            'email.email' => 'Поле Email неверное',
            'password.required' => 'Введите пароль',
            'password.min' => 'Пароль должен содержать не менее 8 символов',
        ];
    }
}
