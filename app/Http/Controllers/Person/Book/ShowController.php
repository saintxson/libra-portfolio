<?php

namespace App\Http\Controllers\Person\Book;

use App\Models\Book;
use App\Models\Genre;

class ShowController extends BaseController
{

    public function __invoke(Book $book)
    {
        $genres = Genre::all();
        return view('person.book.show', compact([
                'book',
                'genres'
            ]
        ));
    }
}
