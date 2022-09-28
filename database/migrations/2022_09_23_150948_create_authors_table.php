<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{

    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('visible')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('books', function (Blueprint $table){
           $table->foreign('author_id', 'book_author_fk')->references('id')->on('authors')
           ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
        Schema::table('books', function (Blueprint $table){
           $table->dropForeign('book_author_fk');
        });
    }
}
