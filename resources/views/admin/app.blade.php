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
    @yield('js')
    <script src="{{ asset('js/kendo.all.min.js') }}" ></script>
    <script src="{{ asset('js/admin.js') }}" ></script>
</head>
<body style="margin: 0;">
    <div class="topbar">
        <h3 style="margin: auto; margin-left: 3%;">Impact Express</h3>
        <div class="k-overflow-anchor profile">
            <button class="k-button" style="margin: auto;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <h4>{{ __('Logout') }}</h4>
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </div>
    </div>

    <x-admin-nav />

    <section id="main-content">
        <main>
            <div class="grid">
                <div id="drawer" data-role="drawer" class="k-widget k-drawer">
                    <div class="drawer-content">
                       <x-admin-alerts />
                    @yield('content')
                    </div>
                </div>
        </div>
        </main>
    </section>
</body>
<script type="text/javascript">
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
