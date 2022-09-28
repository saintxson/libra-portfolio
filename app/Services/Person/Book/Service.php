<?php

namespace App\Services\Person\Book;

use App\Models\Book;

class Service
{
    public function store($authors, $data)
    {
        $author = $authors->where('user_id', auth()->user()->id)->first();
        $data['author_id'] = $author->id;
        $genres = $data['genres'];

        unset($data['genres']);

        $book = Book::create($data);
        $book->genres()->attach($genres);
    }

    public function update($book, $data)
    {
        $genres = $data['genres'];
        unset($data['genres']);
        $book->update($data);
        $book->genres()->sync($genres);
    }
}
