<?php

namespace App\Http\Controllers\Genre;

class IndexController extends BaseController
{

    public function __invoke()
    {
        return view('genre.index',[
            'genres' => $this->genres
        ]);
    }
}
