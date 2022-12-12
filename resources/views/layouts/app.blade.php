<html>
    <head>
        <title>{{setting('site.title')}} - {{setting('site.description')}}</title>
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