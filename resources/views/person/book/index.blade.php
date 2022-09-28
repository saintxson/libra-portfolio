@extends('layouts.app')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-baseline text-bold">
                            <p class="m-0">{{ __('Личный кабинет') }}</p>
                            <div class="d-flex align-items-baseline text-bold ms-5">
                                <a class="card-link ms-2 text-secondary text-decoration-none h6"
                                   href="{{route('person.book.index')}}">{{ __('Мои книги') }}</a>
                                <a class="card-link ms-3"
                                   href="{{route('person.profile.edit')}}">{{ __('Изменить данные') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-light">
                                @foreach($books as $book)
                                    <li class="list-group-item list-group-item-action px-3 border-0 ">
                                        <a class="link-primary  text-secondary "
                                           href="{{route('person.book.show', $book->id)}}">{{$book->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class=" container-fluid row mb-3 pt-3">
                                <a class="btn btn-secondary "
                                   href="{{route('person.book.create')}}">{{__('Добавить')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
