<?php

namespace App\Http\Resources;

use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EventsRegistrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return  [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'occupation' => $this->occupation,
            'phone' => $this->phone,
            'state_of_resident' => $this->state_of_resident,
            'civil_interest'  => $this->civil_interest,
            'submit_expectation' => $this->submit_expectation,
        ];
    }

   
}
