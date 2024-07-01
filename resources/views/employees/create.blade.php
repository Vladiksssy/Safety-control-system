@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Create Employee</h1>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="training_records" class="block text-gray-700">Training Records:</label>
                <textarea id="training_records" name="training_records" class="mt-1 block w-full"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
@endsection
