<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Etiquetas meta --}}
        <meta charset="utf-8">
        <meta name="DC.Language" scheme="RFC1766" content="Spanish">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <body id="page-top" class="font-sans antialiased">
        <x-jet-banner />
        {{-- Page Wrapper --}}
        <div id="wrapper">

            {{-- Barra laterar izquierda --}}

            <div class="sidebar bg-gradient-primary flex-shrink-0 p-3">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 text-white">
                    <x-jet-application-mark  />
                  <span class="ms-2 fs-5 fw-semibold">SusanaNzth</span>
                </a>

                <div class="accordion" id="accordionMenu">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <a href="{{route('home')}}" class="accordion-button collapsed no-toggle">
                            <i class="bi bi-house-door me-2"></i>@lang('Home')
                        </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-person-square me-2"></i>@lang('Users')
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMenu">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item ps-5">
                                    <a href="{{route('user.index')}}"><i class="bi bi-card-list me-2"></i> @lang('List')</a>
                                </li>
                                <li class="list-group-item ps-5">
                                    <a href="{{route('user.create')}}"><i class="bi bi-plus-circle me-2"></i> @lang('Add')</a>
                                </li>
                              </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-people me-2"></i>@lang('Roles')
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMenu">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item ps-5">
                                    <a href="{{route('role.index')}}"><i class="bi bi-card-list me-2"></i> @lang('List')</a>
                                </li>
                                <li class="list-group-item ps-5">
                                    <a href="{{route('role.create')}}"><i class="bi bi-plus-circle me-2"></i> @lang('Add')</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="bi bi-basket me-2"></i>@lang('Products')
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMenu">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-group-item ps-5">
                                    <a href="{{route('product.index')}}"><i class="bi bi-card-list me-2"></i> @lang('List')</a>
                                </li>
                                <li class="list-group-item ps-5">
                                    <a href=""><i class="bi bi-plus-circle me-2"></i>@lang('Add')</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <a href="#" class="accordion-button collapsed no-toggle">
                            <i class="bi bi-gear me-2"></i>@lang('Profile')
                        </a>
                        </h2>
                    </div>
                </div>
            </div>
            {{-- End of Sidebar --}}

            {{-- Content Wrapper --}}
            <div class="content-wrapper">
                {{-- Contenido --}}
                <div id="content">

                    {{-- Barra de navegación --}}
                    @livewire('navigation-menu')
                    {{-- Fin de barra de navegación --}}

                    {{-- Contenido de la página --}}
                    <div class="container-fluid">

                        {{-- Page Heading --}}
                        @if (isset($header))
                            <header class="bg-white">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif
                        {{-- Contenido de la página. Llamado con una función. --}}
                        <main>
                            {{ $slot }}
                        </main>

                    </div>{{-- Fin del Contenido de la página --}}

                </div>{{-- Fin del contenido --}}

                {{-- Footer --}}
                <footer class="footer bg-white">
                    <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SusanaNzth 2021 - 2022</span>
                    </div>
                    </div>
                </footer>{{-- Fin del Footer --}}
            </div>{{-- Fin del Content Wrapper --}}
        </div>{{-- Fin del DIV Page Wrapper --}}

        {{-- Botón de scroll --}}
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @stack('modals')
    </body>
</html>
