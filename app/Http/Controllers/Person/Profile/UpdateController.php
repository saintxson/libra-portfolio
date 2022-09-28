<?php

namespace App\Http\Controllers\Person\Profile;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends BaseController
{

    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'new_password' => '',
            'first_name' => 'string',
            'second_name' => 'string'
        ]);

        $author_data = [
            'first_name' => $data['first_name'],
            'second_name' => $data['second_name']
        ];
        unset($data['first_name']);
        unset($data['second_name']);
        Auth()->user()->update($data);
        $author = Author::all()->where('user_id', auth()->user()->id);
        $author[1]->update($author_data);

        return redirect()->route('person.book.index');
    }
}
