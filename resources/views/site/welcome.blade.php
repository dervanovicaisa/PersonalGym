@extends('layouts.main')

@section('content')
<main id="swup">
  <nav>

    <ul>

      <li><a href="#section1"> <svg height="40" width="40" class="navb">

            <path d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 " />
          </svg></a></li>
      <li><a href="#section2"> <svg height="40" width="40" class="navb">
            <path d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 " />
          </svg></a></li>
      <li><a href="#section3"> <svg height="40" width="40" class="navb">

            <path d="
                 M 10, 10
                 m -8, 0
                 a 8,8 0 1,0 16,0
                 a 8,8 0 1,0 -16,0
                 " />
          </svg></a></li>
    </ul>
  </nav>

  <section class="hero-image" id="section1">
    <div class="hero-overlay"></div>
    <img class="logoImage" src="/images/logos/Logo-DR.svg" />
    <div class="playSong1 red">
      <div class="swap">
        <div id="waveform">

          <div id="audio-spectrum"></div>
          <!-- Create action buttons -->

        </div>

        <div class="playSong2" id="textSong">
          <svg width="104" height="104" id='pause'>
            <circle id="circle" cx="51" cy="51" r="50" stroke-dasharray="314" stroke-dashoffset="0" style="stroke-width:2px;stroke:white;" class="play" />
            <line id='line1' x1="38" y1="30" x2="38" y2="70" style="stroke-width:4px;stroke:#60BFFF;stroke-linecap: round;" />
            <path id='line2' d="M 38 30 L 70 50 L 38 70" rx="10" ry="10" style="stroke-width:4px;stroke:#60BFFF;fill:#60BFFF;stroke-linejoin: round;stroke-linecap: round;">
              <animate attributeName="d" dur="300ms" from="M 66 30 L 66 50 L 66 70" to="M 38 30 L 70 50 L 38 70" begin="indefinite" fill="freeze" id="from_pause_to_play" />
            </path>
            <animate xlink:href="#line2" attributeName="d" dur="300ms" from="M 38 30 L 70 50 L 38 70" to="M 66 30 L 66 50 L 66 70" fill="freeze" id="from_play_to_pause" begin="indefinite" />
            <animate attributeName="d" dur="300ms" from="M 66 30 L 66 50 L 66 70" to="M 38 30 L 70 50 L 38 70" begin="indefinite" fill="freeze" id="from_pause_to_play" />
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
    <div class="row w-50 float-left intro">
      <div class="introt">
        <h1>INTRO</h1>
        <h5>About/ The Trainer/ The Coach</h5>

      </div>
    </div>
    <div class="col-7 textAbout">
      <h6>
        My love towards sports began at a very early age, in a form of the most popular
        one- football. As time went by, my ambition was rising. I strived to get stronger,
        faster, better. So I trained hard, pushing my limits day after day. In order to achieve
        better results, I started learning and studying about fitness, sports science, nutrition
        physical therapy. After a while, I decided to put my knowledge into use. As a football
        player there was a constant need to become faster, so athletic training became a
        necessity- I trained like an Olympic sprinter. Little did I know how things were about
        to change.



      </h6><br>
      <h6>
        Full of motivation and will I adopted a morning routine of training on a
        snowy Olympic track. However, lacking experience, my warm ups weren’t done properly,
        which led to a disaster. As I was doing my rounds of sprints on the track, in one
        split second I slipped and turned my knee on the inside. That’s all it took- a second,
        and my life was about to be changed forever.</h6><br>
      <h6>
        At first I was told I won’t be able to
        play football for three months, which prolonged to six. Desperate and in need of
        physical activity, I decided to take the matter into my own hands. This is where
        my fitness journey starts. I wanted to understand my injury and do what I can to
        make it better. Hungry for knowledge, I devoted myself to physioneurobiology ,
        biomechanics and physical therapy. I started studying at SAFS (Swiss Academy of
        Fitness and Sports) and working in a gym to become a professional trainer. As
        I gained more and more knowledge I started applying those techniques into my
        training and rehabilitation. They have proven to be more than beneficial. I
        overcame my injury and became stronger than ever. Indescribable feeling of
        victory opened my eyes- that’s it! That’s what I want to do and devote myself
        to!
      </h6>
      <h6><br>
        I graduated at SAFS and fulfilled my ambition at becoming fitness and
        personal trainer. Every day spent working at the gym is a blessing, because
        it gives me the ability to vivify in you the same victorious feeling I have
        felt, while simultaneously improving the most important thing in life- your
        health.
      </h6>
    </div>

    <div class="scrollDiv2">
      <a href="#section3" class="">

        <svg xmlns="http://www.w3.org/2000/svg" width="82" height="59.5" viewBox="0 0 82 59.5">
          <defs>
            <style>
              .a {
                fill: none;
                stroke: #fff;
                stroke-linecap: round;
                stroke-width: 2px;
              }

              .b {
                fill: #fff;
                font-size: 16px;
                font-family: Raleway-Medium, Raleway;
                font-weight: 500;
                letter-spacing: 0.15em;
              }
            </style>
          </defs>
          <g transform="translate(0 1)">
            <line class="a" y2="28.786" transform="translate(40.5)" />
            <line class="a" x1="4.493" y1="10.199" transform="translate(36.007 18.587)" />
            <line class="a" y1="10.199" x2="4.493" transform="translate(40.5 18.587)" /><text class="b" transform="translate(41 54.5)">
              <tspan x="0" y="0">See next</tspan>
            </text></g>
        </svg>
      </a>

    </div>




  </section>
  <section class="row red3 justify-content-center" id="section3">
    <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
    <div class="toggleText">
      <div class="training">    <h1 > TRAINING</h1>
