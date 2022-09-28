@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bold">{{ __('Книги') }}</div>
                    <div class="card-body">
                        <ul class="list-group list-group-light">
                            @if (count($books) !== 0)
                                @foreach($books as $book)
                                    <li class="list-group-item list-group-item-action px-3 border-0 ">
                                        <a class="link-primary  text-secondary "
                                           href="{{route('book.show', $book['id'])}}">{{$book['name']}}</a>
                                        @foreach ($authors as $author)
                                            @if($author['id'] == $book['author_id'])
                                                <a class="link-primary  text-secondary "
                                                   href="{{route('author.show', $author['id'])}}">({{$author['first_name']}} {{$author['second_name']}}
                                                    )</a>
                                            @endif
                                        @endforeach
                                        @foreach ($book->genres as $bookGenre)
                                            @foreach($genres as $genre)
                                                @if($genre->id == $bookGenre->id)
                                                    <a class="link-primary  text-secondary "
                                                       href="{{route('genre.show', $genre->id)}}">({{$genre->name}})</a>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </li>
                                @endforeach
                            @else
                                <p>Книг пока что, новые книги скоро добавятся.</p>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bold">{{ __('Книги (JSON)') }}</div>
                    <div class="card-body">
                        {{$json_books}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
