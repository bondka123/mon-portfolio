@extends('layouts.admin')
@section('page-title','Projets')

@section('content')
<div class="flex justify-between mb-4">
    <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">+ Ajouter Projet</a>
</div>

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">#</th>
            <th class="p-3">Titre</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr class="border-t">
            <td class="p-3">{{ $project->id }}</td>
            <td class="p-3">{{ $project->title }}</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('admin.projects.edit',$project->id) }}" class="px-2 py-1 bg-yellow-400 text-white rounded">Modifier</a>
                <form action="{{ route('admin.projects.delete',$project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer ce projet ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $projects->links() }}
</div>
@endsection
