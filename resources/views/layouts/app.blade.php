<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top mb-4 bg-dark">

                <div class="container-fluid">
                    <span class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" height="50" width="200"
                            alt="{{ config('app.name', 'Laravel') }}">
                    </span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Navbar -->
                        {{-- <ul class="navbar-nav me-auto"></ul> --}}

                        <!-- Right Side Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Principal</a>
                                </li>
                            @else
                                ' <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if (!empty(Auth::user()->photo))
                                            <img src="{{ asset(Auth::user()->photo) }}" id="perfil2" alt="user"
                                                class="img-circle" width="30">
                                        @else
                                            <img src="{{ asset('images/users/user_profile.png') }}" alt="user"
                                                class="img-circle" width="30">
                                        @endif
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <div class="d-flex no-block align-items-center p-15 bg-dark text-white m-b-10">
                                            <a href="{{ route('settings') }}">
                                                @if (!empty(Auth::user()->photo))
                                                    <img src="{{ asset(Auth::user()->photo) }}" id="perfil2"
                                                        alt="user" class="img-circle" width="60">
                                                @else
                                                    <img src="{{ asset('images/users/user_profile.png') }}" alt="user"
                                                        class="img-circle" width="60">
                                                @endif
                                            </a>
                                            <div class="m-l-10">
                                                <h7 class="m-b-0">{{ Auth::user()->name }}</h7>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>'
                            @endguest
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
    </div>


    <main class=" p-0 m-0 border-0">

        @yield('content')

    </main>
    {{-- @include('components.footer') --}}
</body>

</html>
