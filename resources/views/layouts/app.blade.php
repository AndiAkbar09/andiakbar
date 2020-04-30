<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="d-flex justify-content-between">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('img/oshopping.jpg')}}" class="nav-link" style="margin-top: -5px;" height="80" alt="">
                    </a>
                </div>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <h4 class="text-secondary display-5" style="margin-top: -5px;">Kategori</h4>
                            </a>
                        </li>
                    </ul>
                        <div class="input-group container mb-3">
                            <input type="text" class="form-control" placeholder="Mau cari apa kaa...." aria-label="Mau cari apa kaa...." aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button" id="button-addon2"><svg height="20px" version="1.1" viewBox="0 0 32 32" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#929292" id="icon-111-search"><path d="M19.4271164,21.4271164 C18.0372495,22.4174803 16.3366522,23 14.5,23 C9.80557939,23 6,19.1944206 6,14.5 C6,9.80557939 9.80557939,6 14.5,6 C19.1944206,6 23,9.80557939 23,14.5 C23,16.3366522 22.4174803,18.0372495 21.4271164,19.4271164 L27.0119176,25.0119176 C27.5621186,25.5621186 27.5575313,26.4424687 27.0117185,26.9882815 L26.9882815,27.0117185 C26.4438648,27.5561352 25.5576204,27.5576204 25.0119176,27.0119176 L19.4271164,21.4271164 L19.4271164,21.4271164 Z M14.5,21 C18.0898511,21 21,18.0898511 21,14.5 C21,10.9101489 18.0898511,8 14.5,8 C10.9101489,8 8,10.9101489 8,14.5 C8,18.0898511 10.9101489,21 14.5,21 L14.5,21 Z" id="search"/></g></g></svg></button>
                            </div>
                        </div>
                            <div class="mr-auto px-3">
                                <li class="nav-item nav-link" style="margin-top: -15px;">
                                    <a href="">
                                        <svg enable-background="new 0 0 32 32"  height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M27.719,20.296l3.607-10.718c0.181-0.519,0.044-0.792-0.103-0.998c-0.374-0.527-1.142-0.512-1.292-0.512  L9.546,8.074L9.002,5.341C8.855,4.732,8.421,4,7.546,4H1.817C1.224,4,1,4.59,1,5.146v1.49C1,7.172,1.222,7,1.838,7h4.837  l3.702,15.873c-0.588,0.623-0.908,1.609-0.908,2.457c0,1.864,1.484,3.465,3.379,3.465c1.791,0,3.132-1.795,3.35-2.795h7.21  c0.218,1,1.305,2.873,3.349,2.873c1.862,0,3.378-1.535,3.378-3.396c0-1.852-1.125-3.609-3.359-3.609  c-0.928,0-2.031,0.133-2.543,1.133h-8.859c-0.643-1-1.521-1.311-2.409-1.345L12.843,21h13.479  C27.338,21,27.538,20.786,27.719,20.296z M11.537,25.514c0-0.709,0.577-1.286,1.286-1.286c0.707,0,1.283,0.577,1.283,1.286  s-0.576,1.285-1.283,1.285C12.113,26.799,11.537,26.223,11.537,25.514z M26.783,26.783c-0.7,0-1.27-0.57-1.27-1.27  c0-0.7,0.569-1.27,1.27-1.27c0.701,0,1.27,0.569,1.27,1.27C28.053,26.213,27.484,26.783,26.783,26.783z" fill="#515151"/></svg>
                                    </a>
                                </li>
                            </div>
                        <div class="mr-auto"style="margin-top: -15px;">
                            <input class="btn btn-outline-success" type="button" value="Masuk">
                        </div>
                        <div class="px-3"style="margin-top: -15px;">
                            <input class="btn btn-success" type="button" value="Daftar">
                        </div>
                            
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
