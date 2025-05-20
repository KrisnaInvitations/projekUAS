@php
    $title = $article->title;
@endphp

@extends('layouts.app')
@section('title', $title)

@section('content')
<div style="display: flex; gap: 30px; align-items: flex-start;">
    
    <!-- Kiri: Artikel -->
    <div style="flex: 2;">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->description }}</p>
        <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
        <br><br>
        <a href="{{ route('dashboard') }}">← Kembali ke Dashboard</a>
    </div>

    <!-- Garis pemisah -->
    <div style="width: 1px; background-color: #ccc; height: 100%;"></div>

    <!-- Kanan: Komentar -->
    <div style="flex: 1;">
        <h3>Komentar</h3>

        @if($comments->isEmpty())
            <p>Belum ada komentar.</p>
        @else
            @foreach($comments as $comment)
                <div style="margin-bottom: 10px; padding: 10px; background: #f9f9f9; border-radius: 5px;">
                    <strong>{{ $comment->user->name ?? 'Anonim' }}</strong><br>
                    <small>{{ $comment->created_at->format('d M Y H:i') }}</small>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
        @endif

        <a href="{{ route('comments.index') }}">Lihat Semua Komentar</a>
    </div>
</div>
@endsection
