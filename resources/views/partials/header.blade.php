<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <span class="icon icon-cog"></span>
            <h1><a href="#">Sapa Katalog</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::url() == action('StaticController@indexPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@indexPage') }}" accesskey="1" title="Domů">Domů</a>
                </li>
                <li class="{{ Request::url() == action('LocationController@index') ? "active" : ""}}">
                    <a href="{{ action('LocationController@index') }}" accesskey="2" title="Katalog">Katalog</a>
                </li>
                <li class="{{ Request::url() == action('StaticController@downloadPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@downloadPage') }}" accesskey="3" title="Stáhnout aplikaci">Stáhnout aplikaci</a>
                </li>
                @if(Auth::guest())
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogin') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogin') }}" accesskey="4" title="Přihlásit se">Přihlásit se</a>
                    </li>
                @else
                    <li class="{{ Request::url() == action('StaticController@myAccountPage') ? "active" : ""}}">
                        <a href="{{ action('StaticController@myAccountPage') }}" accesskey="5" title="Můj účet">Můj účet ({{ Auth::getUser()->name }})</a>
                    </li>
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogout') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogout') }}" accesskey="6" title="Odhlásit se">Odhlásit se</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>