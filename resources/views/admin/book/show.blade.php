`@extends('layouts.admin')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header brand-text"><h5 class="brand-text">{{$book->name}}</h5></div>
                        <div class="card-body">
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Автор:</p>
                                @foreach($authors as $author)
                                    @if ($author->id == $book->author_id)
                                        <h6 class="card-subtitle ml-2 mb-2"><a
                                                href=""
                                            >{{$author->first_name}} {{$author->second_name}}</a>
                                        </h6>
                                    @endif
                                @endforeach
                            </div>
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Жанры:</p>
                                @foreach($genres as $genre)
                                    @foreach($book->genres as $bookGenre)
                                        @if($genre->id == $bookGenre->id)
                                            <h6 class="card-subtitle ml-2 mb-2"><a
                                                    href="{{route('admin.genre.show', $genre->id)}}">{{$genre->name}}</a>
                                            </h6>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="d-flex align-items-baseline">
                                <p class="card-subtitle">Ссылка для чтения:</p>

                                <h6 class="card-subtitle ml-2 mb-2"><a
                                        href="">{{$book->link}}</a>
                                </h6>
                            </div>
                            <p class="card-text">{{$book->description}}</p>
                            <div class="container-fluid row mb-3 pt-3">
                                <a href="{{route('admin.book.edit', $book->id)}}"
                                   class="card-link btn btn-secondary">Изменить</a>
                                <form class="col-sm-6 m-0" action="{{route('admin.book.delete', $book->id)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" class="card-link btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
`
