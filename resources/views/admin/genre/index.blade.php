@extends('layouts.admin')

@section('content')
    <div class=" container-fluid row mb-3 pt-3">
        <h3 class=" col-11">{{__('Жанры')}}</h3>
        <a class="btn btn-secondary col-1" href="{{route('admin.genre.create')}}">{{__('Добавить')}}</a>
    </div>
    <ul class="list-group list-group-light">
        @foreach($genres as $genre)
            <li class="list-group-item list-group-item-action px-3 border-0 ">
                <a class="link-primary  text-secondary " href="{{route('admin.genre.show', $genre->id)}}">{{$genre->name}}</a>
            </li>
        @endforeach
    </ul>

@endsection
