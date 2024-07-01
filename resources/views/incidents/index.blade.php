@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Incidents</h1>
        <a href="{{ route('incidents.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Incident</a>
        <div class="mt-4">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($incidents as $incident)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $incident->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $incident->description }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('incidents.show', $incident->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('incidents.edit', $incident->id) }}" class="text-yellow-500 ml-2">Edit</a>
                            <form action="{{ route('incidents.destroy', $incident->id) }}" method="POST" class="inline-block ml-2">
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
