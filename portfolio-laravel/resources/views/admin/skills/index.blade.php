@extends('layouts.admin')
@section('page-title','Compétences')

@section('content')
<div class="flex justify-between mb-4">
    <a href="{{ route('admin.skills.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">+ Ajouter Compétence</a>
</div>

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">#</th>
            <th class="p-3">Nom</th>
            <th class="p-3">Niveau</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($skills as $skill)
        <tr class="border-t">
            <td class="p-3">{{ $skill->id }}</td>
            <td class="p-3">{{ $skill->name }}</td>
            <td class="p-3">{{ $skill->level }}%</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('admin.skills.edit',$skill->id) }}" class="px-2 py-1 bg-yellow-400 text-white rounded">Modifier</a>
                <form action="{{ route('admin.skills.delete',$skill->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cette compétence ?')">
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
    {{ $skills->links() }}
</div>
@endsection
