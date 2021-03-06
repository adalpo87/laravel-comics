<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | DC Comics</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
        
        @include('partials.header')

        {{-- lo yield è la parte di codice che cambia tra le pagine --}}
        @yield('content')
        
        @include('partials.footer')
    
    </body>
</html>
