<!DOCTYPE html>
<html lang="en">
<head>
    @include('siteadmin.includes.meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'VelleWeb')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


    @include('siteadmin.includes.css')
    @yield('css')

</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <div class="m-grid m-grid--hor m-grid--root m-page">
        @include('siteadmin.includes.header')
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                @include('siteadmin.includes.sidebar')
            </div>
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                @yield('content')
            </div>
        </div>
        @include('siteadmin.includes.footer')
    </div>

    @include('siteadmin.includes.js')
    @yield('js')
</body>
</html>