<?php

namespace App\Http\Controllers\Admin\Book;

class IndexController extends BaseController
{

    public function __invoke()
    {
        return view('admin.book.index', [
            'books' => $this->books,
            'authors' => $this->authors,
            'genres' => $this->genres
        ]);
    }
}
