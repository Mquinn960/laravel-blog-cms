@extends('templates.layout')

@section('ActiveAbout', 'active')

@section('title', '| About')

@section('content')
<article>
    <h1>About Me</h1>
    <p>My name is {{ $data['fullname'] }}, and I am a programmer working mostly in PHP.</p>
    <ul>
        <li><a href="">PHP</a></li>
        <li><a href="">Laravel</a></li>
    </ul>
    <p>Download my CV <a href="{{ $data['cv_link'] }}">here</a>.</p>
    <p>See more of my projects on <a href="{{ $data['github'] }}">GitHub</a>.</p>
</article>
@endsection