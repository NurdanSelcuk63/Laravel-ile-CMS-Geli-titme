@extends('loyouts.app.app')

@section('content')
    <div class="mb-3">
        <h1 class="h3">Kullanıcılar</h1>
    </div>
    <p class="text-muted">Yapım aşamasında</p>

@endsection

@section('js')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/js/pages/users-entry.js'])
    @endif
@endsection
