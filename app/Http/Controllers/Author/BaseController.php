<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class BaseController extends Controller
{
    protected $books;
    protected $authors;

    public function __construct()
    {
        $this->books = Book::all()->where('visible', 1);
        $this->authors = Author::all()->where('visible', 1);
    }
}
