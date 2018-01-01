@extends('templates.layout')

@section('title', '| Blog Post')

@section('content')
<article>
    <h1>{{ $post->title }}</h1>
    <aside>
        <ul>
            <li>
                <time class="post-date" datetime="{{ $post->created_at }}">{{ $post->created_at->format('M j, Y') }}</time>
            </li>
            <li>4 min read</li>
        </ul>
    </aside>
    <p>{{ $post->body }}</p>
    <div class="row">
        <div class="col-sm-2">
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
        </div>
        <div class="col-sm-2">
            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                <input type="submit" value="Delete" class="btn btn-danger btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                {{ method_field('DELETE') }}
            </form>﻿
        </div>
    </div>
</article>
@endsection