</div>

      <h1 class="rehab"> REHAB</h1>
      <h5> Closer to the edge</h5>
    </div>
    <div class="row slide3">
      <div class="col-7 leftText">
        <h7>
          As a personal trainer (Athletic, Strength & Conditioning Coach) I'm giving your body,
          mind and soul a unique individual experience that will help you find your purpose,
          set your goals and achieve them. What doesn't kill you makes you Stronger. I will
          push you to the limits and beyond and challenge you to give your very best in everything
          you do, every day. Pain is weakness leaving your body. Weakness leaving your body makes
          you a healthier and stronger individual. Putting your health in the first place in everything
          we do is going to allow you to build a strong foundation.
        </h7> </br> </br>
        <h7>Remember - nothing beats a strong body,
          mind and soul. We all seek to be happy and satisfied with ourselves. Your guarantee will be your
          commitment, your biggest motivation will be the results you see in the mirror. You will fail, but
          you will learn from your mistakes. Not you, not me or anybody is gonna hit as hard as life. But it
          ain't about how hard you can hit, it's about how hard you can get hit and keep moving forward, how
          much you can take and keep moving forward. That's how winning is done. You and me are gonna get you
          those extra few reps, that extra mile, that extra pound/kg to get You CLOSER TO THE EDGE and achieve
          everything you want.
        </h7></br></br>
        <h7>With your power of will and heart everything is possible. My name is Dušan Radulović.
          Let's get started with your training. heart everything is possible. My name is Dušan Radulović. Let's get
          started with your training (Neka oznaka click here ili tamo neš vizuelno na klik idemo na sledeći dio trening
          pa sve na istu foru na klik iz treninga u ishranu i na kraju u recovery jer
          sve to ide zajedno i nmže da funkcioniše jedno bez drugog optimalno)
        </h7>

      </div>
      <div class="col-7 rightText">
        <h7>
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

      </div>
    </div>
    <div class="scrollDiv2">
      <a href="#section1" class="">

        <svg xmlns="http://www.w3.org/2000/svg" width="82" height="59.5" viewBox="0 0 82 59.5">
          <defs>
            <style>
              .a {
                fill: none;
                stroke: #fff;
                stroke-linecap: round;
                stroke-width: 2px;
              }

              .b {
                fill: #fff;
                font-size: 16px;
                font-family: Raleway-Medium, Raleway;
                font-weight: 500;
                letter-spacing: 0.15em;
              }
            </style>
          </defs>
          <g transform="translate(0 1)">
            <line class="a" y2="28.786" transform="translate(40.5)" />
            <line class="a" x1="4.493" y1="10.199" transform="translate(36.007 18.587)" />
            <line class="a" y1="10.199" x2="4.493" transform="translate(40.5 18.587)" /><text class="b" transform="translate(41 54.5)">
              <tspan x="0" y="0">See next</tspan>
            </text></g>
        </svg>
      </a>

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