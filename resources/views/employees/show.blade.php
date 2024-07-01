@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Employee Details</h1>
        <div class="mb-4">
            <label class="block text-gray-700">Name:</label>
            <p class="mt-1 block w-full">{{ $employee->name }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Training Records:</label>
            <p class="mt-1 block w-full">{{ $employee->training_records }}</p>
        </div>
        <a href="{{ route('employees.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back</a>
    </div>
@endsection
