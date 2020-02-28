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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('css')

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}" ></script>
        <script src="{{ asset('js/kendo.all.min.js') }}" ></script>
        <script src="{{ asset('js/admin.js') }}" ></script>
</head>
<body style="margin: 0;">
    <div id="toolbar" class="topbar">
        <div class="k-overflow-anchor k-button profile">
            <div class="dropdown">           
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <h4>{{ __('Logout') }}</h4>
                </a>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <section id="container">
        <main id="main-content">
            @yield('content')
        </main>
    </section>
</body>
<script type="text/javascript">
       
    $("#toolbar").kendoToolBar({
                items: [
                    { type: "button", icon: "menu", attributes: { "class": "k-flat" }, click: toggleDrawer},
                    { template: "<h3 style='margin-left: 20px;'>Impact Express</h3>"},
                  ]
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
