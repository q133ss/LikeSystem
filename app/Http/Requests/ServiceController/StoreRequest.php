<?php

namespace App\Http\Requests\ServiceController;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'type_id' => 'string|nullable',
            'service_id' => 'string|nullable',
            'name' => 'string|nullable',
            'price' => 'string|nullable',
            'quality' => 'string|nullable',
            'start' => 'string|nullable',
            'speed' => 'string|nullable',
            'write_offs' => 'string|nullable',
            'guarantee' => 'string|nullable',
            'max' => 'string|nullable',
            'peculiarities' => 'string|nullable'
        ];
    }
}
