<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'genre' => $this->genre,
            'author_id' => $this->author_id,
            'description'=> $this->description,
            'link' => $this->link
        ];
    }
}
