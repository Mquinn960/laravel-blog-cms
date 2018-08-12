@extends('templates.layout')

@section('title', '| Projects')

@section('ActiveProjects', 'active')

@section('content')
<article>
    <h1>Personal Projects</h1>
    <ul>
        <li><a href="https://github.com/Mquinn960/mquinn-blog">Mquinn Blog Site</a></li>
        <p>PHP (Laravel, MySQL) CMS and site for my professional blog</p>
        <li><a href="https://github.com/Mquinn960/wispassist">WISP-Assist</a></li>
        <p>Java (Maven, JavaFX) desktop app for planning WISP networks, university project</p>
        <li><a href="https://github.com/Williams-Dan/FlightR">FlightR</a></li>
        <p>Python (Django) airport pickup/dropoff parking app, university project</p>
        <li><a href="https://github.com/Williams-Dan/Flighty">FlightY</a></li>
        <p>Java (Maven/Ninja) airport pickup/dropoff parking app, university project</p>
        <li><a href="https://github.com/Mquinn960/Mole-App">Whack-A-Mole</a></li>
        <p>Java (Android) Whack-A-Mole game, college project</p>
    </ul>
    <p>See more of my projects on <a href="https://github.com/Mquinn960">GitHub</a>.</p>
</article>
@endsection