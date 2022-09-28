<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration
{

    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('visible')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    public function down()
    {
        Schema::dropIfExists('genres');
        Schema::table('books', function(Blueprint $table){
            $table->dropForeign('book_genre_fk');
        });
    }
}
