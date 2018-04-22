@extends('templates.layout')

@section('title', '| Edit Blog Post')

@section('header_scripts')

@include('partials._jquery_parsley')

@section('content')
<article>
    <form id="edit-post-form" method="POST" data-parsley-validate action="{{ route('post.update', $post->id) }}">
        {{ csrf_field() }}
        <label name="title">Title:</label>
        <textarea type="text" data-parsley-required data-parsley-trigger="change" data-parsley-maxlength="255" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
        <label name="slug">Slug:</label>
        <textarea type="slug" data-parsley-required data-parsley-trigger="change" data-parsley-minlength="5" data-parsley-maxlength="255" class="form-control input-lg" id="slug" name="slug" rows="1" style="resize:none;">{{ $post->slug }}</textarea>
        <label name="body">Body:</label>
        <textarea type="text" class="form-control input-lg" data-parsley-required id="body" name="body" rows="10">{{ $post->body }}</textarea>
        <div id="form-buttons-row" class="row">
            <div class="col-sm-2">
                <a href="{{ route('post.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        {{ method_field('PUT') }}
    </form>
</article>
@endsection