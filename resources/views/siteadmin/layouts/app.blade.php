<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('siteadmin.includes.meta')
    <title>@yield('title', 'velleweb')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    @include('siteadmin.includes.css')
    @yield('css')

</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <div class="m-grid m-grid--hor m-grid--root m-page">
        @yield('content')
    </div>
    @include('siteadmin.includes.js')
    @yield('js')
</body>
</html>

