@extends('layouts.app')
@section('content')
    <h4 class=" col-11">Добавление книги</h4>
    <form method="POST" action="{{route('book.update', $book->id)}}">
        <form method="POST" action="">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Название</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                       value="{{$book->name}}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div id="nameHelp" class="form-text">Введите полное название книги</div>
            </div>

            <div class="mb-3 form-group">
                <label for="genre" class="form-label">Жанры</label>
                <select multiple name="genres[]" class="form-control" id="genre">
                    @foreach($genres as $genre)
                        <option
                            @foreach ($book->genres as $bookGenre)
                                {{$bookGenre->id === $genre->id? 'selected':''}}
                            @endforeach
                            value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
                </select>
                @error('genre')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div id="descriptionHelp" class="form-text">Краткая характеристика жанра.</div>

            </div>

            <div class=" mb-3 form-group">
                <label class="form-label" for="author">Автор</label>
                <select class="form-control" name="author_id" id="author">
                    @foreach($authors as $author)
                        <option
                            {{$author->id === $book->author->id ? 'selected':''}}
                            value="{{$author->id}}">{{$author->first_name}} {{$author->second_name}}
                        </option>
                    @endforeach
                </select>
                @error('author')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div id="descriptionHelp" class="form-text">Краткая характеристика жанра.</div>

            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp">{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div id="descriptionHelp" class="form-text">Краткая характеристика жанра.</div>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Ссылка</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="linkHelp" value="{{old('link')}}">
                @error('link')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div id="linkHelp" class="form-text">Жанр - это исторически сложившаяся группа произведений,
                    объединенных общими признаками содержания и формы.</div>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
@endsection
