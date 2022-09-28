<?php

namespace App\Http\Controllers\Person\Profile;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends BaseController
{

    public function __invoke(Request $request)
    {
        $author = Author::all()->where('user_id', Auth()->user()->id)->first();
        return view('person.profile.edit', compact('author'));
    }
}
