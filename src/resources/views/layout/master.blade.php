<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._topnav')
        
        <div class="container">
            @yield('content')
        </div>
        
        @include('partials._javascript')
    </body>
</html>
