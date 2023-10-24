<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sizeRequest extends FormRequest
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    // return ['size' => 'required|string',
                    // ];

                    return [
                        'size' => 'required|string|in:small,medium,large',
                    ];
                }
            case 'PUT':
                {
                    return [
                        //
                    ];
                }
            default:break
                ;
        }
    }
}
