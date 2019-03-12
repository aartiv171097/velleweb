<!DOCTYPE html>
<html>
<head>
    @include('include.meta')
    <title>@yield('Moodfy')</title>
    @include('include.css')
    @yield('css')
</head>
<body class="skin-black" style="background-color:#41414100; ">
    <div class="wrapper"> 
        @include('include.sidebar')
        <div class="content-wrapper" style="min-height:100vh;">
            <div class="container-fluid">
            @yield('content')
            </div>
        </div>
    </div>

    @include('include.js')
    @yield('js')
</body>
</html>