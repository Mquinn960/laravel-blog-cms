@extends('templates.layout')

    @section('title', '| Home')

    @section('content')

    <ul>
        <li class="first">
            <h1><a href="/" title="Style Guide">Style Guide</a></h1>
            <aside>
                <ul>
                    <li>
                        <time class="post-date" datetime="2017-11-14T10:57:55-05:00">Nov 14, 2017</time>
                    </li>

                    <li>4 min read</li>
                </ul>
            </aside>
            <p>Headings Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 Headings with Text Heading 1 Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam.</p>

            <a href="/">Read more&hellip;</a>
        </li>
    </ul>

    @endsection