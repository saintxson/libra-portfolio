@extends('layouts.admin')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Изменение жанра') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.genre.update', $genre->id)}}">
                                @csrf
                                @method('patch')
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{__('Название')}}</label>
                                    <input
                                        value="{{$genre->name}}"
                                        type="text" class="form-control" name="name" id="name"
                                        aria-describedby="nameHelp">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="nameHelp" class="form-text">Жанр - это исторически сложившаяся группа
                                        произведений,
                                        объединенных общими признаками содержания и формы.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="form-label">{{__('Описание')}}</label>
                                    <textarea name="description" class="form-control" id="description"
                                              aria-describedby="descriptionHelp"
                                    >{{$genre->description}}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="descriptionHelp" class="form-text">Краткое описанме жанра.</div>
                                </div>
                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-secondary">Изменить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
