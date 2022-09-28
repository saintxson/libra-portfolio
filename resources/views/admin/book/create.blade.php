@extends('layouts.admin')
@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-bold">{{ __('Новая книга') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.book.store')}}">
                                @csrf
                                @method('post')
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{__('Заглавление')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           aria-describedby="nameHelp"
                                           value="{{old('name')}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="nameHelp" class="form-text">Так будет называться ваша книга на нашем
                                        портале.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="genre"
                                           class="col-md-4 col-form-label text-md-end">{{__('Жанры')}}</label>
                                    <select multiple name="genres[]" class="form-control" id="genre">
                                        @foreach($genres as $genre)
                                            <option
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
                                    <label class="col-md-4 col-form-label text-md-end"
                                           for="author">{{('Автор')}}</label>
                                    <select class="form-control" name="author_id" id="author">
                                        @foreach($authors as $author)
                                            <option
                                                value="{{$author->id}}">{{$author->first_name}} {{$author->second_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('author')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="descriptionHelp" class="form-text">Этот пользователь будет являться
                                        автором.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description"
                                           class="col-md-4 col-form-label text-md-end">{{__('Описание')}}</label>
                                    <textarea name="description" class="form-control" id="description"
                                              aria-describedby="descriptionHelp">{{old('description')}}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="descriptionHelp" class="form-text">Добавьте краткое описание к вашей
                                        книге.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="link"
                                           class="col-md-4 col-form-label text-md-end">{{__('Ссылка')}}</label>
                                    <input type="text" class="form-control" name="link" id="link"
                                           aria-describedby="linkHelp"
                                           value="{{old('link')}}">
                                    @error('link')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="linkHelp" class="form-text">По этой ссылке будет доступна ваша книга.
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-secondary">{{__('Добавить')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
