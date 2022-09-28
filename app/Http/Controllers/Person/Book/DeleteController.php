<?php

namespace App\Http\Controllers\Person\Book;

use App\Models\Book;

class DeleteController extends BaseController
{
    public function __invoke(Book $book)
    {
        $book->delete();
        return redirect()->route('person.book.index');
    }
}
