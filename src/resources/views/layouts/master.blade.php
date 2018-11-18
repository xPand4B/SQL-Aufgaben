<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
        <title>
            @if (getenv('APP_NAME'))
                {{ env('APP_NAME') }}
            @else
                SQL
            @endif
            @yield('title')
        </title>
    </head>
    <body>
        @include('partials._topnav')
        
        <div class="container mt-5">
            @yield('content')
        </div>
    </body>
</html>