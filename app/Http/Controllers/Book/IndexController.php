<?php

namespace App\Http\Controllers\Book;

use App\Http\Resources\Book\IndexResource;

class IndexController extends BaseController
{

    public function __invoke()
    {
        $json_books = [];
        $i = 0;
        foreach ($this->books as $book) {
            foreach ($this->authors as $author) {
                if ($book->author_id === $author->id) {
                    $json_books[$i] = [
                        'id' => $book->id,
                        'name' => $book->name,
                        'author' => $author->first_name . ' ' . $author->second_name,
                        'description' => $book->description,
                        'link' => $book->link,
                        'genres' => []
                    ];
                }
            }
            foreach ($book->genres as $bookGenre) {
                foreach ($this->genres as $genre) {
                    if ($genre->id == $bookGenre->id) {
                        array_push($json_books[$i]["genres"], $genre->name);
                    }
                }
            }
            $i++;
        }

        $json_books = json_encode(array_values($json_books), JSON_UNESCAPED_UNICODE);
        return view('book.index',
            [
                'books' => $this->books,
                'genres' => $this->genres,
                'authors' => $this->authors,
                'json_books' => $json_books
            ]);
    }
}
