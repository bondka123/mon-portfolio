@extends('layouts.app')

@section('title', 'Contact - Portfolio')

@section('content')
<div class="container">
    <div class="section">
        <h2 class="section-title">Contactez-moi</h2>
        <form action="{{ route('contact.store') }}" method="POST" style="max-width:600px;margin:auto;">
            @csrf
            <div style="margin-bottom:20px;">
                <label>Nom :</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;">
            </div>
            <div style="margin-bottom:20px;">
                <label>Email :</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;">
            </div>
            <div style="margin-bottom:20px;">
                <label>Sujet :</label>
                <input type="text" name="subject" value="{{ old('subject') }}" required
                       style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;">
            </div>
            <div style="margin-bottom:20px;">
                <label>Message :</label>
                <textarea name="message" rows="5" required
                          style="width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;">{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn-primary">📩 Envoyer</button>
        </form>
    </div>
</div>
@endsection
