<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $this->service->update($book, $data);

        return redirect()->route('admin.book.index',[
            'book' => $book,
            'books' => $this->books,
            'authors' => $this->authors,
            'genres' => $this->genres
        ]);
    }
}
