@extends('layouts.admin')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-bold">{{ __('Новый жанр') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.genre.store')}}">
                                @csrf
                                @method('post')
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{__('Название')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           aria-describedby="nameHelp"
                                           value="{{old('name')}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div id="nameHelp" class="form-text">Жанр - это исторически сложившаяся группа
                                        произведений,
                                        объединенных общими признаками содержания и формы.
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
                                    <div id="descriptionHelp" class="form-text">Краткое описание жанра.</div>
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
