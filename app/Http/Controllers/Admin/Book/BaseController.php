<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Services\Admin\Book\Service;

class BaseController extends Controller
{
    protected $service;
    protected $books;
    protected $authors;
    protected $genres;

    public function __construct(Service $service)
    {
        $this->service = $service;
        $this->books = Book::all()->where('visible', 1);
        $this->authors =Author::all()->where('visible', 1);
        $this->genres = Genre::all()->where('visible', 1);
    }
}
