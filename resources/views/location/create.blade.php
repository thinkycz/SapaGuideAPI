@extends('base')

@section('body')

    <div class="wrapper">

        <h2 class="main-title">Přidání lokace do databáze</h2>

        <div class="col-md-3"></div>

        <div class="col-md-6">

            @include('partials.errorslist')

            <form method="post" action="{{ action('LocationController@store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Název:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Jak se toto místo jmenuje?">
                </div>
                <div class="form-group">
                    <label for="location">Umístění:</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Kde se toto místo nachází? Např. vedle kašny.">
                </div>
                <div class="form-group">
                    <label for="latitude">Zeměpisná šířka:</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Tato informace je nutná pro správné umístění bodu na mapě.">
                </div>
                <div class="form-group">
                    <label for="longitude">Zeměpisná délka:</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Tato informace je nutná pro správné umístění bodu na mapě.">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email", name="email", placeholder="Zadejte prosím email na kontaktní osobu. Nepovinné.">
                </div>
                <div class="form-group">
                    <label for="phone">Telefon:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Zadejte prosím telefon na kontaktní osobu. Nepovinné.">
                </div>
                <div class="form-group">
                    <label for="website">Webová stránka:</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Zadejte webovou stránku tohoto místa, pokud existuje.">
                </div>
                <div class="form-group">
                    <label for="working_hours">Pracovní doba:</label>
                    <textarea class="form-control" id="working_hours" name="working_hours" placeholder="Zadejte prosím pracovní dobu pracovny, pobočky, prodejny či kanceláře."></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Popis:</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Zadejte text popisující činnosti tohoto místa."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary">Odeslat</button>
                </div>
            </form>
        </div>


    </div>

@stop