<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class DeleteController extends BaseController
{
    public function __invoke(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('admin.genre.index',
        [
            'books' => $this->books,
            'genres' => $this->genres,
            'authors' => $this->authors
        ]);
    }
}
