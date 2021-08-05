<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ Route::is('home_path') ? config('app.name') :  config('app.name').' | About-us' }}</title>

    <body>  
        <p> 
        @yield('body_content')
       </p>
        <footer>
            &copy; Copyright &middot; {{ date('Y') }} @yield('link_content')
        </footer>
    </body>
</html>
