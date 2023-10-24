<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class colorRequest extends FormRequest
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
                    return [
                        'name' => 'required|string|max:255',
                        'hex_code' => 'required|string|regex:/^#([A-Fa-f0-9]{6})$/i|unique:colors,hex_code',
                        // 'rgb_code' => 'required|string|max:20',
                        // 'cmyk' => 'nullable|string|max:20',
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

