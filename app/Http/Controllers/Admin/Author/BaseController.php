<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
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
        $this->books = Book::all()->where('visible', 1);
        $this->authors =Author::all()->where('visible', 1);
        $this->genres = Genre::all()->where('visible', 1);
    }
}
