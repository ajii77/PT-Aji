<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'PT Aji Digital Solutions') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">

    {{-- HEADER --}}
    @include('pages.public.partials.header')

    {{-- CONTENT --}}
    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>
