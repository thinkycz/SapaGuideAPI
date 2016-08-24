@extends('base')

@section('body')
    <div class="text-center">
        <h2 class="main-title">Přidání lokace do databáze - krok 2/2</h2>
    </div>

    <div class="row">
        <div class="col-md-12">

            @include('partials.errorslist')

            <form method="post" action="{{ action('LocationController@store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="title" value="{{ $title }}">
                <input type="hidden" name="location" value="{{ $location }}">
                <input type="hidden" name="latitude" value="{{ $latitude }}">
                <input type="hidden" name="longitude" value="{{ $longitude }}">

                <div class="form-group">
                    <label for="email">Email: <span class="small text-primary">(nepovinné)</span><span class="small text-danger">(formát emailu)</span></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Zadejte prosím email na kontaktní osobu, pokud existuje, ve formátu abc@example.com" value="{{ Input::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="phone">Telefon: <span class="small text-primary">(nepovinné)</span><span class="small text-danger">(formát tel. čísla)</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Zadejte prosím telefon na kontaktní osobu, pokud existuje. Možno s předvolbou i bez." value="{{ Input::old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="website">Webová stránka: <span class="small text-primary">(nepovinné)</span><span class="small text-danger">(formát web adresy)</span></label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Zadejte webovou stránku tohoto místa, pokud existuje, ve formátu http://www.example.com." value="{{ Input::old('website') }}">
                </div>
                <div class="form-group">
                    <label for="working_hours">Pracovní doba: <span class="small text-primary">(nepovinné)</span></label>
                    <textarea class="form-control" id="working_hours" name="working_hours" placeholder="Zadejte prosím pracovní dobu pracovny, pobočky, prodejny či kanceláře.">{{ Input::old('working_hours') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Popis: <span class="small text-primary">(nepovinné)</span></label>
                    <textarea class="form-control" id="description" name="description" placeholder="Zadejte text popisující činnosti tohoto místa.">{{ Input::old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary">Odeslat ke zpracování</button>
                </div>
            </form>
        </div>
    </div>
@stop