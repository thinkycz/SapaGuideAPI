@extends('base')

@section('body')
    <div class="text-center">
        <h2 class="main-title">Můj účet</h2>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Nastavení účtu</div>

                <table class="table">
                    <tr>
                        <td>ID:</td>
                        <td>{{ Auth::user()->id }}</td>
                    </tr>
                    <tr>
                        <td>Jméno:</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Registrován:</td>
                        <td>{{ Auth::user()->created_at->diffForHumans() }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="/" class="text-center center-block">Změnit heslo</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Moje statistiky</div>

                <table class="table">
                    <tr>
                        <td>Počet schválených lokací:</td>
                        <td>{{ Auth::user()->location()->where('approved', 1)->count() }} (zobrazit)</td>
                    </tr>
                    <tr>
                        <td>Počet lokací čekajících ke schválení:</td>
                        <td>{{ Auth::user()->location()->where('approved', 0)->count() }} (zobrazit)</td>
                    </tr>
                    <tr>
                        <td>Počet neschválených lokací:</td>
                        <td>{{ Auth::user()->location()->where('approved', -1)->count() }} (zobrazit)</td>
                    </tr>
                    <tr>
                        <td>Počet hodnocení:</td>
                        <td>{{ Auth::user()->id }} (zobrazit)</td>
                    </tr>
                    <tr>
                        <td>Počet nahraných obrázků:</td>
                        <td>{{ Auth::user()->id }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop