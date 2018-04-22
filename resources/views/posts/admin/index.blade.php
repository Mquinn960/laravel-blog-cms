@extends('templates.layout')

@section('title', '| Index')

@section('ActiveHome', 'active')

@section('content')
    <ul>
        <div class="col-sm-2">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-block">Create</a>
        </div>
            @if (!empty($posts))
        <table style="width:100%">
            <th>Title</th>
            <th>Date</th>
            <th></th>
            <th></th>
            @endif
        @forelse ($posts as $post)
                <tr>
                    <td style="width:50%"><a href="{{ route('post.show', $post->id) }}" title="{{ $post->title }}">{{ $post->title }}</a></td>
                    <td><time class="post-date" datetime="{{ $post->created_at }}">{{ $post->created_at->format('M j, Y') }}</time></td>
                    <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-block admin-button">Edit</a></td>
                    <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                    <td>
                            <input type="submit" value="Delete" class="btn btn-danger btn-block admin-button">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            {{ method_field('DELETE') }}
                    </td>
                    </form>﻿
                </tr>
        @empty
            <li><h1>No posts!</h1></li>
        @endforelse
            @if (!empty($posts))
        </table>
            @endif


    </ul>
    <div class="text-center">
        {!! $posts->links() !!}
    </div>
@endsection