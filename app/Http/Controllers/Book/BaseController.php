<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Resources\Book\IndexResource as BookIndexResource;
use App\Http\Resources\Author\IndexResource as AuthorIndexResource;
use App\Http\Resources\Genre\IndexResource as GenreIndexResource;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;

class BaseController extends Controller
{
    protected $books;
    protected $authors;
    protected $genres;

    public function __construct()
    {
        $this->books =Book::all()->where('visible', 1);
        $this->authors = AuthorIndexResource::collection(Author::all()->where('visible', 1));
        $this->genres = Genre::all()->where('visible', 1);
    }

}
