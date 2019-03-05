<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.meta')
    <title>@yield('Moodfy')</title>
    @include('include.css')
    @yield('css')
</head>
<body>
        <div id="page-wrap">
            @include('include.header')
            @yield('content')
            @include('include.footer')
        </div>
            @include('include.js')
            @yield('js')
</body>
</html>