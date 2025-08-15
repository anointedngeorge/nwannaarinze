<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
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
            'hotel' => ['exists:hotels,id', 'required'],
            'type' => ['exists:room_types,id', 'required'],
            'name' => ['string', 'required'],
            'images' => ['nullable', 'string'],
            'featured_image' => ['string', 'required'],
            'description' => ['string', 'required'],
            'capacity' => ['integer', 'required'],
        ];
        
    }
}
