@extends('layouts.app')

@section('title', 'Projets - Portfolio')

@section('content')
<div class="container">
    <h2 class="section-title">Tous les Projets</h2>
    
    <div class="projects-grid">
        @foreach($projects as $project)
        <div class="project-card" onclick="window.location='{{ route('project.show', $project->id) }}'">
            <div class="project-icon">{{ $project->icon }}</div>
            <h3 class="project-title">{{ $project->title }}</h3>
            <p class="project-description">{{ Str::limit($project->description, 150) }}</p>
            <div class="tech-tags">
                @foreach($project->tags as $tag)
                    <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    <div style="margin-top: 30px;">
        {{ $projects->links() }}
    </div>
</div>
@endsection
