<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal fitness">
    <meta name="keywords" content="fitness,gym">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <title>Dušan Radulović Personal Trainer</title>


   
    <meta property="og:image" content="https://dusanradulovic.com/images/logos/logo_za_tab.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://dusanradulovic.com/" />
    <meta property="og:title" content="Dusan Radulovic | Personal fitness trainer  " />
    <meta property="og:description" content="Best" />

    <link rel="icon" type="image/png" href="/images/logos/logo_za_tab.png" />
    <link rel="apple-touch-icon-precomposed" href="/images/logos/logo_za_tab.png" type="image/png" sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" href="/images/logos/logo_za_tab.png" type="image/png" sizes="120x120" />
    <link rel="apple-touch-icon" href="/images/logos/logo_za_tab.png" sizes="180x180" />




    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/svg.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <link rel="stylesheet" href="/css/myStyle.css"> 



 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170482596-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170482596-1');
</script>

</head>

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





</html>