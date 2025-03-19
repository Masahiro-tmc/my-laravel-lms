<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <!-- Top Bar -->
<!-- Top Bar -->
<nav class="bg-white shadow-md p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Admin Dashboard</h1>

    <div class="flex items-center gap-6">
        <!-- Notifications (Future Feature) -->

        

        <!-- Profile Picture -->
        <div class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full" alt="Admin Avatar">
            <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
        </div>

         <!-- Sign Out Button (Next to Profile Picture) -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:text-red-700 font-medium">
                Sign Out
            </button>
        </form>



    </div>
</nav>


    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white h-screen p-5">
            <h2 class="text-lg font-semibold mb-4">Admin Panel</h2>
            <ul>
                <li class="mb-2"><a href="{{ route('dashboard') }}" class="block p-2 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li class="mb-2"><a href="" class="block p-2 hover:bg-gray-700 rounded">Users</a></li>
                <li class="mb-2"><a href="" class="block p-2 hover:bg-gray-700 rounded">Courses</a></li>
                <li class="mb-2"><a href="" class="block p-2 hover:bg-gray-700 rounded">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
