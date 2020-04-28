@extends('layouts.main')

@section('content')
<main id="swup">
<nav>

<ul>

    <li><a href="#section1"> <svg height="40" width="40" class="navb">

        <path 
              d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 "
              />
    </svg></a></li>
    <li><a href="#section2">  <svg height="40" width="40" class="navb">
    <path 
              d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 "
              />
    </svg></a></li>
    <li><a href="#section3">   <svg height="40" width="40" class="navb">

    <path 
              d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 "
              />
</svg></a></li>
  </ul>
</nav>

<section class="hero-image" id="section1">
  <div class="hero-overlay" ></div>
  <img class="logoImage" src="/images/logos/Logo-DR.svg" />
  <div class="playSong1 red">
    <div class="swap">
      <div id="waveform">

        <div id="audio-spectrum"></div>
        <!-- Create action buttons -->

      </div>

      <div class="playSong2" id="textSong">
      <svg width="104" height="104" id='pause'>
    <circle id="circle" cx="51" cy="51" r="50" stroke-dasharray="314" stroke-dashoffset="0" style="stroke-width:2px;stroke:white;" class="play"/>
    <line id='line1' x1="38" y1="30" x2="38" y2="70" style="stroke-width:4px;stroke:#60BFFF;stroke-linecap: round;" />
    <path id='line2' d="M 38 30 L 70 50 L 38 70" rx="10" ry="10" style="stroke-width:4px;stroke:#60BFFF;fill:#60BFFF;stroke-linejoin: round;stroke-linecap: round;">
        <animate
            attributeName="d"
            dur="300ms"
            from="M 66 30 L 66 50 L 66 70"
            to="M 38 30 L 70 50 L 38 70"
            begin="indefinite"
            fill="freeze"
            id="from_pause_to_play"
        />
    </path>
    <animate
        xlink:href="#line2"
        attributeName="d"
        dur="300ms"
        from="M 38 30 L 70 50 L 38 70"
        to="M 66 30 L 66 50 L 66 70"
        fill="freeze"
        id="from_play_to_pause"
        begin="indefinite"
    /> <animate
            attributeName="d"
            dur="300ms"
            from="M 66 30 L 66 50 L 66 70"
            to="M 38 30 L 70 50 L 38 70"
            begin="indefinite"
            fill="freeze"
            id="from_pause_to_play"
        />
      </svg>
    

        <h5 class="wrapper" id="play">Play my spiritual song</h5>
       
      </div>
    </div>
  </div>
  <div class="txtInitials1 red">
    <img class="runningLogo" src="/images/logos/Profile-icon-sport.svg" />
    <div class="text">
      <h3>Dusan Radulovic</h3>
      <h5>PERSONAL TRAINER</h5>
    </div>
  </div>
  <div class="scrollDiv">
  <a href="#section2" class="mouse smoothscroll">
<span class="mouse-icon">
<span class="mouse-wheel"></span>
</span>
<h5>Scroll down</h5>

</a>
   
  </div>
</section>
<section class="row  red2 hero-image" id="section2">

  <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
  <div class="col-7 textAbout">
    <h5>About/ The Trainer/ The Coach</h5><br>
    <h6>
      As a kid i started playing Football .
      Over the years I wanted to get stronger, faster, better. So i
      trained hard, pushed myself to the limits. In order to achieve
      better results i started learning and studying about Fitness, Sports
      science, nutrition, physical therapy…As i gained new knowledge i was
      eager to experiment and try everything i learned. As a Football
      Player , Athletic Training was very interesting for me. At that time
      i was trying to get faster so i started Training like an olympic
      sprinter.
    </h6><br>
    <h6>
      Young full of will and Motivation but lacking of
      experience i started Training in the Morning on a snowy Olympic
      track it was cold not warming up properly i started with a few
      Sprints. As i was doing my rounds on the track in one split second i
      slipped and turned my knee on the inside. Nothing serious but there
      it happened till today my first and only injury. That Moment
      completely changed my life. Being unable to play Football for a
      while hit me hard. Mentally it was a very difficult period for me
      but also revealing.</h6><br>
    <h6>
      None of the physical therapist could really help
      me with my injury so instead of three months i was out six months.
      This forced me to get things into my own hands. This is where my
      Fitness journey starts. I wanted to learn more About
      Physioneurobiology , Biomechanics and Physical therapy so i could
      help myself with my injury. I started studying at SAFS (Swiss
      Academy of Fitness and Sports) and working in a gym to become a
      Trainer. As i gained more and more knowledge i started applying
      those techniques into my Training and Rehabilitation. I overcome my
      Injury and became stronger than ever. Words can't describe the
      feeling of Victory that i've felt, at that moment it was clear to me
      that this is what i want to do. I got my degree at SAFS and i enjoy
      every day working at the gym as a Fitness Trainer, and as a Personal
      Trainer to be able to give you the same feeling of Victory I have
      felt. Nothing is more important than your health.
    </h6>


  </div>
  <div class="row w-50 float-left intro">
  <div class="introt">
