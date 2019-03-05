<!DOCTYPE html>
<html>
<head>
    @include('admin.includes.meta')
    <title>@yield('Moodfy')</title>
    @include('admin.includes.css')
    @yield('css')
</head>
<body class="skin-black">
        <div class="wrapper"> 
                <aside class="main-sidebar">
            @include('admin.includes.sidebar')
                </aside>
                @yield('content')
        </div>
    
        @include('admin.includes.js')
        @yield('js')
</body>
</html>