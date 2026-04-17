<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web2 App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col">

    @include('partials.navbar')

    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>