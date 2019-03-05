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
      @yield('content')
     </div>
    
     @include('include.js')
        @yield('js')
</body>
</html>