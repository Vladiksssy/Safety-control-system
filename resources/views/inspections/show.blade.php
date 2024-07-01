@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Inspection Details</h1>
        <div class="mb-4">
            <label class="block text-gray-700">ID:</label>
            <p>{{ $inspection->id }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Inspector Name:</label>
            <p>{{ $inspection->inspector_name }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Date:</label>
            <p>{{ \Carbon\Carbon::parse($inspection->date)->format('Y-m-d H:i') }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Findings:</label>
            <p>{{ $inspection->findings }}</p>
        </div>
        <a href="{{ route('inspections.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
@endsection
