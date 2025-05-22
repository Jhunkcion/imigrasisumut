<!doctype html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMIGRASI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts & Icons -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container nav_data">
                <a class="navbar-brand nav_logo" href="{{ url('/') }}">
                    {{ config('app.name', 'IMIGRASI') }}
                </a>

                <!-- Custom Hamburger Toggle -->
                <button class="navbar-toggler nav_toggle" id="nav-toggle" type="button" aria-label="Toggle navigation">
                    <i class="fas fa-bars nav_burger"></i>
                    <i class="fas fa-times nav_close"></i>
                </button>

                <!-- Menu -->
                <div class="navbar-collapse nav_menu" id="nav-menu">
                    <!-- Left Side -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Tambahkan menu kiri jika ada -->
                    </ul>

                    <!-- Right Side -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link nav_link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav_link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown dropdown_item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav_link" href="#" role="button">
                                    {{ Auth::user()->name }} <span class="dropdown_arrow"><i class="fas fa-chevron-down"></i></span>
                                </a>
                                <div class="dropdown_menu">
                                    <a class="dropdown_link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
