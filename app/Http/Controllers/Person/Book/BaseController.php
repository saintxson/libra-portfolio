<?php

namespace App\Http\Controllers\Person\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Services\Person\Book\Service;

class BaseController extends Controller
{
    protected $service;
    protected $books;
    protected $genres;
    protected $authors;

    public function __construct(Service $service)
    {
        $this->service = $service;
        $this->books =Book::all()->where('visible', 1);
        $this->genres =Genre::all()->where('visible', 1);
        $this->authors =Author::all();
    }
}
