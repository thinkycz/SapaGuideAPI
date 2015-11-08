@extends('base')

@section('body')

    <div class="wrapper">

        <h2 class="main-title">Registrace</h2>

        <div class="col-md-3"></div>

        <div class="col-md-6">

            @include('partials.errorslist')

            <form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Jméno</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Ověření hesla</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <br>

                <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Zaregistrovat se</button>
                </div>
            </form>

        </div>
    </div>

@stop
