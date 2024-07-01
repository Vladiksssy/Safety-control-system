@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Edit Inspection</h1>
        <form action="{{ route('inspections.update', $inspection->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="inspector_name" class="block text-gray-700">Inspector Name:</label>
                <input type="text" id="inspector_name" name="inspector_name" value="{{ $inspection->inspector_name }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="datetime-local" id="date" name="date" value="{{ \Carbon\Carbon::parse($inspection->date)->format('Y-m-d\TH:i') }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="findings" class="block text-gray-700">Findings:</label>
                <textarea id="findings" name="findings" class="mt-1 block w-full" required>{{ $inspection->findings }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
