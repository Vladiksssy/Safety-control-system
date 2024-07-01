@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Inspections</h1>
        <a href="{{ route('inspections.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Inspection</a>
        <div class="mt-4">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Inspector Name</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Findings</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($inspections as $inspection)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $inspection->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $inspection->inspector_name }}</td>
                        <td class="py-2 px-4 border-b">{{ $inspection->date }}</td>
                        <td class="py-2 px-4 border-b">{{ $inspection->findings }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('inspections.show', $inspection->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('inspections.edit', $inspection->id) }}" class="text-yellow-500 ml-2">Edit</a>
                            <form action="{{ route('inspections.destroy', $inspection->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
