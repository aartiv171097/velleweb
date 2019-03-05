<!DOCTYPE html>
<html>
<head>
    @include('include.meta')
    <title>@yield('Moodfy')</title>
    @include('include.css')
    @yield('css')
</head>
<body>
    <div id="page-wrap">
        @include('include.header1')
           @yield('content')
            @include('include.footer1')
                
    </div>
    
        @include('include.js')
        @yield('js')
</body>
</html>