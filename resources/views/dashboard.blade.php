@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold mb-4">📰 Daftar Artikel</h2>

        @if ($articles->isEmpty())
            <div class="alert alert-info">Tidak ada artikel yang tersedia.</div>
        @else
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($articles as $article)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <i class="bi bi-calendar-event"></i>
                                    <small>Dibuat pada: {{ $article->created_at->format('d-m-Y') }}</small>
                                </h6>
                                <p class="card-text text-truncate" style="max-height: 4.5em; overflow: hidden;">
                                    {{ $article->description }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary btn-sm">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
@endsection
