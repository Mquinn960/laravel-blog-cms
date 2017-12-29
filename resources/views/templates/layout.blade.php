<html>
    <head>
        <title>@yield('title')</title>
        @include('includes.head')
    </head>
    <body>
        {{--@section('sidebar')--}}
            {{--This is the master sidebar.--}}
        {{--@show--}}

        <div class="container col-md-10">

            <header class="row">
                @include('includes.header')
                @include('includes.navigation')
            </header>

            <div id="main" class="row">

                @yield('content')

            </div>

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>