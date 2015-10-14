@extends('base')

@section('body')

    <div class="wrapper">

        <h2 class="main-title">Přihlášení</h2>

        <div class="col-md-3"></div>

        <div class="col-md-6">

            @include('partials.errorslist')

            <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label><input type="checkbox" name="remember" class="form-inline">&nbsp;Trvalé přihlášení</label>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="form-control btn btn-primary">Přihlásit se</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ action('Auth\AuthController@getRegister') }}" class="form-control btn btn-default">Nemáte účet? Zaregistrujte se</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
