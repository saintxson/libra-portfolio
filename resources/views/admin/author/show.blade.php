@extends('layouts.admin')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header brand-text"><h5
                                class="brand-text">{{$author->first_name}} {{$author->second_name}}</h5></div>
                        <div class="card-body">
                            @if(count($books) !== 0)
                                <p class="card-subtitle">Книги автора:</p>
                                @foreach($books as $book)
                                    <h6 class="badge text-secondary p-1">
                                        <a class="h6"
                                           href="{{route('book.show', $book->id)}}">{{$book->name}}</a>
                                    </h6>
                                @endforeach
                            @else
                                <p>У автора пока что нет опубликованных книг.</p>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
