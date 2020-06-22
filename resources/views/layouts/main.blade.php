<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal fitness">
    <meta name="keywords" content="fitness,gym">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <title>Dušan Radulović</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/svg.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <link rel="stylesheet" href="/css/myStyle.css"> 

{{--     <link rel="stylesheet" type="text/css" href="/css/fullpage.css" />
 --}}
    

<body id="body">
    
  <div id="loader-wrapper">
    <img id="loader" src="/images/logos/Logo-DR.svg " /> 
  </div>
    @yield('content')
</body>

<!-- SCript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{-- <script type="text/javascript" src="/js/jquery.onepage-scroll.js"></script>
 --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/myJs.js"></script>

{{-- <script type="text/javascript" src="/js/fullpage.js"></script>
 --}}



</html>