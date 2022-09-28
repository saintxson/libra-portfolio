<?php

namespace App\Http\Controllers\Person\Book;

class IndexController extends BaseController
{

    public function __invoke()
    {
        $author = $this->authors->where('user_id', auth()->user()->id);
        $books = $this->books->where(
            'author_id',
            $author->first()->id
        );
        return view('person.book.index', compact('books'));
    }
}
