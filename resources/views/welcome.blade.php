<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="UTF8">
        <meta name="robots" content="index,follow">
        <meta name='revisit-after' content='5 days' >
        <meta name='author' content='Coding: Nagy Lorant' >
        <meta name='language' content='hu' >
        <title></title>

        <!-- fonts start -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
        <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="fontawesome/css/brands.css" rel="stylesheet">
        <link href="fontawesome/css/solid.css" rel="stylesheet">
        <!-- fonts end -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <script src="/js/jquery-3.5.1.js"></script>
        <link href="/fontawesome/css/all.css" rel="stylesheet">
        <!--bootstrap-->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body class="{{ $MainFilter }}_body">
        <div class="home_felso_bg_dark"></div>
        <div class="container">
            
            @include("include.nav")
                <div class="row">
                    @yield('content')
                </div>
            @include("include.footer")
        </div>
    </body>
</html>
