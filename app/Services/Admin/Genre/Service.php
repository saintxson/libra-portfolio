<?php

namespace App\Services\Admin\Genre;

use App\Models\Genre;

class Service
{
    public function store($data)
    {
        Genre::create($data);
    }

    public function update($genre, $data)
    {
        $genre->update($data);
    }
}
