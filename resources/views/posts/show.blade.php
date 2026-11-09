@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.index') }}" class="text-blue-700 hover:underline">&larr; Back to all posts</a>

    <div class="bg-white rounded shadow p-6 mt-4">
        @if ($post->is_pinned)
            <span class="bg-yellow-300 text-xs font-bold px-2 py-1 rounded">📌 Pinned</span>
        @endif
        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $post->category }}</span>

        <h1 class="text-2xl font-bold mt-3">{{ $post->title }}</h1>
        <p class="text-sm text-slate-500 mt-1">
            {{ $post->published_at->format('F d, Y') }} · {{ $post->views }} views · Author #{{ $post->author_id }}
        </p>

        <div class="mt-4 whitespace-pre-line">{{ $post->body }}</div>
    </div>
@endsection
