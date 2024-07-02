<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ServiceBox</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar sticky-top " >
            <div class="container">


                <a class="navbar-brand  " href="{{ url('/home') }}">
                   ServiceBox
                </a>
                <div class="m-2">
                    <form class="d-flex "   method="post" action="{{ route('search') }}">
                        {{ csrf_field() }}

                        <select class="form-select "  name="location" aria-label="Default select example ">
                            <option selected  value="Район"  >Район</option>
                            <option value="Рощино">Рощино</option>
                            <option value="Крутой Яр">Крутой Яр</option>
                            <option value="Восток">Восток</option>
                            <option value="Вострецово">Вострецово</option>
                            <option value="Новопокровка">Новопокровка</option>
                        </select>

                        <input class="form-control mx-2"  name="search"  type="search" placeholder="поиск" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>

                </div>
                @role('Admin')
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('addnote') }}">add</a>
                                    <a class="dropdown-item" href="{{ route('users.index') }}">Manage Users</a>
                                    <a class="dropdown-item" href="{{ route('roles.index') }}">Manage Role</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                @endrole

            </div>
        </nav>

        <main class="py-4">
            @yield('content')

        </main>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
