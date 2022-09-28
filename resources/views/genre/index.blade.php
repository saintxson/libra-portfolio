@extends('layouts.app')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-bold">{{ __('Жанры') }}</div>
                        <div class="card-body">
                            <ul class="list-group list-group-light">
                                @if (count($genres) !== 0 )
                                @foreach($genres as $genre)
                                    <li class="list-group-item list-group-item-action px-3 border-0 ">
                                        <a class="link-primary  text-secondary "
                                           href="{{route('genre.show', $genre->id)}}">{{$genre->name}}</a>
                                    </li>
                                @endforeach
                                @else
                                    <p>Жанров пока что нет, новые жанры скоро появятся.</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
