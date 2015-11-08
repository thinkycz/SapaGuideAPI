@extends('base')

@section('body')

    <div class="wrapper">

        <h2 class="main-title">Přihlášení</h2>

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <div class="row text-center">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ action('Auth\OAuthController@redirectToFacebook') }}" class="btn btn-block btn-social btn-facebook social-btn">
                        <i class="fa fa-facebook"></i> Přihlásit se pomocí Facebooku
                    </a>
                </div>
            </div>

            <br>

            @include('partials.errorslist')

            {{--
            <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input type="password" name="password" id="password" class="form-control" required>
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
            --}}

        </div>
    </div>

@stop
