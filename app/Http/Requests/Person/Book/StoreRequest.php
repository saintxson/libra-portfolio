<?php

namespace App\Http\Requests\Person\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|required|unique:books',
            'genres' => 'array|required',
            'author_id' => 'int|required',
            'description' => 'string|required',
            'link' => 'string|required'
        ];
    }
}
