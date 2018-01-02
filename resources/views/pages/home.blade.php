@extends('templates.layout')

@section('title', '| Home')

@section('ActiveHome', 'active')

@section('content')
<ul>
    @forelse ($posts as $post)
        <li>
            <h1 class="post-title"><a href="{{ route('post.show', $post->id) }}" title="{{ $post->title }}">{{ $post->title }}</a></h1>
            <aside>
                <ul>
                    <li>
                        <time class="post-date" datetime="{{ $post->created_at }}">{{ $post->created_at->format('M j, Y') }}</time>
                    </li>
                </ul>
            </aside>
            <p>{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
            <a href="{{ route('post.show', $post->id) }}">Read more</a>
        </li>
    @empty
        <li><h1>No posts!</h1></li>
    @endforelse
</ul>
<div class="text-center">
    {!! $posts->links() !!}
</div>
@endsection