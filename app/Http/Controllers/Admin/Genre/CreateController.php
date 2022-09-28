<?php

namespace App\Http\Controllers\Admin\Genre;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.genre.create',
            [
                'books' => $this->books,
                'genres' => $this->genres,
                'authors' => $this->authors
            ]
        );
    }
}
