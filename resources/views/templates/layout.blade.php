<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        {{--@section('sidebar')--}}
            {{--This is the master sidebar.--}}
        {{--@show--}}

        <div class="container">
            @yield('header')
            @yield('content')
            @yield('footer')
        </div>
    </body>
</html>