<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenresTable extends Migration
{

    public function up()
    {
        Schema::create('book_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('book_id', 'book_genre_book_fk')->references('id')->on('books')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('genre_id', 'book_genre_genre_fk')->references('id')->on('genres')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_genre');
    }
}
