<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.meta')
        <title>Design</title>
        @include('includes.css')
        @yield('css')
    </head>
    <body>
        <div id="page-wrap">
            <div class="login-bg">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('includes.js')
        @yield('js')
    </body>
</html>




