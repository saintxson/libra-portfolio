<?php

namespace App\Http\Requests\Admin\Genre;

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
            'description' => 'string'
        ];
    }
}
