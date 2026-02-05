<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    @include('pages.admin.partials.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- HEADER --}}
        @include('pages.admin.partials.header')

        {{-- CONTENT --}}
        <main class="p-8">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>
