<?php

namespace App\Http\Requests\OrderController;

use Illuminate\Foundation\Http\FormRequest;

class NewOrderRequest extends FormRequest
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
            'service_id' => 'integer|required',
            'link' => 'string|required',
            'quantity' => 'integer|required'
        ];
    }

    public function messages()
    {
        return [
            'service_id.required' => 'Выберите услугу',
            'link.required' => 'Введите ссылку',
            'quantity.required' => 'Введите количество',
            'quantity.integer' => 'Количество должно быть числом'
        ];
    }
}
