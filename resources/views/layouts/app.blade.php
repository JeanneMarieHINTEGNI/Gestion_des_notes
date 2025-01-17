<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion des Notes')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-xl font-bold">Gestion des Notes</h1>
        </div>
    </header>
    <nav class="bg-gray-800 p-4">
        <ul class="flex space-x-4">
            <li><a href="{{ route('ues.index') }}" class="text-white hover:text-gray-300">UEs</a></li>
            <li><a href="{{ route('ecs.index') }}" class="text-white hover:text-gray-300">ECs</a></li>
            <li><a href="{{ route('notes.index') }}" class="text-white hover:text-gray-300">Notes</a></li>
        </ul>
    </nav>
    <main class="py-6">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    
</body>
</html>

