<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
        @yield('js')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>