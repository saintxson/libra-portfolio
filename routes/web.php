<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'Book\IndexController');

Route::group(['namespace' => 'Book', 'prefix' => 'books'], function () {
    Route::get('/', 'IndexController')->name('book.index');
    Route::get('/{book}', 'ShowController')->name('book.show');
});

Route::group(['namespace' => 'Genre', 'prefix' => 'genres'], function () {
    Route::get('/', 'IndexController')->name('genre.index');
    Route::get('/{genre}', 'ShowController')->name('genre.show');
});

Route::group(['namespace' => 'Author', 'prefix' => 'authors'], function () {
    Route::get('/', 'IndexController')->name('author.index');
    Route::get('/{author}', 'ShowController')->name('author.show');
});

Route::group(['namespace' => 'Person', 'prefix' => 'person', 'middleware' => 'author'], function(){
    Route::get('/', 'Book\IndexController')->name('person.book.index');
    Route::group(['namespace'=>'Book', 'prefix'=>'/books'], function(){
        Route::get('/', 'IndexController')->name('person.book.index');
        Route::get('/create', 'CreateController')->name('person.book.create');
        Route::post('/', 'StoreController')->name('person.book.store');
        Route::get('/{book}', 'ShowController')->name('person.book.show');
        Route::get('/{book}/edit', 'EditController')->name('person.book.edit');
        Route::post('/{book}', 'UpdateController')->name('person.book.update');
        Route::delete('/{book}', 'DeleteController')->name('person.book.delete');
    });
    Route::group(['namespace' => 'Profile', 'prefix' => '/profile'], function(){
       Route::get('/', 'EditController')->name('person.profile.edit');
       Route::post('/', 'UpdateController')->name('person.profile.update');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Book', 'prefix' => '/books'], function () {
        Route::get('/', 'IndexController')->name('admin.book.index');
        Route::get('/create', 'CreateController')->name('admin.book.create');
        Route::post('/', 'StoreController')->name('admin.book.store');
        Route::get('/{book}', 'ShowController')->name('admin.book.show');
        Route::get('/{book}/edit', 'EditController')->name('admin.book.edit');
        Route::post('/{book}', 'UpdateController')->name('admin.book.update');
        Route::delete('/{book}', 'DeleteController')->name('admin.book.delete');
    });

    Route::group(['namespace' => 'Genre', 'prefix' => '/genres'], function () {
        Route::get('/', 'IndexController')->name('admin.genre.index');
        Route::get('/create', 'CreateController')->name('admin.genre.create');
        Route::post('/', 'StoreController')->name('admin.genre.store');
        Route::get('/{genre}', 'ShowController')->name('admin.genre.show');
        Route::get('/{genre}/edit', 'EditController')->name('admin.genre.edit');
        Route::patch('/{genre}', 'UpdateController')->name('admin.genre.update');
        Route::delete('/{genre}', 'DeleteController')->name('admin.genre.delete');
    });

    Route::group(['namespace' => 'Author', 'prefix' => '/authors'], function(){
        Route::get('/', 'IndexController')->name('admin.author.index');
        Route::get('/{author}', 'ShowController')->name('admin.author.show');
    });
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
