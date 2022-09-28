@extends('layouts.admin')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-bold">{{ __('Авторы') }}</div>
                        <div class="card-body">
                            <ul class="list-group list-group-light">
                                @if(count($authors) !== 0)
                                    @foreach($authors as $author)
                                        <li class="list-group-item list-group-item-action px-3 border-0 ">
                                            <a class="link-primary  text-secondary "
                                               href="{{route('admin.author.show', $author->id)}}">{{$author->first_name}} {{$author->second_name}}</a>
                                            @php($total = 0)
                                            @foreach($books as $book)
                                                @if($author['id'] === $book['author_id'])
                                                    @php($total++)
                                                @endif
                                            @endforeach
                                            ({{$total}} книг)
                                        </li>
                                    @endforeach
                                @else
                                    <p>Авторов пока что нет, новые авторы скоро появятся.</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
