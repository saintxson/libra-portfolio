<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
     $genres = Genre::factory(10)->make();
     dd($genres);
    }
}
