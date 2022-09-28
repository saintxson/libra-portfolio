@extends('layouts.app')
@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-bold">{{ __('Изменение книги') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('person.book.update', $book->id)}}">
                                @csrf
                                @method('post')
                                <div class="row mb-3">
                                    <label for="name" class="form-label">{{__('Заглавление')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           aria-describedby="nameHelp"
                                           value="{{$book->name}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="nameHelp" class="form-text">Так будет называться ваша книга на нашем
                                        портале.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="genre" class="form-label">{{__('Жанры')}}</label>
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
                                    <div id="descriptionHelp" class="form-text">К этим жанрам будет отнесена ваша
                                        книга.
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="form-label">{{__('Описание')}}</label>
                                    <textarea name="description" class="form-control" id="description"
                                              aria-describedby="descriptionHelp">{{$book->description}}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="descriptionHelp" class="form-text">Добавьте краткое описание к вашей
                                        книге.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="link" class="form-label">{{__('Ссылка')}}</label>
                                    <input type="text" class="form-control" name="link" id="link"
                                           aria-describedby="linkHelp"
                                           value="{{$book->link}}">
                                    @error('link')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="linkHelp" class="form-text">По этой ссылке будет доступна ваша книга.
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-secondary">{{__('Изменить')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
