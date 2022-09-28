<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

class ShowController extends BaseController
{

    public function __invoke(Book $book)
    {
        return view('admin.book.show',
            [
                'book' => $book,
                'books' => $this->books,
                'authors' => $this->authors,
                'genres' => $this->genres
            ]);
    }
}
