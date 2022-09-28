<?php

namespace App\Http\Controllers\Admin\Genre;

class IndexController extends BaseController
{

    public function __invoke()
    {
        return view('admin.genre.index',
        [
            'books' => $this->books,
            'authors' => $this -> authors,
            'genres' => $this -> genres
        ]);
    }
}
