@extends('layouts.app')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header brand-text"><h5 class="brand-text">{{$book['name']}}</h5></div>
                        <div class="card-body">
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Автор:</p>
                                @foreach($authors as $author)
                                    @if ($author['id'] == $book['author_id'])
                                        <h6 class="card-subtitle ml-2 mb-2"><a
                                                href="{{route('author.show', $author['id'])}}"
                                            >{{$author['first_name']}} {{$author['second_name']}}</a>
                                        </h6>
                                    @endif
                                @endforeach
                            </div>
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Жанры:</p>
                                @foreach($genres as $genre)
                                    @foreach($book->genres as $bookGenre)
                                        @if($genre['id'] == $bookGenre['id'])
                                            <h6 class="card-subtitle ml-2 mb-2"><a
                                                    href="{{route('genre.show', $genre['id'])}}">{{$genre['name']}}</a>
                                            </h6>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Ссылка для чтения:</p>

                                <h6 class="card-subtitle ml-2 mb-2"><a
                                        href="">{{$book['link']}}</a>
                                </h6>
                            </div>
                            <p class="card-text">{{$book['description']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header brand-text"><h5 class="brand-text">{{$book['name']}}{{__('(JSON)')}}</h5></div>
                        <div class="card-body">
                            {{$json_book}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

