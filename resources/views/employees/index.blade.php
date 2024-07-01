@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Employees</h1>
        <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Employee</a>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">Training Records</th>
                <th class="py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="py-2">{{ $employee->id }}</td>
                    <td class="py-2">{{ $employee->name }}</td>
                    <td class="py-2">{{ $employee->training_records }}</td>
                    <td class="py-2">
                        <a href="{{ route('employees.show', $employee->id) }}" class="text-blue-500">View</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-500 ml-2">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
