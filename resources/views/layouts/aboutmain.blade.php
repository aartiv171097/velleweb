<!DOCTYPE html>
<html>
<head>
    @include('include.meta')
    <title>@yield('BrandCer')</title>
    @include('include.css')
    @yield('css')
</head>
<body>
    <div id="page-wrap">
        @include('include.header2')
           @yield('content')
            @include('include.footer2')
                
    </div>
    
        @include('include.js')
        @yield('js')
</body>
</html>