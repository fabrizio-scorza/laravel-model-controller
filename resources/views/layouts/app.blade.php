<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- lo yield nel title ci permette di modificare in ognio pagina il titolo--}}
    <title>@yield('title', 'Homepage')</title>
    {{-- aggiungiamo lòa direttiva vite che applica il nostro js alla pagina --}}
    @vite('resources/js/app.js')
</head>

<body class="d-flex flex-column">

    @include('partials/header')

    <main class="flex-grow-1 py-5">
        {{-- inseriamo la parte di contenuto delle varie pagine --}}
        @yield('content')
    </main>
    
    @include('partials/footer')
</body>
</html>