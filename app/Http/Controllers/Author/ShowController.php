<?php

namespace App\Http\Controllers\Author;

use App\Models\Author;

class ShowController extends BaseController
{

    public function __invoke(Author $author)
    {
        $books = $this->books->where('author_id', $author->id);

        return view('author.show',[
            'author' => $author,
            'books' => $books
        ]);
    }
}
