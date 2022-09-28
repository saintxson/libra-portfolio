<?php

namespace App\Http\Controllers\Genre;

use App\Models\Genre;

class ShowController extends BaseController
{

    public function __invoke(Genre $genre)
    {
        return view('genre.show', [
            'genre' => $genre,
            'books' => $this->books
        ]);
    }
}
