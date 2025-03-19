@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold mb-4">Edit Student</h1>

        <form action="{{ route('admin.students.update', $student->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT') <!-- Method to handle the update -->

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $student->first_name) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $student->last_name) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
            </div>

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $student->title) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="work_phone" class="block text-sm font-medium text-gray-700">Work Phone</label>
                    <input type="text" name="work_phone" id="work_phone" value="{{ old('work_phone', $student->work_phone) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <div>
                    <label for="home_phone" class="block text-sm font-medium text-gray-700">Home Phone</label>
                    <input type="text" name="home_phone" id="home_phone" value="{{ old('home_phone', $student->home_phone) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>
            </div>

            <div>
                <label for="mobile_phone" class="block text-sm font-medium text-gray-700">Mobile Phone</label>
                <input type="text" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone', $student->mobile_phone) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="address" id="address" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md w-full">{{ old('address', $student->address) }}</textarea>
            </div>

            <div>
                <label for="usi" class="block text-sm font-medium text-gray-700">USI (Unique Student Identifier)</label>
                <input type="text" name="usi" id="usi" value="{{ old('usi', $student->usi) }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
