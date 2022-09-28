<?php

namespace App\Http\Controllers\Author;

use App\Models\Author;

class IndexController extends BaseController
{

    public function __invoke()
    {
        return view('author.index', [
            'books' => $this->books,
            'authors' => $this->authors
        ]);
    }
}
