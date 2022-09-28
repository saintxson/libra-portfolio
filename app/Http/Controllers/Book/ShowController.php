<?php

namespace App\Http\Controllers\Book;

use App\Http\Resources\Book\ShowResource;
use App\Models\Book;

class ShowController extends BaseController
{

    public function __invoke(Book $book)
    {
        $json_book = [];
        foreach ($this->authors as $author) {
            if ($book->author_id === $author->id) {
                $json_book = [
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
                    array_push($json_book["genres"], $genre->name);
                }
            }
        }
        $json_book = json_encode($json_book, JSON_UNESCAPED_UNICODE);
        return view('book.show', [
            'book' => $book,
            'authors' => $this->authors->jsonSerialize(),
            'genres' => $this->genres->jsonSerialize(),
            'json_book' => $json_book

        ]);
    }
}
