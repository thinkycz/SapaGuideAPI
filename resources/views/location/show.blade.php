@extends('base')

@section('scripts')
    <script>
        var map;
        var lat = parseFloat("{{ $location->latitude }}");
        var lng = parseFloat("{{ $location->longitude }}");
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: lng},
                zoom: 16
            });
            var marker = new google.maps.Marker({
                position: {lat: lat, lng: lng},
                map: map,
                title: "{{ $location->title }}"
            });
        }

        $(document).ready(function() {
            $('#confirm_delete').click(function(event){
                event.preventDefault();
                swal({
                            title: "Jste si jisti?",
                            text: "Opravdu chcete smazat tento záznam? Tato akce je nevratná!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ano",
                            cancelButtonText: "Ne",
                            closeOnConfirm: false
                        },
                        function ()
                        {
                            $.ajax({
                                url: '{{ action('LocationController@destroy', ['id' => $location->id]) }}',
                                type: 'post',
                                data: {_method: 'delete', _token : '{{ csrf_token() }}'},
                                success: function()
                                {
                                    window.location.replace('{{ action('LocationController@index') }}');
                                },
                                error: function()
                                {
                                    window.location.reload();
                                }
                            });
                        });
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpFFpdRlnxoNTWGpaKyXVM4xpFQ1EOEN8&callback=initMap" async defer></script>
@stop

@section('body')
    <div class="text-center">
        <h2 class="main-title">{{ $location->title }}</h2>
    </div>

    @if(Auth::check())
        <div class="section-menu">
            <a href="{{ action('LocationController@edit', ['id' => $location->id]) }}" title="Upravit záznam" class="btn btn-primary">Upravit záznam</a>
            <a id="confirm_delete" title="Odstranit záznam" class="btn btn-danger">Odstranit záznam</a>
        </div>
        <hr>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Základní informace</div>

                <table class="table">
                    <tbody>
                    <tr>
                        <td>Umístění</td>
                        <td>{{ $location->location }}</td>
                    </tr>
                    <tr>
                        <td>Zeměpisná šířka</td>
                        <td>{{ $location->latitude }}</td>
                    </tr>
                    <tr>
                        <td>Zeměpisná délka</td>
                        <td>{{ $location->longitude }}</td>
                    </tr>
                    <tr>
                        <td>Přidáno uživatelem</td>
                        <td>{{ $location->user->name }}</td>
                    </tr>
                    <tr>
                        <td>Datum přidání</td>
                        <td>{{ $location->created_at->format('j.n.Y') }}</td>
                    </tr>
                    <tr>
                        <td>Stav záznamu</td>
                        <td>{{ $location->approved == 1 ? 'Schváleno' : $location->approved == -1 ? 'Zamítnuto' : 'Čeká na schválení' }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Kontakt na provozovatele</div>

                <table class="table">
                    <tbody>
                    <tr>
                        <td>Email</td>
                        <td>
                            @if($location->email)
                                {{ $location->email }}
                            @else
                                <span class="small text-danger">(nevyplněno)</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Telefon</td>
                        <td>
                            @if($location->phone)
                                {{ $location->phone }}
                            @else
                                <span class="small text-danger">(nevyplněno)</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Webová stránka</td>
                        <td>
                            @if($location->website)
                                {{ $location->website }}
                            @else
                                <span class="small text-danger">(nevyplněno)</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading text-center">Otevírací doba</div>
                <div class="panel-body">
                    @if($location->working_hours)
                        {{ $location->working_hours }}
                    @else
                        <span class="small text-danger">(nevyplněno)</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Popis</div>
                <div class="panel-body">
                    @if($location->description)
                        {{ $location->description }}
                    @else
                        <span class="small text-danger">(nevyplněno)</span>
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading text-center">Mapa</div>
                <div class="panel-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection