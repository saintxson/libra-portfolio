<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Requests\Admin\Genre\UpdateRequest;
use App\Models\Genre;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Genre $genre)
    {
        $data = $request->validated();
        $this->service->update($genre, $data);

        return redirect()->route('admin.genre.index',
        [
            'genre' => $genre,
            'books' => $this->books,
            'authors' => $this->authors,
            'genres' => $this->genres
        ]);
    }
}
