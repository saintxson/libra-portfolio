<?php

namespace App\Http\Controllers\Admin\Author;

use App\Models\Author;

class ShowController extends BaseController
{
    public function __invoke(Author $author)
    {
        $books = $this->books->where('author_id', $author->id);

        return view('admin.author.show', [
            'genres' => $this->genres,
            'authors' => $this->authors,
            'author' => $author,
            'books' => $books
        ]);
    }
}
