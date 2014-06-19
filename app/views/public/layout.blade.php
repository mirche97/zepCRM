<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{Config::get('platform.ep_title')}}</title>
        <link rel="stylesheet" href="{{Config::get('application.url')}}/css/bootstrap.min.css" type="text/css" />
        @if ( !empty( $customheader ) )
            @foreach ( $customheader as $item)
                {{$item}}
            @endforeach
        @endif        
    </head>
    <body>
        <header>
            @yield('header')
        </header>        
        <div class="container">
           @yield('content')
        </div>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
<!-- version: {{Config::get('platform.ep_version')}} -->