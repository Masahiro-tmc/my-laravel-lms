@extends('layouts.app')
@section('content')
    <div class="container mx-auto p-6">
        <!-- Welcome Message -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold">Welcome, Admin!</h2>
            <p class="text-gray-600 mt-2">This is the super admin dashboard where you can manage users, courses, and settings.</p>
            <!-- Add a button to create a new student -->
        <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Create Student</a>
        </div>

        <!-- Stats Section (Optional) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Stats Cards -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                <p class="text-3xl font-bold text-blue-600">1,200</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-700">Total Courses</h3>
                <p class="text-3xl font-bold text-green-600">150</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-700">Settings</h3>
                <p class="text-3xl font-bold text-red-600">Manage</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-8 flex justify-between">
            <a href="#" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-lg">Manage Users</a>
            <a href="#" class="text-white bg-green-500 hover:bg-green-700 px-4 py-2 rounded-lg">Manage Courses</a>
            <a href="#" class="text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-lg">Settings</a>
        </div>
    </div>
@endsection
