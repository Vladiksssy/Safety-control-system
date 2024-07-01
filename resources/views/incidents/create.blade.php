@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Create Incident</h1>
        <form action="{{ route('incidents.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <input type="text" id="description" name="description" class="mt-1 block w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
@endsection
