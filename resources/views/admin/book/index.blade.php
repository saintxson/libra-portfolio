@extends('layouts.admin')

@section('content')
    <div class=" container-fluid row mb-3 pt-3">
        <h3 class=" col-11">{{__('Книги')}}</h3>
        <a class="btn btn-secondary col-1" href="{{route('admin.book.create')}}">{{__('Добавить')}}</a>
    </div>
    <ul class="list-group list-group-light">
        @foreach($books as $book)
            <li class="list-group-item list-group-item-action px-3 border-0 ">
                <a class="link-primary  text-secondary "
                   href="{{route('admin.book.show', $book->id)}}">{{$book->name}}</a>
                @foreach ($authors as $author)
                    @if($author->id == $book->author_id)
                        <a class="link-primary  text-secondary "
                           href="{{route('admin.author.show', $author->id)}}">({{$author->first_name}} {{$author->second_name}}
                            )</a>
                    @endif
                @endforeach
                @foreach ($book->genres as $bookGenre)
                    @foreach($genres as $genre)
                        @if($genre->id == $bookGenre->id)
                            <a class="link-primary  text-secondary "
                               href="{{route('admin.genre.show', $genre->id)}}">({{$genre->name}})</a>
                        @endif
                    @endforeach
                @endforeach
            </li>
        @endforeach
    </ul>

@endsection
