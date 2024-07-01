@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Edit Corrective Action</h1>
        <form action="{{ route('corrective_actions.update', $correctiveAction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="incident_id" class="block text-gray-700">Incident:</label>
                <select id="incident_id" name="incident_id" class="mt-1 block w-full">
                    @foreach ($incidents as $id => $description)
                        <option value="{{ $id }}" {{ $id == $correctiveAction->incident_id ? 'selected' : '' }}>{{ $description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" class="mt-1 block w-full" required>{{ $correctiveAction->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="implemented_at" class="block text-gray-700">Implemented At:</label>
                <input type="date" id="implemented_at" name="implemented_at" value="{{ $correctiveAction->implemented_at }}" class="mt-1 block w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
