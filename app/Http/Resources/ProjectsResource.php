<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;

class ProjectsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        "image" => Storage::url($this->image),
        "tag" => $this->tag,
        "title" => $this->title,
        "content" => $this->content,
        "can_show" => $this->can_show
    ];
    }
}
