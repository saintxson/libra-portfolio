@extends('layouts.app')

@section('content')
    <h4 class=" col-11">Изменение жанра</h4>
    <form method="POST" action="{{route('genre.update', $genre->id)}}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">{{__('Название')}}</label>
            <input
                value="{{$genre->name}}"
                type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div id="nameHelp" class="form-text">Жанр - это исторически сложившаяся группа произведений,
                объединенных общими признаками содержания и формы.</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{__('Описание')}}</label>
            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" value="{{$genre->description}}"></textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div id="descriptionHelp" class="form-text">Краткая характеристика жанра.</div>
        </div>

        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection
