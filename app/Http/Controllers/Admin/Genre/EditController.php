<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class EditController extends BaseController
{
    public function __invoke(Genre $genre)
    {
        return view('admin.genre.edit',
        [
            'genre' => $genre,
            'books' => $this->books,
            'genres' => $this->genres,
            'authors' => $this->authors
        ]);
    }
}
