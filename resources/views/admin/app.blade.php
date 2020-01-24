<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('/css/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('styles/kendo.common.min.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/kendo.material-v2.min.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}" ></script>
        <script src="{{ asset('js/kendo.all.min.js') }}" ></script>
        <script src="{{ asset('js/admin.js') }}" ></script>
</head>
<body style="margin: 0;">
<div class="grid">
    <div id="toolbar">
        <div tabindex="0" id="profileDropDown" class="k-overflow-anchor" style="visibility: visible; width: 8%; padding-right: 10px; padding-left: 10px;"><i class="k-icon k-i-user"></i><p style="position: relative; top: 36px; margin: 0;">Hello, {{Auth::user()->name}}</p></div>
    </div>
    <div id="drawer">
        <div class="drawer-content">

        </div>
    </div>
</div>


    {{-- <section id="container">
        <header class="topbar">
            <a class="topbar-logo" href="{{ route('admin') }}">Impact Express</a>
            <form class="logout" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="logout-button" type="submit" value="Logout">
            </form>

        </header>
        <aside class="sidenav">
            <div id="sidebar" tabindex="5000">
                <h5 class="user-name">{{ Auth::user()->name }}</h5>
            </div>

        </aside>
        <main id="main-content">
            @yield('content')
        </main>
    </section> --}}
    {{-- <div id="app">
        <div class="topbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    
    <script>
        $(document).ready(function () {
            $("#toolbar").kendoToolBar({
            items: [
                { type: "button", icon: "menu", attributes: { "class": "k-flat" }, click: toggleDrawer},
                { template: "<h3 style='margin-left: 20px;'>Impact Express</h3> " }
             ]
            })
        });
    function toggleDrawer() {
        var drawerInstance = $("#drawer").data().kendoDrawer;
        var drawerContainer = drawerInstance.drawerContainer;

        if(drawerContainer.hasClass("k-drawer-expanded")) {
            drawerInstance.hide();
        } else {
            drawerInstance.show();
        }
    }
    </script>
</body>
</html>
