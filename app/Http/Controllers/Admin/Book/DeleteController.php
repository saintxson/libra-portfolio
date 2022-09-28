<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

class DeleteController extends BaseController
{

    public function __invoke(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.book.index',
        [
            'books' => $this->books,
            'authors' => $this->authors,
            'genres' => $this -> genres
        ]);
    }
}
