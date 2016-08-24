<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title', 'Sapa Guide')</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    @include('partials.cdn')
    @yield('scripts')
</head>
<body>
@include('partials.header')

<div class="container">
    @yield('body')
</div>

@include('partials.footer')

@include('partials.flash')
</body>
</html>
