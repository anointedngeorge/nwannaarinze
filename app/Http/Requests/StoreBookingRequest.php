<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            "name" => ["string",'required'],
            "guest" => ['exists:guests,id', 'required'],
            "room" => ['exists:rooms,id', 'required'],
            "checkin" => ["string", "nullable"],
            "checkout" => ['string'],
            "status" => ['string'],
            "total_price" => ['integer', 'required'],
        ];
    }
}
