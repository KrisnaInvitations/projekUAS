@php
    $title = $article->title;
@endphp
@extends('layouts.app')
@section('title', $title)
@section('content')
<div style="display: flex; gap: 30px;">
    <!-- Kolom Artikel -->
    <div style="width: 60%; border-right: 2px solid #ccc; padding-right: 20px;">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->description }}</p>
        <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
    </div>

    <!-- Kolom Komentar -->
    <div style="width: 40%; padding-left: 20px;">
        <h3>Komentar</h3>

        {{-- Contoh jika komentar di-passing dari controller --}}
        @foreach ($comments as $comment)
            <div style="margin-bottom: 10px;">
                <strong>{{ $comment->user->name }}</strong><br>
                <p>{{ $comment->body }}</p>
                <hr>
            </div>
        @endforeach
    </div>
</div>
    <br><br>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
    <a href="{{ route('comments.index') }}">buka Komentar</a>
@endsection
