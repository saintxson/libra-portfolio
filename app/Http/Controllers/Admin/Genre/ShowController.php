<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class ShowController extends BaseController
{
    public function __invoke(Genre $genre)
    {
        return view('admin.genre.show',
            [
                'genre' => $genre,
                'genres'=> $this->genres,
                'books' => $this->books,
                'authors' => $this->authors
            ]);
    }
}
