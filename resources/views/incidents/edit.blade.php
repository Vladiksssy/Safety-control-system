@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Edit Incident</h1>
        <form action="{{ route('incidents.update', $incident->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <input type="text" id="description" name="description" value="{{ $incident->description }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="reported_at" class="block text-gray-700">Reported At:</label>
                <input type="datetime-local" id="reported_at" name="reported_at" value="{{ \Carbon\Carbon::parse($incident->reported_at)->format('Y-m-d\TH:i') }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status:</label>
                <select id="status" name="status" class="mt-1 block w-full">
                    <option value="Open" {{ $incident->status == 'Open' ? 'selected' : '' }}>Open</option>
                    <option value="Closed" {{ $incident->status == 'Closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
