<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personal Gym</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/svg.css">

    <link rel="stylesheet" href="/css/myStyle.css">


</head>

<body  id= "body">
    @include('layouts.messages')
    @yield('content')
</body>
<!-- SCript -->
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="/js/myJs.js"></script>


<!-- <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
 -->
<!-- <script defer src="/js/swup.js"></script> -->



</html>