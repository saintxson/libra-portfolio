@extends('layouts.app')

@section('content')
    <h4 class=" col-11">Добавление жанра</h4>
    <form method="POST" action="{{route('genre.store')}}">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="name" class="form-label">{{__('Название')}}</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div id="nameHelp" class="form-text">Жанр - это исторически сложившаяся группа произведений,
                объединенных общими признаками содержания и формы.</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{__('Описание')}}</label>
            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp">{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div id="descriptionHelp" class="form-text">Краткая характеристика жанра.</div>
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
