@extends('templates.layout')

@section('title', '| All Posts')

@section('ActiveArchive', 'active')

@section('content')
<section id="list">
    <div class="row">
        <div class="col-sm-10">
            <h2>Archive</h2>
        </div>
    </div>
    <h3 style="padding-top:10px">{{ $year = $posts[0]->created_at->format('Y') }}</h3>
    <ul>
        @foreach ($posts as $post)
            @if ($post->created_at->format('Y') != $year)
    </ul>
    <h3>{{ $year }}</h3>
    <ul>
        {{ $year = $post->created_at->format('Y') }}
            @endif
        <li>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
            <time class="date-meta">{{ $post->created_at->format('M j') }}</time>
        </li>
        @endforeach
    </ul>
</section>

@endsection