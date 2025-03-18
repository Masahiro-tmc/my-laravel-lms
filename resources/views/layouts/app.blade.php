<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Admin Dashboard</title>
    
    {{-- Load Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4 text-white">
        <h1>Admin Dashboard</h1>
    </header>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>
