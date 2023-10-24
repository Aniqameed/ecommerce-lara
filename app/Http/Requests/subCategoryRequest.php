<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
                        'description' => 'nullable|string',
                        // 'category_id' => 'required|exists:categories,id',
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
