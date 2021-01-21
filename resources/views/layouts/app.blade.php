<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield("page-title", "Biscotti")</title>
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        {{-- GOOGLE FONT --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        {{-- BOOTSTRAP --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        {{-- HEADER --}}
        @include("partials.header")

        <main>
            {{-- MAIN --}}
            @yield("content")
        </main>

        {{-- JAVASCRIPT --}}
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
