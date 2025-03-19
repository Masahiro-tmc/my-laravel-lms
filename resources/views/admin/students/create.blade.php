@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Register New Student</h1>
        
        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" id="first_name" class="mt-1 block w-full border border-gray-300 rounded-md" required>
            </div>
            
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="mt-1 block w-full border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="work_phone" class="block text-sm font-medium text-gray-700">Work Phone</label>
                <input type="text" name="work_phone" id="work_phone" class="mt-1 block w-full border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="home_phone" class="block text-sm font-medium text-gray-700">Home Phone</label>
                <input type="text" name="home_phone" id="home_phone" class="mt-1 block w-full border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="mobile_phone" class="block text-sm font-medium text-gray-700">Mobile Phone</label>
                <input type="text" name="mobile_phone" id="mobile_phone" class="mt-1 block w-full border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="address" id="address" class="mt-1 block w-full border border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label for="usi" class="block text-sm font-medium text-gray-700">USI (Unique Student Identifier)</label>
                <input type="text" name="usi" id="usi" class="mt-1 block w-full border border-gray-300 rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register Student</button>
        </form>
    </div>
@endsection

