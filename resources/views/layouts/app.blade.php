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
  @include('layouts.navigation')
    <!-- Sidebar -->
    <div class="flex">

        <aside class="w-64 bg-gray-900 text-white h-screen p-5">
            <h2 class="text-lg font-semibold mb-4">Admin Panel</h2>
            <ul>
                <li class="mb-2"><a href="{{ route('dashboard') }}" class="block p-2 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Users</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Courses</a></li>
                <li class="mb-2"><a href="#" class="block p-2 hover:bg-gray-700 rounded">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">

            <section class="container mx-auto p-6">
                @yield('content')
            </section>
        </main>
    </div>

</body>
</html>
