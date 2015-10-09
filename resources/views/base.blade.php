<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title', 'Sapa Katalog')</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
@include('partials.header')

@yield('body')

@include('partials.footer')
</body>
</html>
