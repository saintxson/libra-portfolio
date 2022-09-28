<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Requests\Admin\Genre\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.genre.index',
        [
            'books' => $this->books,
            'genres' => $this->genres,
            'authors' => $this->authors
        ]);
    }
}
