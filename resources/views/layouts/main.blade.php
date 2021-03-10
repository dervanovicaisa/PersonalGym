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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
 
    @include('components.modal')
    @include('components.modal1')
    @include('components.modal2')
    @include('components.modal3')
    @include('components.modal4') 

  <div id="loader-wrapper">
<!--     <img id="loader" src="/images/logos/Logo-DR.svg " /> 
 
	  
 <video id="loader" src="/images/video/animacija1.mp4 " autoplay muted></video> --> 
 <img id="loader" src="/videos/animacija-3.gif" /> 

 </div>
    @yield('content')
</body>

<!-- SCript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" ></script>

<script src="/js/myJs.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/formScript.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>