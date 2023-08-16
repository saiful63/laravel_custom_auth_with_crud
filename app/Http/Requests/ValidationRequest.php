<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ValidationRequest extends FormRequest
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
        'name'=>['required', 'max:5'],
        'price'=>['required'],
        ];
    }

    public function messages(){

        return [
        'name.required' => 'Name has Necessity',
        'name.max' => 'Name lenght should be smmaller than 5',
        'price.required' => 'Price required',
        ];
    }
}
