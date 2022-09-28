<?php

namespace App\Http\Controllers\Person\Book;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('person.book.create',
        [
            'genres' => $this->genres,
            'authors' => $this->authors
        ]);
    }
}
