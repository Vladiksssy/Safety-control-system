@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Incident Details</h1>
        <div class="mb-4">
            <label class="block text-gray-700">ID:</label>
            <p>{{ $incident->id }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description:</label>
            <p>{{ $incident->description }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Reported At:</label>
            <p>{{ \Carbon\Carbon::parse($incident->reported_at)->format('Y-m-d H:i') }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Status:</label>
            <p>{{ $incident->status }}</p>
        </div>
        <a href="{{ route('incidents.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
@endsection
