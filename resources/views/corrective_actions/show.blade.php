@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Corrective Action Details</h1>
        <div class="mb-4">
            <label for="incident_id" class="block text-gray-700">Incident ID:</label>
            <p>{{ $correctiveAction->incident_id }}</p>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <p>{{ $correctiveAction->description }}</p>
        </div>
        <div class="mb-4">
            <label for="implemented_at" class="block text-gray-700">Implemented At:</label>
            <p>{{ $correctiveAction->implemented_at }}</p>
        </div>
        <a href="{{ route('corrective_actions.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
@endsection
