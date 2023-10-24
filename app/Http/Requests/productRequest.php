<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
                        // 'product_id' => 'required|integer',
                        'name' => 'required|string',
                        'description' => 'required|string',
                        'price' => 'required|numeric',
                        // 'stock_quantity' => 'required|integer',
                        // 'category_id' => 'required|integer',
                        // 'slug' => 'required|string',
                        // 'sku' => 'required|string',
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
