<?php

namespace App\Http\Controllers\Admin\Book;

class CreateController extends BaseController
{

    public function __invoke()
    {
        return view('admin.book.create',
        [
            'books' => $this->books,
            'authors' => $this->authors,
            'genres' => $this->genres,
        ]);
    }
}
