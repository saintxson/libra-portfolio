<?php

namespace App\Http\Controllers\Admin\Author;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return view('admin.author.index', [
            'books' => $this->books,
            'genres' => $this->genres,
            'authors' => $this->authors
        ]);
    }
}
