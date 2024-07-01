@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Corrective Actions</h1>
        <a href="{{ route('corrective_actions.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Corrective Action</a>
        <div class="mt-4">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Incident ID</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Implemented At</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($correctiveActions as $correctiveAction)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $correctiveAction->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $correctiveAction->incident_id }}</td>
                        <td class="py-2 px-4 border-b">{{ $correctiveAction->description }}</td>
                        <td class="py-2 px-4 border-b">{{ $correctiveAction->implemented_at }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('corrective_actions.show', $correctiveAction->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('corrective_actions.edit', $correctiveAction->id) }}" class="text-yellow-500 ml-2">Edit</a>
                            <form action="{{ route('corrective_actions.destroy', $correctiveAction->id) }}" method="POST" class="inline-block ml-2">
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
