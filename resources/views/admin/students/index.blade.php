<!-- resources/views/admin/students/index.blade.php -->

@extends('layouts.app')

@section('content')
 <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Student List</h1>

        <table class="min-w-full table-auto bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">First Name</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Last Name</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Email</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">{{ $student->first_name }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->last_name }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->email }}</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="{{ route('admin.students.edit', $student->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Pagination or Additional Options if needed -->
       
    </div>
@endsection
