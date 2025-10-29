@extends('layouts.app')

@section('title', $project->title . ' - Portfolio')

@section('content')
<div class="container">
    <div class="section">
        <div class="project-icon" style="font-size:3em;">{{ $project->icon }}</div>
        <h1 style="color:#667eea;">{{ $project->title }}</h1>
        <p style="margin:20px 0;">{{ $project->description }}</p>

        <h3>Technologies utilisées :</h3>
        <div class="tech-tags">
            @foreach($project->tags as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>

        <div style="margin-top:30px;">
            @if($project->github_link)
                <a href="{{ $project->github_link }}" class="btn-primary" target="_blank">🔗 GitHub</a>
            @endif
            @if($project->demo_link)
                <a href="{{ $project->demo_link }}" class="btn-primary" target="_blank">🌐 Démo</a>
            @endif
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Projets similaires</h2>
        <div class="projects-grid">
            @foreach($relatedProjects as $related)
                <div class="project-card" onclick="window.location='{{ route('project.show', $related->id) }}'">
                    <div class="project-icon">{{ $related->icon }}</div>
                    <h3 class="project-title">{{ $related->title }}</h3>
                    <p class="project-description">{{ Str::limit($related->description, 120) }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
