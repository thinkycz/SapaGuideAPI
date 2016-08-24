<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ action('StaticController@indexPage') }}">Sapa Guide</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::url() == action('StaticController@indexPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@indexPage') }}" accesskey="1" title="Domů">Domů</a>
                </li>
                <li class="{{ Request::url() == action('LocationController@index') ? "active" : ""}}">
                    <a href="{{ action('LocationController@index') }}" accesskey="2" title="Katalog">Katalog</a>
                </li>
                <li class="{{ Request::url() == action('StaticController@downloadPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@downloadPage') }}" accesskey="3" title="Stáhnout aplikaci">Stáhnout aplikaci</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogin') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogin') }}" accesskey="4" title="Přihlásit se">Přihlásit se</a>
                    </li>
                @else
                    <li class="{{ Request::url() == action('StaticController@myAccountPage') ? "active" : ""}}">
                        <a href="{{ action('StaticController@myAccountPage') }}" accesskey="5" title="Můj účet">{{ Auth::getUser()->name }}</a>
                    </li>
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogout') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogout') }}" accesskey="6" title="Odhlásit se">Odhlásit se</a>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>