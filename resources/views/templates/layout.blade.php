<html>
    <head>
        <title>@yield('title')</title>
        @include('includes.head')
    </head>
    <body>
        {{--@section('sidebar')--}}
            {{--This is the master sidebar.--}}
        {{--@show--}}

        <div id="container">

            <header>
                @include('includes.header')
                @include('includes.navigation')
            </header>

            <main>
                <section id="home">

                    <ul>
                        @yield('content')
                    </ul>

                </section>
            </main>

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>