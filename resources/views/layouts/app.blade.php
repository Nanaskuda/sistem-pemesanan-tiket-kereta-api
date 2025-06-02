<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tiket Kereta')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <x-nav>

    </x-nav>


    <main class="p-4 sm:ml-64 mt-20">
        @yield('index')
    </main>

    <main class="mt-10">
        @yield('search')
    </main>

    <main>
        @yield('content')
    </main>

    <main>
    @yield('confirmation')
</main>
<footer class="bg-white text-blue-800 b text-center p-4 mt-30 fixed bottom-0 w-full border-r border-blue-300">
    <p>&copy; {{ date('Y') }} Tiket Kereta. All rights reserved.</p>
</footer>

</body>
</html>
