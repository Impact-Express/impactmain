<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{asset('/css/css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        @yield('css')

        <link rel="apple-touch-icon" sizes="57x57" href="<?= asset('/img/icons/apple-touch-icon-57x57.png') ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= asset('/img/icons/apple-touch-icon-60x60.png') ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= asset('/img/icons/apple-touch-icon-72x72.png') ?>">    
        <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('/img/icons/apple-touch-icon-76x76.png') ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= asset('/img/icons/apple-touch-icon-114x114.png') ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= asset('/img/icons/apple-touch-icon-144x144.png') ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= asset('/img/icons/apple-touch-icon-120x120.png') ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= asset('/img/icons/apple-touch-icon-152x152.png') ?>">
        <link rel="icon" type="image/png" href="<?= asset('/img/icons/favicon-16x16.png') ?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?= asset('/img/icons/favicon-32x32.png') ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?= asset('/img/icons/favicon-96x96.png') ?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?= asset('/img/icons/favicon-160x160.png') ?>" sizes="160x160">
        <link rel="icon" type="image/png" href="<?= asset('/img/icons/favicon-196x196.png') ?>" sizes="196x196">
    </head>
    <body>
        @yield('master')
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        @yield('js')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>