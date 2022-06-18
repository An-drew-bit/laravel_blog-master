@extends('auth.layouts.layout');

@section('content')

    <div class="login-box">
        <div class="card card-outline card-primary">

            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1"><b>Laravel</b>Blog</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">Авторизация</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 offset-8">
                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{ route('forgot.show') }}">Я забыл мой пароль</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register.create') }}" class="text-center">Зарегистрируйте новый аккаунт</a>
                </p>
            </div>

        </div>
    </div>

@endsection
