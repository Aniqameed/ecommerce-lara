<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderRequest extends FormRequest
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
                        'customer_name' => 'required|string|max:255',
                        'customer_email' => 'required|email|max:255',
                        'order_number' => 'required|string', // Validate that order_number is a string and is required.
                        'order_date' => 'required|date', // Validate that order_date is a date and is required.
                        'total_amount' => 'required|numeric', // Validate that total_amount is a numeric value and is required.
                        'status' => 'required|string', // Validate that status is a string and is required.
                        'payment_method' => 'required|string', // Validate that payment_method is a string and is required.
                        'shipping_address' => 'required|array', // Validate that shipping_address is an array and is required.
                        'billing_address' => 'required|array',
                        'quantity' => 'required|integer|min:1',
                        'order_notes' => 'nullable|string',
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

