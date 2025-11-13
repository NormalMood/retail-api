<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StockRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dateFrom' => [
                'required', 
                'date_format:Y-m-d', 
                'after:yesterday',
                'before:tomorrow'
            ],
            'limit' => [
                'nullable', 
                'integer', 
                'min:1', 
                'max:500'
            ]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            $validator->errors()->toArray(),
            400
        ));
    }
}
