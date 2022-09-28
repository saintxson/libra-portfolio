<?php

namespace App\Http\Controllers\Person\Book;

use App\Http\Requests\Person\Book\UpdateRequest;
use App\Models\Book;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $this->service->update($book, $data);

        return redirect()->route('person.book.index', [
            'book' => $book,
            'genres' => $this->genres
        ]);
    }
}
