<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Barangay Bulletin – Purok Braulio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-blue-50 text-slate-800">

    <nav class="bg-blue-700 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <a href="/posts" class="text-lg font-bold">📌 Barangay Bulletin – Purok Braulio</a>

            <div class="flex flex-wrap items-center gap-4 text-sm">
                <a href="/posts" class="hover:underline">All Posts</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-6xl w-full mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-slate-800 text-slate-300 text-sm">
        <div class="max-w-6xl mx-auto px-4 py-4 text-center md:text-left">
            Barangay Matina Crossing Hall &middot; Davao City
        </div>
    </footer>

</body>
</html>
