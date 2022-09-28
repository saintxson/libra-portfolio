@extends('layouts.admin')

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
                                            <a  class="h6"
                                               href="{{route('admin.book.show', $book->id)}}">{{$book->name}}</a>
                                        </h6>
                                    @endif
                                @endforeach
                            @endforeach
                            <div class="container-fluid row mb-3 pt-3">
                                <a href="{{route('admin.genre.edit', $genre->id)}}"
                                   class="card-link btn btn-secondary">Изменить</a>
                                <form class="col-sm-6" action="{{route('admin.genre.delete', $genre->id)}}"
                                      method="post">
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
