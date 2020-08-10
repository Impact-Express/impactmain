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
        <div class="k-overflow-anchor k-button profile">
            <a style="margin: auto;" href="{{ route('logout') }}"
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
    <div class="sidebar">
        <ul style="list-style-type: none;width: 100%;padding-inline-start: 0;margin-block-start: 0;">
            <i class='fas fa-info-circle sidebar-text'></i><span class='k-item-text' style='padding-left: 16px; font-size: 11px; overflow: hidden;'>Impact Express CMS System - v1</span>
            <li data-role='drawer-separator'><hr></li>
            <a class="white" style='overflow: hidden;' href='{{ route('admin') }}'>
                <li data-role='drawer-item' class='state-selected sidebar-item'>
                    <i class='fas fa-tachometer-alt sidebar-text'></i>
                    <span class='k-item-text' style='padding-left: 16px;'>Dashboard</span>
                </li>
            </a> 
            <li data-role='drawer-separator'><hr></li>
            <a class="white" style='overflow: hidden;' href='{{ route('admin-posts') }}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class='fas fa-thumbtack sidebar-text'></i>
                    <span class='k-item-text' style='padding-left: 20px;'>Posts</span>
                </li>
            </a>
            <a class="white" style='overflow: hidden;' href='{{ route('admin-trash') }}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class='fas fa-trash-alt sidebar-text'></i>
                    <span class='k-item-text' style='padding-left: 20px;'>Trashed Posts</span>
                </li>
            </a>
            <li data-role='drawer-separator'><hr></li> 
            <a class="white" style='overflow: hidden;' href='{{ route('admin-categories') }}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class="fas fa-copy sidebar-text"></i>
                    <span class='k-item-text' style='padding-left: 20px;'>Categories</span>
                </li>
            </a>
            <a class="white" style='overflow: hidden;' href='{{ route('admin-tags') }}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class="fas fa-tags sidebar-text"></i>
                    <span class='k-item-text' style='padding-left: 20px;'>Tags</span>
                </li>
            </a>
            @if (auth()->user()->isAdmin())
            <li data-role='drawer-separator'><hr></li>
            <a class="white" style='overflow: hidden;' href='{{route('admin-users')}}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class="fas fa-user sidebar-text"></i>
                    <span class='k-item-text' style='padding-left: 20px;'>Users</span>
                </li>
            </a>
            @endif
            <a class="white" style='overflow: hidden;' href='{{route('admin-profile', auth()->user()->slug)}}'>
                <li data-role='drawer-item' class="sidebar-item">
                    <i class="fas fa-user sidebar-text"></i>
                    <span class='k-item-text' style='padding-left: 20px;'>User Profile</span>
                </li>
            </a>
            <li data-role='drawer-separator'><hr></li> 
            <a class="white" href='{{ route('home') }}'>
                <li class="sidebar-item">
                    <i class='fas fa-external-link-alt sidebar-text'></i>
                    <span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span>
                </li>
            </a>
      </ul>
    </div>
    <section id="main-content">
        <main>
            <div class="grid">
                <div id="drawer" data-role="drawer" class="k-widget k-drawer">
                    <div class="drawer-content">
                        @if (session()->has('success'))
                        <div class="card-body success-message">
                            <h5 class="card-title">
                                {{ session()->get('success') }}
                            </h5>
                        </div>
                        @endif
                        @if (session()->has('warning'))
                        <div class="card-body warning-message">
                            <h5 class="card-title">
                                {{ session()->get('warning') }}
                            </h5>
                        </div>
                        @endif
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
