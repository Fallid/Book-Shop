<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "type" => $this->type,
            "release_date" => $this->release_date,
            "pages" => $this->pages,
            "author" => $this->author,
            "description" => $this->description,
            "image" => $this->image,
            "price" => $this->price,
        ];
    }
}