INTRO 
 <div>INTRO</div>
  <div>INTRO</div>
  <div>INTRO</div>
  <div>INTRO</div>
</div>
  </div>
  <div class="col-4 dusan" data-aos="zoom-in" > <img src="/images/all/Intro-Dusan-slika.png" alt="" /></div>
  <div class="scrollDiv">
  <a href="#section3" class="mouse smoothscroll">
<span class="mouse-icon">
<span class="mouse-wheel"></span>
</span>
<h5>Scroll down</h5>
    </a>
  </div>




</section>
<section class="row red3 justify-content-center" id="section3">
  <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
  <div class="row justify-content-center">
    <div class="col-4 leftText" >
      <h6>
        Let's go /Let's get you <br>CLOSER TO THE EDGE <br> With your <br>Lifestyle /
        Lifestyle giuide/ DR Training<br> Intro DR Training i na kraju ulazak u
        Training i šta se sve nudi u njemu DR TRAINING As a Personal
        Training (Athletic, Strength & Conditioning Coach) I'm giving your
        Body, Mind and Soul a Unique Individual experience that will help
        you find your Purpose, set your Goals and achieve them. What doesn't
        kill you makes you Stronger. I will push you to the limits and
        beyond and challenge you to your very best in everything you do
        every day. Pain is weakness leaving your Body. Weakness leaving your
        Body makes you a Healthier and Stronger Individual. Putting your
        Health in the first place in everything we do is going to allow you
        to build a strong foundation remember Nothing beats a strong Body,
        Mind and Soul. We all seek to be Happy and satisfied with ourselves.
        Your Guarantee will be your Commitment, your biggest Motivation will
        be the Results w hen you look yourself in the Mirror. You will Fail
        but you will learn from your Mistakes. You, me or nobody is gonna
        hit as hard as life. But it ain't about how hard you can hit, it's
        about how hard you can get hit and keep moving forward, how much you
        can take and keep moving forward. That's how Winning is done. You
        and me are gonna get you those extra few reps, that extra mile, that
        extra pound/kg to get You CLOSER TO THE EDGE and achieve everything
        you want. With your Power of will and Heart Everything is possible.
        My Name is Dušan Radulović Let's get started with your Training
        (Neka oznaka click here ili tamo neš vizuelno na klik idemo na
        sledeći dio trening pa sve na istu foru na klik iz treninga u
        ishranu i na kraju u recovery
      </h6>
      <div class="donji">
        <h1>
          THE TRAINING
        </h1>
      </div>
    </div>
    <div class="col-4 rightText" >
      <h6>
        About/ The Trainer/ The Coach<br><br> As a kid i started playing Football .
        Over the years I wanted to get stronger, faster, better. So i
        trained hard, pushed myself to the limits. In order to achieve
        better results i started learning and studying about Fitness, Sports
        science, nutrition, physical therapy…As i gained new knowledge i was
        eager to experiment and try everything i learned. As a Football
        Player , Athletic Training was very interesting for me. At that time
        i was trying to get faster so i started Training like an olympic
        sprinter.<br> <br>Young full of will and Motivation but lacking of
        experience i started Training in the Morning on a snowy Olympic
        track it was cold not warming up properly i started with a few
        Sprints. As i was doing my rounds on the track in one split second i
        slipped and turned my knee on the inside. Nothing serious but there
        it happened till today my first and only injury. That Moment
        completely changed my life. Being unable to play Football for a
        while hit me hard. Mentally it was a very difficult period for me
        but also revealing. None of the physical therapist could really help
        me with my injury so instead of three months i was out six months.
        This forced me to get things into my own hands. This is where my
        Fitness journey starts. I wanted to learn more About
        Physioneurobiology , Biomechanics and Physical therapy so i could
        help myself with my injury. I started studying at SAFS (Swiss
        Academy of Fitness and Sports) and working in a gym to become a
        Trainer. As i gained more and more knowledge i started applying
        those techniques into my Training and Rehabilitation. I overcome my
        Injury and became stronger than ever. Words can't describe the
        feeling of Victory that i've felt, at that moment it was clear to me
        that this is what i want to do. I got my degree at SAFS and i enjoy
        every day working at the gym as a Fitness Trainer, and as a Personal
        Trainer to be able to give you the same feeling of Victory I have
        felt. Nothing is more important than your health.
      </h6>
      <div class="donji">
        <h1>
          REHABILITATION
        </h1>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
<!--   <a href="/j"> <span> Pogledaj detaljnije</span>    </a>
 -->
 <!-- <div id="home">


      <h1>Page2</h1>

      <button class="btn_nav home_link">Page2</button>

  </div> -->
  </div>
</section>
</main>
   

<!--
 <div class="transition-wipe overlay"></div>
 -->
@endsection