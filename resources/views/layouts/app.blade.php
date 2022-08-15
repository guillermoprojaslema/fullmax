<html>
    <head>
        <title>{{ config('app.name')}} - @yield('title')</title>
        @include('common.headers')
    </head>
    <body id="bg">
    {{--<div id="loading-area">--}}
        {{----}}
    {{--</div>--}}
    <div class="page-wraper">
            @include('common.navbar')

            @section('content')

            @show
            @include('common.footer')
            @include('common.js')
        </div>
    </body>
</html>