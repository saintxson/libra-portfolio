@extends('layouts.app')

@section('content')
    <div class="jumbotron vertical-center bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header d-flex align-items-baseline text-bold">
                            <p class="m-0">{{ __('Изменение профиля') }}</p>
                            <div class="d-flex align-items-baseline text-bold ms-5">
                                <a class="card-link ms-3"
                                   href="{{route('person.book.index')}}">{{ __('Мои книги') }}</a>
                                <a class="card-link ms-2 text-secondary text-decoration-none h6"
                                   href="{{route('person.profile.edit')}}">{{ __('Изменить данные') }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('person.profile.update', auth()->user()->id) }}">
                                @csrf
                                @method('post')
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Логин') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="new_password"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Новый пароль') }}</label>

                                    <div class="col-md-6">
                                        <input id="new_password" type="password" class="form-control"
                                               name="new_password" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="first_name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name"
                                               value="{{ $author->first_name }}" required autocomplete="first_name"
                                               autofocus>

                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                                    <div class="col-md-6">
                                        <input id="second_name" type="text"
                                               class="form-control @error('second_name') is-invalid @enderror"
                                               name="second_name"
                                               value="{{ $author->second_name }}" required autocomplete="second_name"
                                               autofocus>

                                        @error('second_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-secondary">
                                            {{ __('Обновить') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
