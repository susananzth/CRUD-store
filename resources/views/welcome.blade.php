@section('title', 'Inicio')

<x-guest-layout>
    <main class="px-5 py-5 text-white ">
        <h1>@lang('Electronic commerce')</h1>
        <p class="lead py-3">@lang('Online store project. It serves as the basis for any project.')</p>
        <p class="lead">
            @lang('Developed with Laravel 8.*, includes Laravel Jetstream authentication system and Bootstrap 5 design toolkit.')
        </p>
        <p class="lead py-3">
            <a href="{{route('store')}}" class="btn btn-lg btn-primary fw-bold">
                <i class="bi bi-shop"></i> @lang('Go to the store')
            </a>
        </p>
    </main>
</x-guest-layout>
