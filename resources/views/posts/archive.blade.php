@extends('templates.layout')

@section('title', '| All Posts')

@section('content')

    <section id="list">

        <div class="row">
            <div class="col-sm-10">
                <h2>Posts</h2>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('post.create') }}" class="btn btn-primary btn-block">Create</a>
            </div>
        </div>

        <h3>2017</h3>
        <ul>
            <li>
                <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/style-guide/">Style Guide</a>
                <time class="date-meta">Nov 14</time>
            </li>
            <li>
                <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/image-content/">Image Style Guide</a>
                <time class="date-meta">Nov 14</time>
            </li>
        </ul>

        <h3>2014</h3>
        <ul>
            <li>
                <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/creating-a-new-theme/">Creating a New Theme</a>
                <time class="date-meta">Sep 28</time>
            </li>
        </ul>

    </section>

    <ul class="pagination">

        <li>
            <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/" aria-label="First"><span aria-hidden="true">&laquo;&laquo;</span></a>
        </li>

        <li
                class="disabled">
            <a href="" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
        </li>


        <li
                class="active"><a href="https://themes.gohugo.io/theme/hugo-kiera/posts/">1</a></li>


        <li
        ><a href="https://themes.gohugo.io/theme/hugo-kiera/posts/page/2/">2</a></li>


        <li
        >
            <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/page/2/" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
        </li>

        <li>
            <a href="https://themes.gohugo.io/theme/hugo-kiera/posts/page/2/" aria-label="Last"><span aria-hidden="true">&raquo;&raquo;</span></a>
        </li>

    </ul>

@endsection