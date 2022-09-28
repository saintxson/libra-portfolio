<?php

namespace App\Http\Resources\Author;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name
        ];
    }
}
