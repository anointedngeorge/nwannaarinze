<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRegistrationRequest extends FormRequest
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
        return [
            "event" => ['integer'],
            "email" => ['required', 'email'],
            "first_name" => ['required', 'string', 'max:255'],
            "last_name" => ['required', 'string', 'max:255'],
            "middle_name" => ['nullable', 'string', 'max:255'],
            "occupation" => ['nullable', 'string', 'max:255'],
            "state_of_resident" => ['required', 'string', 'max:255'],
            "submit_expectation" => ['nullable', 'string'],
            "phone" => ['required', 'string', 'max:20'],
            "civic_interest" => ['nullable', 'string'],
        ];
    }
}
