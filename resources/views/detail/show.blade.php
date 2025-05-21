@php
    $title = $article->title;
@endphp

@extends('layouts.app')
@section('title', $title)

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h1 class="card-title fw-bold mb-3">{{ $article->title }}</h1>
                <p class="card-text fs-5">{{ $article->description }}</p>
                <p class="text-muted mt-3">
                    <i class="bi bi-calendar-event me-1"></i>
                    Ditulis pada: {{ $article->created_at->format('d M Y') }}
                </p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>


@endsection
