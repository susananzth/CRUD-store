@section('title', 'Inicio')

<x-guest-layout>
    <main class="px-5 py-5 text-white ">
        <h1>Comercio electrónico</h1>
        <p class="lead py-3">Proyecto de tienda online. Sirve de base para cualquier proyecto.</p>
        <p class="lead">Desarrollado con Laravel 8.79, con sistema de autenticación de Laravel Jetstream y aplicando diseño de bootstrap 5.</p>
        <p class="lead py-3">
            <a href="{{route('store')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark"><i class="bi bi-shop"></i> Ir a la tienda</a>
        </p>
    </main>
</x-guest-layout>
