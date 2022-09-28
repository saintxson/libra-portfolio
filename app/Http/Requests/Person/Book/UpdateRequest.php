<?php

namespace App\Http\Requests\Person\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|required',
            'genres' => 'array|required',
            'author_id' => 'int|required',
            'description' => 'string|required',
            'link' => 'string|required'
        ];
    }
}
