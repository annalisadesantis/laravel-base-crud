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
