<?php

namespace App\Http\Controllers\Person\Book;

use App\Http\Requests\Person\Book\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($this->authors, $data);
        return redirect()->route('person.book.index');
    }
}
