@extends('layouts.app')

@section('title', 'À propos - Portfolio')

@section('content')
<div class="container">
    <div class="section">
        <h2 class="section-title">À propos de moi</h2>
        <p style="line-height:1.8;">
            Bonjour 👋, je suis un <strong>développeur web full-stack</strong> passionné par la création
            d’applications modernes, performantes et élégantes.  
            J’aime travailler avec <strong>Laravel</strong>, <strong>JavaScript</strong> et <strong>Vue.js</strong>.
        </p>

        <h3 style="margin-top:40px;">Mes Compétences</h3>
        <div class="skills-grid" style="margin-top:20px;">
            @foreach($skills as $skill)
                <div class="skill-item">
                    <div class="skill-icon">{{ $skill->icon }}</div>
                    <div class="skill-name">{{ $skill->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
