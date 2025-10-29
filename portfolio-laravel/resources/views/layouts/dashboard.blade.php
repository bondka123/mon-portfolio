@extends('layouts.admin')

@section('title','Dashboard Admin')
@section('page-title','Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold">Projets</h2>
        <p class="text-3xl mt-4">{{ $projectsCount }}</p>
    </div>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold">Compétences</h2>
        <p class="text-3xl mt-4">{{ $skillsCount }}</p>
    </div>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold">Contacts</h2>
        <p class="text-3xl mt-4">{{ $contactsCount }}</p>
    </div>
</div>
@endsection
