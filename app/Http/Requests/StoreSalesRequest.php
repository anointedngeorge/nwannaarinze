<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSalesRequest extends FormRequest
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
        return [
            'product' => ['required', 'exists:products,id'],
            'quantity' => ['integer'],
            'amount' => ['float'],
            'discount' => ['float', 'nullable'],
            'currency' => ['string', 'nullable'],
            'is_approved' => ['boolean', 'nullable'],
            'client_name' => ['required', 'string'],
            'client_email' => ['required', 'string'],
            'client_phone' => ['required', 'string'],
            'payment_type' => ['required' , 'string'],
            'payment_status' => ['nullable', Rule::in(['pending', 'success','rejected'])],
        ];
    }
}
