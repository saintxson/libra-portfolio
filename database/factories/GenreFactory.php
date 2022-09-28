<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{

    public function definition()
    {
        return [
            [
                'name' => '123',
                'description' => '123'
            ],
            [
                'name' => '223',
                'description' => '223'
            ],
        ];
    }
}
