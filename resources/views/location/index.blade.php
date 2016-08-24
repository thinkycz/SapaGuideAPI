@extends('base')

@section('body')
    <div class="text-center">
        <h2 class="main-title">Katalog lokací</h2>
    </div>

    @if(Auth::check())
        <div class="section-menu">
            <a href="{{ action('LocationController@create') }}" title="Přidat záznam" class="btn btn-primary">Přidat záznam</a>
        </div>
        <hr>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table">
                    <col width="10%">
                    <col width="50%">
                    <col width="20%">
                    <col width="20%">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Název</th>
                        <th>Autor</th>
                        <th>Přidáno</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)
                        <tr>
                            <td><a href="{{ action('LocationController@show', [$location->slug]) }}">{{ $location->id }}</a></td>
                            <td><a href="{{ action('LocationController@show', [$location->slug]) }}">{{ $location->title }}</a></td>
                            <td>{{ $location->user->name }}</td>
                            <td>{{ $location->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop