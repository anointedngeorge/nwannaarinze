<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductsRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'type' => ['required', 'string'] ,
            'product_image' => ['required', 'string'],
            'quantity' => ['required', 'integer'],
            'amount' => ['integer', 'required'],
            'discount' => ['integer', 'nullable'],
            'is_discounted' => ['boolean', 'nullable'],
            'currency' => ['string', 'nullable'],
            'is_active' => ['boolean', 'nullable'],
        ];
    }
}
