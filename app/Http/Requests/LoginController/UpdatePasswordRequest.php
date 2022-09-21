<?php

namespace App\Http\Requests\LoginController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordRequest extends FormRequest
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
            'old_password' => ['required', function($attribute, $value, $fail){
                if(!Hash::check($this->old_password, Auth()->user()->password)){
                    $fail('Пароль не верный');
                }
            }],
            'new_password' => ['required','min:8']
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => 'Старый пароль обязатеьный',
            'new_password.required' => 'Новый пароль обязатеьный',
            'new_password.min' => 'Новый пароль должен содержать минимум 8 символов'
        ];
    }
}
