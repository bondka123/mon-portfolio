@extends('layouts.admin')
@section('page-title','Ajouter Projet')

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label>Titre</label>
        <input type="text" name="title" class="w-full p-2 border rounded" required>
    </div>
    <div class="mb-4">
        <label>Description</label>
        <textarea name="description" class="w-full p-2 border rounded" required></textarea>
    </div>
    <div class="mb-4">
        <label>Tags (séparés par virgule)</label>
        <input type="text" name="tags[]" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
        <label>Icon</label>
        <input type="text" name="icon" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
        <label>GitHub Link</label>
        <input type="url" name="github_link" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
        <label>Demo Link</label>
        <input type="url" name="demo_link" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
        <label>Mettre en avant ?</label>
        <input type="checkbox" name="is_featured">
    </div>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Créer</button>
</form>
@endsection
