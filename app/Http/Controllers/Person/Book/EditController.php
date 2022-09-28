<?php

namespace App\Http\Controllers\Person\Book;

use App\Models\Book;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        return view('person.book.edit', [
            'book' => $book,
            'genres' => $this->genres
        ]);
    }
}
