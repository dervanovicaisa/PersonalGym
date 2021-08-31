@extends('layouts.main')
@section('content')

<main id="swup">
  @include('layouts.side_buttons')
  @include('components.languages')

    <div id="fullpage" class="fp">
        <div class="section">
            <section class="hero-image" id="section-1">
              <div class="hero-overlay"></div>
              <div class="playSong1 red">
                <div class="swap">
                  <div id="waveform">
                    <div id="audio-spectrum"></div>
                  </div>
                  <div class="playSong2" id="textSong">
                    <svg width="104" height="104" id='pause'>
                      <circle id="circle" cx="51" cy="51" r="50" stroke-dasharray="314" stroke-dashoffset="0" class="play" />
                      <line id='line1' x1="38" y1="30" x2="38" y2="70" />
                      <path id='line2' d="M 38 30 L 70 50 L 38 70" rx="10" ry="10">
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

                <img class="runningLogo" src="/images/logos/Logo-DR.svg" />
                <div class="text">
                  <h3>Dusan Radulovic</h3>
                  <h6>PERSONAL TRAINER</h6>
                </div>
              </div>
              <div class="scrollDiv">
                <a href="#about" class="mouse smoothscroll">
                  <span class="mouse-icon">
                    <span class="mouse-wheel"></span>
                  </span>
                  <h5>Scroll down</h5>

                </a>

              </div>
            </section>
          </div>
        <div class="section">
            <section class="row  red2 hero-image" id="about">

              <div class="red2-overlay"></div>

              <div class="content">

                <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
                <div class="row w-50 float-left intro">
                  <div class="introt">
                    <h1>INTRO</h1>
                    <h5>About/ The Trainer/ The Coach</h5>

                  </div>
                </div>
                <div class="col-6 textAbout">
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
                    I graduated at SAFS and fulfilled my ambition at becoming
                    personal trainer. Every day spent working at the gym is a blessing, because
                    it gives me the ability to vivify in you the same victorious feeling I have
                    felt, while simultaneously improving the most important thing in life- your
                    health.
                  </h6>
                </div>

                <div class="scrollDiv2">

                  <a href="#personal-trainer" class="">
                    @include('layouts.see_next')


                  </a>

                </div>

              </div>
            </section>
         </div>
        <div class="section">
            <section class="row red3 justify-content-center" id="personal-trainer">
              <div class="red3-overlay"></div>
              <div class="content">

                <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
                <div class="toggleText">
                  <div class="training">
                    <h1 id="train"> TRAINING</h1>
                  </div>

                  <h1 id="reha" class="rehab"> REHAB</h1>
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
                    <h7><b>Remember - nothing beats a strong body ,
                      mind and soul</b>. We all seek to be happy and satisfied with ourselves. Your guarantee will be your
                      commitment, your biggest motivation will be the results you see in the mirror. You will fail, but
                      you will learn from your mistakes. Not you, not me or anybody is gonna hit as hard as life. But it
                      ain't about how hard you can hit, it's about how hard you can get hit and keep moving forward, how
                      much you can take and keep moving forward. That's how winning is done. You and me are gonna get you
                      those extra few reps, that extra mile, that extra pound/kg to get You <b>CLOSER TO THE EDGE</b> and achieve
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
                      No matter what kind of injury you are suffering from, with the right balance of physical therapy, nutrition and recovery you are going to
                      overcome it - even gonna be stronger than ever! Injury Rehabilitation is very important to me. An injury changed my life. From my own experience,
                      I know what you are going through.
                    </h7><br><br>
                    <h7> I realised I want to help others in their difficult times, guide and support them to come out as WINNER.
                      I find great joy in helping you overcome an injury and achieve your goals, coming out indestructible!</h7><br><br>
                    <h7>This is Victory – This is Sparta!</h7>
                    </h7>

                  </div>
                </div>
                      <div class="scrollDiv2">
                              <a href="#nutritio-dr" class="">
                                @include('layouts.see_next')
                              </a>

                      </div>


              </div>
            </section>
         </div>
        <div class="section">
            <section class="row  red4 hero-image" id="nutritio-dr">
              <div class="red4-overlay"></div>
              <div class="content">



                <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
                <div class="row w-50 float-left intro">
                  <div class="introt4">
                    <h1>NUTR</h1>
                    <h1 class="h14"> ITION</h1>
                    <h5>Neki podnaslov vezano za hranu.</h5>

                  </div>
                </div>
                <div class="col-7 textAbout">
                  <h6>
                    Your nutrition is the most important aspect of your health. Remember, you are what you eat. Your results are going to depend on your nutrition.
                    You want to lose weight? You want to burn that extra body fat and get lean? You want to gain lean muscle? You never took eating and foods seriously?

                  </h6><br>
                  <h6>
                    I have good news for you! You don't need a diet (keto, paleo, intermittent fasting...) to achieve your goals because that just won't do it if you are looking for long-term results.
                    This is reality. There is no easy and fast way for you to achieve your goals and stay healthy at the same time. Being healthy should be your number one priority - nothing is more important than your health.
                    Once you understand what a healthy nutrition lifestyle is, combined with the right training and recovery, we are going to create an individual meal plan for you with the foods
                    you actually like so you can achieve your long-term goals and be healthy!</h6><br>
                  <h6>
                    There is only one diet and meal plan that is right for you and that's the one you can stick to for a lifetime!
                    Now that we got your training and nutrition in check let's skip to the last, but not the least part of your healthy lifestyle. It's time for Recovery! (vizuelni click i idemo na zadnji dio Recovery)
                  </h6>

                </div>

                <div class="scrollDiv2">

                  <a href="#recovery-dr" class="">

                    @include('layouts.see_next')

                  </a>

                </div>
              </div>



            </section>
         </div>
        <div class="section">
            <section class="row  red5 hero-image" id="recovery-dr">
              <div class="red5-overlay"></div>
              <div class="content">
                <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
                <div class="row w-50 float-left intro">
                  <div class="introt4">
                    <h1>RECO</h1>
                    <h1 class="h14"> VERY</h1>
                    <h5>Neki podnaslov vezano za hranu.</h5>

                  </div>
                </div>
                <div class="col-6 textAbout">
                  <h6>
                    You will learn to take and invest time in recovery, since it is a very important aspect of your lifestyle.
                    Acknowledging the importance of the stress resistance, we put special effort into practicing it. It is my natural
                    expertise to show you and teach you how to relax your body, mind and soul, make you confident about your actions and
                    calm you down- all in order to improve your recovery.
                  </h6><br>
                  <h6>
                    Those three components-TRAINING, NUTRITION and RECOVERY, can't
                    go without one another if you want to achieve your personal goals in best way possible. I know that REALITY is a bit
                    different. Sometimes you have other priorities at the moment and it is very difficult to keep track of all three aspects.
                    Through my experience, education and my talent I am going to find the right balance for your lifestyle to achieve your goals,
                    without making it a burden.
                  </h6><br>
                  <h6>
                    Together we are going to create a unique and individual lifestyle so you can be consistent with your
                    training, nutrition and recovery, plus stay healthy on the way up and achieve your personal goals.
                  </h6>

                </div>

                <div class="scrollDiv2">

                  <a href="#connect" class="">

                    @include('layouts.see_next')

                  </a>

                </div>



              </div>
            </section>
         </div>
        <div class="section">
            <section class="row  red6 hero-image" id="connect">
              <div class="red6-overlay"></div>
              <div class="content">
                <div class="row justify-content-center logo"><img src="/images/logos/Logo-DR.svg" alt="" /></div>
                <div class="row w-35 float-left intro">
                  <div class="introt6">
                    <h1>Lets</h1>
                    <h1>Connect!</h1>
                    <h6>Let me know what you'd like to say. Let's start conversation and find the best solution for you.
                      Even if you just want to talk with somebody and share your feelings about sports, fitness or training, hit me up.</h6>

                  </div>
                  <div class="intro_button">
                    <form action="/form1/deu">
                      <button type="submit" type="submit">Fill out questionnaire </button>
                  </form>
                  
               
                  </div>
                </div>




              </div>
            </section>
      </div>
    
  </div>
  </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>
<script src="/js/wavesurfer.js"></script>


@endsection