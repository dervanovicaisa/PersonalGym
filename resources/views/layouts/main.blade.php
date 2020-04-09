<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personal Gym</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="/css/myStyle.css">


</head>

<body>
    @include('layouts.messages')
    @yield('content')
</body>
<!-- SCript -->
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>

<script defer src="/js/myJs.js"></script>


</html>