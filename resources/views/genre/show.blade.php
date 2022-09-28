@extends('layouts.app')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header brand-text"><h5 class="brand-text">{{$genre->name}}</h5></div>
                        <div class="card-body">
                            <p class="card-text">{{$genre->description}}</p>
                            <p class="card-subtitle">Книги этого жанра:</p>
                            @foreach($books as $book)
                                @foreach($genre->books as $bookGenre)
                                    @if($book->id == $bookGenre->id)
                                        <h6 class="badge text-secondary p-1">
                                            <a class="h6"
                                                href="{{route('book.show', $book->id)}}">{{$book->name}}</a>
                                        </h6>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
