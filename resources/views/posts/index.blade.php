@extends('layouts.app')
@section('title', 'Daftar Post')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Tambah Post</a>

    {{-- Pencarian (bonus) --}}
    <form action="{{ route('posts.index') }}" method="GET" class="d-flex gap-2">
        <input type="text" name="search" class="form-control"
               placeholder="Cari judul..." value="{{ request('search') }}">
        <button class="btn btn-outline-dark">Cari</button>
    </form>
</div>

@forelse ($posts as $post)
    <x-card :title="$post->title">
        <p>{{ Str::limit($post->content, 120) }}</p>

        <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Lihat</a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Yakin hapus post ini?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </x-card>
@empty
    <p class="text-center text-muted">Belum ada post.</p>
@endforelse

{{ $posts->links() }}
@endsection