@extends('base')

@section('body')

    <div class="text-center">
        <h2 class="main-title">Přidání lokace do databáze - krok 1/2</h2>
    </div>

    <div class="section-menu">
        <a href="" title="">Jak zjistím zeměpisné souřadnice?</a>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">

            @include('partials.errorslist')

            <form method="get" action="{{ action('LocationController@create2') }}" class="form-horizontal">
                <div class="form-group">
                    <label for="title">Název: <span class="small text-danger">(povinné)</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Jak se toto místo jmenuje?" value="{{ Input::old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="location">Umístění: <span class="small text-danger">(povinné)</span></label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Kde se toto místo nachází? Např. vedle kašny." value="{{ Input::old('location') }}" required>
                </div>
                <div class="form-group">
                    <label for="latitude">Zeměpisná šířka: <span class="small text-danger">(povinné)</span></label>
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Tato informace je nutná pro správné umístění bodu na mapě." value="{{ Input::old('latitude') }}" required>
                </div>
                <div class="form-group">
                    <label for="longitude">Zeměpisná délka: <span class="small text-danger">(povinné)</span></label>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Tato informace je nutná pro správné umístění bodu na mapě." value="{{ Input::old('longitude') }}" required>
                </div>

                <br>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary">Další krok</button>
                </div>
            </form>
        </div>
    </div>
@stop