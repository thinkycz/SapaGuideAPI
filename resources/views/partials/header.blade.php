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
                <li class="{{ Request::url() == action('StaticController@aboutPage') ? "active" : ""}}">
                    <a href="{{ action('StaticController@aboutPage') }}" accesskey="5" title="">O nás</a>
                </li>
            </ul>
        </div>
    </div>
</div>