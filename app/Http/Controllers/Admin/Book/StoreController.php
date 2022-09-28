<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\StoreRequest;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.book.index');
    }
}
