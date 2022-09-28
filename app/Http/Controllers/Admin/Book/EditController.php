<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        return view('admin.book.edit',
        [
            'book' => $book,
            'genres' => $this->genres,
            'books' => $this->books,
            'authors' => $this->authors
        ]);
    }
}
