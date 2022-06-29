<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/LOGO2.png">
  
</head>
<style>
    body{
       background: url('https://cdn.pixabay.com/photo/2018/08/08/12/38/internet-3592056_960_720.jpg') no-repeat center center  fixed;
       font-family: 'Titillium Web', sans-serif;
       background-size: cover; 
    }
    </style>
<body>
    <div id="app">
     

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>