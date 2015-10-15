<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <span class="icon icon-cog"></span>
            <h1><a href="#">Sapa Katalog</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::url() == action('StaticController@indexPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@indexPage') }}" accesskey="1" title="">Domů</a>
                </li>
                <li class="{{ Request::url() == action('LocationController@index') ? "active" : ""}}">
                    <a href="{{ action('LocationController@index') }}" accesskey="2" title="">Seznam lokací</a>
                </li>
                <li class="{{ Request::url() == action('LocationController@create') ? "active" : ""}}">
                    <a href="{{ action('LocationController@create') }}" accesskey="3" title="">Přidat lokaci</a>
                </li>
                <li class="{{ Request::url() == action('StaticController@downloadPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@downloadPage') }}" accesskey="4" title="">Stažení aplikace</a>
                </li>
                @if(Auth::guest())
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogin') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogin') }}" accesskey="5" title="">Přihlášení</a>
                    </li>
                @else
                    <li class="{{ Request::url() == action('StaticController@myAccountPage') ? "active" : ""}}">
                        <a href="{{ action('StaticController@myAccountPage') }}" accesskey="5" title="">Můj účet ({{ Auth::getUser()->name }})</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>