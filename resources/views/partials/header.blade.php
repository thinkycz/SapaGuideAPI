<nav class="navbar main-header">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ action('StaticController@indexPage') }}">
                <img src="{{ asset('images/sapaguide.png') }}">
            </a>
        </div>
        <div class="searchbar col-md-6">
            <form role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Hledáte něco? Např. obchod s oblečením" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogin') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogin') }}" title="Přihlásit se">Přihlásit se</a>
                    </li>
                @else
                    <li class="{{ Request::url() == action('StaticController@myAccountPage') ? "active" : ""}}">
                        <a href="{{ action('StaticController@myAccountPage') }}" title="Můj účet">{{ Auth::getUser()->name }}</a>
                    </li>
                    <li class="{{ Request::url() == action('Auth\AuthController@getLogout') ? "active" : ""}}">
                        <a href="{{ action('Auth\AuthController@getLogout') }}" title="Odhlásit se">Odhlásit se</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar main-menu">
    <div class="container">
        <ul class="nav navbar-nav">
            <li>
                <a href="" title="Obchody">Obchody</a>
            </li>
            <li>
                <a href="" title="Restaurace">Restaurace</a>
            </li>
            <li>
                <a href="" title="Služby">Služby</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ action('StaticController@aboutPage') }}" title="Informace o Sapě">Informace o Sapě</a>
            </li>
        </ul>
    </div>
</nav>