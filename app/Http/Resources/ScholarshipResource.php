<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ScholarshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'image' => $this->image,
            'title' => $this->title,
            'description' => $this->description,
            'google_form_link' => $this->google_form_link,
            'status' => $this->status,
        ];

    }
}
