<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Etiquetas meta --}}
        <meta charset="utf-8">
        <meta name="DC.Language" scheme="RFC1766" content="Spanish">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistema de comercio electrónico. Desarrollado por Susana N. Piñero Rodríguez @susananzth"/>
        <meta name="keywords" content="Laravel, Laravel 8, PHP, Laravel, Store, ecommerce, e-commerce, tienda online"/>
        <meta name="author" content="Susana Piñero Rodríguez" />
        <meta name="copyright" content="Susana N. Piñero Rodríguez" />
        <meta name="reply-to" content="me@susananzth.com">
        <link rev="made" href="mailto:me@susananzth.com">
        <meta http-equiv="cache-control" content="no-cache"/>
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Título de la página --}}
        <title>@yield('title') - By SusanaNzth</title>
        {{-- Ícono --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico')}}" />
        {{-- Estilos --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{  asset('css/susananzth.css')}}">
        <link rel="stylesheet" type="text/css" href="{{  asset('css/layout.css')}}">
        {{-- Scripts --}}
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        <script src="{{ asset('js/layout.js') }}" defer></script>
        {{-- Includes --}}
        @yield('rsc_top')
        @livewireStyles
    </head>
    <body class="h-auto">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <img src="{{asset('img/logo.png')}}" class="d-inline-block logo" alt="susananzth" loading="lazy">
                <a class="navbar-brand" href="{{ url('/') }}">SusanaNzth</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Todos los productos</a></li>
                    </ul>
                    <form class="d-flex">
                        @if (Route::has('login'))
                        @auth
                            <a class="nav-link" href="{{ route('home') }}">Panel administrativo</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        @endauth
                    @endif
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

            {{ $slot }}
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Proyecto desarrollado por Susana Piñero Rodríguez</p>
                    <p class="m-0 text-center text-white">Copyright &copy; Susana Piñero Rodríguez 2021 - 2022</p>
                </div>
            </footer>
    </body>
</html>
