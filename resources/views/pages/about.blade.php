@extends('templates.layout')

@section('ActiveAbout', 'active')

@section('title', '| About')

@section('content')
<article>
    <h1>About Me</h1>
    <p>{{ $data['fullname'] }}: experience in PHP web development, along with some Python and Java. Currently working in C#, .NET Core and Angular 2.</p>
    <p>Due to complete a BSc. Software Development in late Q2 2019.</p>
    <p>Download my CV <a href="{{ $data['cv_link'] }}">here</a>.</p>
    <p>See more of my projects on <a href="{{ $data['github'] }}">GitHub</a>.</p>
    <h2>Key Skills</h2>
    <p>Languages (Comfortable With)</p>
    <ul>
        <li>C#</li>
        <li>PHP</li>
        <li>Java</li>
        <li>Python</li>
        <li>JavaScript</li>
        <li>SQL</li>
        <li>VBA</li>
    </ul>
    <p>Languages (Knowledge Of)</p>
    <ul>
        <li>C++</li>
        <li>PL/SQL</li>
    </ul>
    <p>Related Skills</p>
    <ul>
        <li>TypeScript</li>
        <li>Angular 2</li>
        <li>Front End: HTML5/CSS3, Bootstrap, SASS, Angular Material</li>
        <li>.NET Core</li>
        <li>.NET Framework</li>
        <li>Laravel</li>
        <li>Django</li>
        <li>Wordpress</li>
    </ul>
    <p>Technologies</p>
    <ul>
        <li>Powershell</li>
        <li>Windows Server Admin</li>
        <li>Linux Server Admin</li>
        <li>Database: (MySQL/MariaDB, Oracle, MS SQL Server, PostgreSQL)</li>
        <li>CI/CD (Docker, Vagrant, Chef)</li>
        <li>VMware, Veeam</li>
        <li>Source Control (Git, TFS, SVN)</li>
        <li>Computer Networking</li>
    </ul>
</article>
@endsection