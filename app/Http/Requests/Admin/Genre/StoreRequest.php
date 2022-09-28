<?php

namespace App\Http\Requests\Admin\Genre;

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
            'name' => 'string|unique:genres|required',
            'description' => 'string'
        ];
    }
}
