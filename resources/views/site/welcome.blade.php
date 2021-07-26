@extends('layouts.main')
@section('content')

<link href='/css/onepage-scroll.css' rel='stylesheet' type='text/css'>

@include('layouts.side_buttons')
@include('components.languages')

@if($application_message)
    @include('components.messages')
@endif
<div class="main" id="fullpage">
    <section class="hero-image section" id="section-1">
      
        <div class="hero-overlay"></div>
        <div class="playSong1 red">
            <div class="swap">
                <div id="waveform">
                    <div id="audio-spectrum"></div>
                </div>
                <div class="playSong2" id="textSong">
                    <svg width="104" height="104" id='pause' viewBox="0 0 100 100" class="desktopS">
                        <circle id="circle" cx="51" cy="51" r="43" stroke-dasharray="314" stroke-dashoffset="0"
                            class="play" />
                        <line id='line1' x1="38" y1="30" x2="38" y2="70" />
                        <path id='line2' d="M 38 30 L 70 50 L 38 70" rx="10" ry="10">
                            <animate attributeName="d" dur="300ms" from="M 66 30 L 66 50 L 66 70"
                                to="M 38 30 L 70 50 L 38 70" begin="indefinite" fill="freeze" id="from_pause_to_play" />
                        </path>
                        <animate xlink:href="#line2" attributeName="d" dur="300ms" from="M 38 30 L 70 50 L 38 70"
                            to="M 66 30 L 66 50 L 66 70" fill="freeze" id="from_play_to_pause" begin="indefinite" />
                        <animate attributeName="d" dur="300ms" from="M 66 30 L 66 50 L 66 70"
                            to="M 38 30 L 70 50 L 38 70" begin="indefinite" fill="freeze" id="from_pause_to_play" />
                    </svg>
                
                    <h5 class="wrapper" id="play">Play my spiritual song</h5>

                </div>
            </div>
        </div>
        <div class="txtInitials1 red">
        <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
          <img class="runningLogo mobile" src="/images/logos/logodrDark.svg" />

          <div class="text">
                    <h3>Dušan </h3><h3>Radulović</h3>
                    <h6 class="mobile">PERSONAL TRAINER</h6>
                </div>
        </div>
        <div class="scrollDiv desktop">
            <ul class="onepage-pagination buttonUl">
                <li>
                    <a data-index="2" href="{{app()->getLocale()}}/#2" class="mouse smoothscroll">
                        <span class="mouse-icon">
                            <span class="mouse-wheel"></span>
                        </span>
                        <h6>Scroll down</h6>

                    </a>
                </li>
            </ul>


        </div>
        <div class="scrollDiv mobile">
          <a href="#intro" class="mouse smoothscroll mobileSmooth">
              <span class="mouse-icon">
                  <span class="mouse-wheel"></span>
              </span>
              <h5>Scroll down</h5>
          </a>
      </div>
    </section>

    <section class="row m-0  red2  section" id="intro">
    <div id="cf1" class="desktop">
            <img class="bottom" src="/images/all/intro1.jpg" />
            <img class="top" src="/images/all/intro2.jpg" />
        </div>
        <div class="red2-overlay desktop" ></div>
        <div class="content">
            <div class="row justify-content-center logo ">
                <img class="imgL mobile"src="/images/logos/logodrDark.svg" alt="" />
                <div class="txtInitials1 not  red">
                    <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
                        <div class="text">
                            <h4>Dušan </h4><h4>Radulović</h4>
                        </div>
                </div>
            </div>
            <div class="row intro start">
                    <div class="col-xl-4 col-sm-12   col-12 pL0">
                        <div class="introt">
                            <h1>INTRO</h1>
                            <h5>About the trainer</h5>
                        </div>
                    </div>
            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile">  
                    My love towards sports began at a very early age, in a form of the most popular
                    one- football. As time went by, my ambition was rising. I strived to get stronger,
                    faster, better.</p>
                    <div class="desktop">
                <p>
                    My love towards sports began at a very early age, in a form of the most popular
                    one- football. As time went by, my ambition was rising. I strived to get stronger,
                    faster, better. So I trained hard, pushing my limits day after day. In order to achieve
                    better results, I started learning and studying about fitness, sports science, nutrition
                    physical therapy. After a while, I decided to put my knowledge into use. As a football
                    player there was a constant need to become faster, so athletic training became a
                    necessity- I trained like an Olympic sprinter. Little did I know how things were about
                    to change. 
                 </p>
                     <p>
                    Full of motivation and will I adopted a morning routine of training on a
                    snowy Olympic track. However, lacking experience, my warm ups weren’t done properly,
                    which led to a disaster. As I was doing my rounds of sprints on the track, in one
                    split second I slipped and turned my knee on the inside. That’s all it took- a second,
                    and my life was about to be changed forever.</p>
                <p>
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
                </p>
                <p>
                    I graduated at SAFS and fulfilled my ambition at becoming a
                    personal trainer. Every day spent training working with people is a blessing, because
                    it gives me the ability to vivify in you the same victorious feeling I have
                    felt, while simultaneously improving the most important thing in life- your
                    health.
                </p> 
                <p>With your power of will and heart everything is possible. My name is Dušan Radulović.
                       Let's get started with your training.
                        </p><br><br>
                       <!-- <p > Now that we have your training, let's talk about training. </p>    -->         
				</div>
                <h6 class="readMore mobile">
                    <button type="button" class="btn " data-toggle="modal" data-target="#modal_intro">
                        READ MORE
                      </button>
             
                </h6>
            </div>

            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="3" href="{{app()->getLocale()}}/#3" class="">
                            @include('layouts.see_next')


                        </a>
                    </li>
                </ul>
            </div>
            <div class="scrollDiv2 mobile">
                      <a  href="#personal-trainer" class="mobileSmooth">
                          @include('layouts.see_next')
                      </a>
          
          </div>
            </div>

        </div>
    </section>
    <section class="row m-0 red3 justify-content-center section" id="personal-trainer">
        <div class="red3-overlay"></div>
        <div id="cf" class="desktop">
            <img class="bottom" src="/images/all/t1.jpg" />
            <img class="top" src="/images/all/r1.jpg" />
            <img class="bottom" src="/images/all/t2.jpg" />
            <img class="top" src="/images/all/r2.jpg" />

        </div>
        <div class="content">
        <div class="row justify-content-center logo ">
        <img class="imgL mobile" src="/images/logos/Logo-DR.svg" alt="" />    
                    <div class="txtInitials1 not  red">
                    <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
                        <div class="text">
                            <h4>Dušan </h4><h4>Radulović</h4>
                        </div>
                </div>
            </div>
            <div class="row ">
            <div class="col-xl-4 col-sm-12    col-12">
                    <div class="toggleText">
                        <div>
                            <div class="training">
                                <h1 id="train"> TRAINING</h1>
                            </div>

                            <h1 id="reha" class="rehab"> REHAB</h1>
                        </div>
                        <h5> Closer to the edge</h5>
                    </div>
              </div>
              <div class="col-xl-8 col-sm-12  col-12 my-2 parent">
                    <div class=" leftText">
                    
                        <p class="mobile"> As a personal trainer (Athletic, Strength & Conditioning Coach) I'm giving your body,
                            mind and soul a unique individual experience that will help you find your purpose,
                            set your goals and achieve them. </p>
                            <div class="desktop">
                                <p>
                            As a personal trainer (Athletic, Strength & Conditioning Coach) I'm giving your body,
                            mind and soul a unique individual experience that will help you find your purpose,
                            set your goals and achieve them.  What doesn't kill you makes you Stronger. I will
                            push you to the limits and beyond and challenge you to give your very best in everything
                            you do, every day. Pain is weakness leaving your body. Weakness leaving your body makes
                            you a healthier and stronger individual. Putting your health in the first place in everything
                            we do is going to allow you to build a strong foundation.
                        </p><br>
                   			 <p><b>Remember - nothing beats a strong body ,
                            mind and soul.</b> We all seek to be happy and satisfied with ourselves. Your guarantee will be your
                            commitment, your biggest motivation will be the results you see in the mirror. You will fail,
                            but
                            you will learn from your mistakes. Not you, not me or anybody is gonna hit as hard as life. But
                            it
                            ain't about how hard you can hit, it's about how hard you can get hit and keep moving forward,
                            how
                            much you can take and keep moving forward. That's how winning is done. You and me are gonna get
                            you
                            those extra few reps, that extra mile, that extra pound/kg to get You <b>CLOSER TO THE EDGE</b>
                            and achieve
                            everything you want.
                        </p>
                        <p > It is crucial to fuel your body with the right food, so let's talk about your nutririon first.
 </p>            

                    </div>
                        <h6 class="readMore mobile">
                            <button type="button" class="btn white" data-toggle="modal" data-target="#modal_rehab">
                                READ MORE
                            </button>                      </h6>
                    </div>
                    <div class=" rightText">

                        <p class="mobile">   No matter what kind of injury you are suffering from, with the right balance of physical
                            therapy, nutrition and recovery you are going to
                            overcome it - even gonna be stronger than ever!  </p>
                            <div class="desktop">
                        <p>
                            No matter what kind of injury you are suffering from, with the right balance of physical
                            therapy, nutrition and recovery you are going to
                            overcome it - even gonna be stronger than ever! Injury Rehabilitation is very important to me.
                            An injury changed my life. From my own experience,
                            I know what you are going through.
                        </p><br><br>
                        <p> I realised I want to help others in their difficult times, guide and support them to come out
                            as a WINNER.
                            I find great joy in helping you overcome an injury and achieve your goals, coming out
                            indestructible!</p><br><br>
                        <p>This is Victory – This is Sparta!</p>
                        </p> 
                    </div>
                        <h6 class="readMore mobile">
                            <button type="button" class="btn white" data-toggle="modal" data-target="#modal_training">
                                READ MORE
                            </button>                    </h6>
                    </div>
                </div>
            </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="4" href="{{app()->getLocale()}}/#4" class="">
                            @include('layouts.see_next')
                        </a>
                    </li>
                </ul>
            </div>
            <div class="scrollDiv2 mobile">
              <a  href="#nutritio-dr" class="mobileSmooth">
                  @include('layouts.see_next')
              </a>
  
  </div>

        </div>
    </section>
    <section class="row m-0  red4 hero-image section" id="nutritio-dr">
        <div class="red4-overlay"></div>
        <div class="content">
            <div class="row justify-content-center logo ">
                   <img class="imgL mobile" src="/images/logos/Logo-DR.svg" alt="" />          
                         <div class="txtInitials1 not  red">
                    <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
                        <div class="text">
                            <h4>Dušan </h4><h4>Radulović</h4>
                        </div>
                </div>

             </div>
             <div class="row">
             <div class="col-xl-4 col-sm-12  pL0  col-12">
                <div class="  float-left  mt other start">
                    <div class="introt4">
                        <h1>NUTRITION</h1>
                        <h5>You are what you eat!</h5>

                    </div>
                </div>
             </div>
            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile">  Your nutrition is the most important aspect of your health. Remember, you are what you eat. Your
                    results are going to depend on your nutrition.
                    You want to lose weight? You want to burn that extra body fat and get lean? You want to gain lean
                    muscle? You never took eating and foods seriously?</p>
              <div class="desktop">
                  <p>
                    Your nutrition is the most important aspect of your health. Remember, you are what you eat. Your
                    results are going to depend on your nutrition.
                    You want to lose weight? You want to burn that extra body fat and get lean? You want to gain lean
                    muscle? You never took eating and foods seriously?

                </p><br>
                 <p>
                    I have good news for you! You don't need a diet to achieve
                    your goals because that just won't do it if you are looking for long-term results.
                    This is reality. There is no easy and fast way for you to achieve your goals and stay healthy at the
                    same time. Being healthy should be your number one priority - nothing is more important than your
                    health.
                    Once you understand what a healthy nutrition lifestyle is, combined with the right training and
                    recovery, we are going to create an individual meal plan for you with the foods
                    you actually like so you can achieve your long-term goals and be healthy!</p><br>
                <p>
                    There is only one diet and meal plan that is right for you and that's the one you can stick to for a
                    lifetime!
                    Now that we got your training and nutrition in check let's skip to the last, but not the least part
                    of your healthy lifestyle. It's time for Recovery!
                </p> 
            </div>
                <h6 class="readMore mobile">
                    <button type="button" class="btn white" data-toggle="modal" data-target="#modal_nutrition">
                        READ MORE
                      </button>                </h6>
            </div>
          </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="5" href="{{app()->getLocale()}}/#5" class="">

                            @include('layouts.see_next')

                        </a>
                    </li>
                </ul>

            </div>
            <div class="scrollDiv2 mobile">
              <a  href="#recovery-dr" class="mobileSmooth">
                  @include('layouts.see_next')
              </a>
  
  </div>
        </div>



    </section>
    <section class="row m-0  red5 hero-image section" id="recovery-dr">
        <div class="red5-overlay"></div>
        <div id="cf" class="desktop">
            <img class="bottom" src="/images/all/slika6.jpg" />
            <img class="top" src="/images/all/slika62.jpg" />
        </div>
        <div class="content">
            <div class="row justify-content-center logo ">
                <img class="imgL mobile"src="/images/logos/Logo-DR.svg" alt="" />
                <div class="txtInitials1 not  red">
                    <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
                        <div class="text">
                            <h4>Dušan </h4><h4>Radulović</h4>
                        </div>
                </div>
            </div>
            <div class="row">
            <div class="col-xl-4 col-sm-12  pL0 col-12">
                <div class=" float-left  mt other pL0 start">
                    <div class="introt4">
                        <h1>RECOVERY</h1>
                        <h5>Recovery is the best investment.</h5>

                    </div>
                </div>
               </div>

            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile">   You will learn to take and invest time in recovery, since it is a very important aspect of your
                    lifestyle.
                    Acknowledging the importance of the stress resistance, we put special effort into practicing it.</p>
                    <div class="desktop">
                          <p>
                    You will learn to take and invest time in recovery, since it is a very important aspect of your
                    lifestyle.
                     Acknowledging the importance of stress resistance, we put special effort into practicing it.  It
                    is my natural
                    expertise to show you and teach you how to relax your body, mind and soul, make you confident about
                    your actions and
                    calm you down- all in order to improve your recovery. 
                </p><br>
              <p>
                    Those three components-TRAINING, NUTRITION and RECOVERY, can't
                    go without one another if you want to achieve your personal goals in the best way possible. I know that
                    REALITY is a bit
                    different. Sometimes you have other priorities at the moment and it is very difficult to keep track
                    of all three aspects.
                    Through my experience, education and my talent I am going to find the right balance for your
                    lifestyle to achieve your goals,
                    without making it a burden.
                </p><br>
                <p>
                    Together we are going to create a unique and individual lifestyle so you can be consistent with your
                    training, nutrition and recovery, plus stay healthy on the way up and achieve your personal goals.
                </p>
            </div>
                <h6 class="readMore mobile">
                    <button  type="button" class="btn white" data-toggle="modal" data-target="#modal_recovery">
                        READ MORE
                      </button>                </h6>
            </div>
          </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="6" href="{{app()->getLocale()}}/#6" class="">

                            @include('layouts.see_next')

                        </a>
                    </li>
                </ul>
            </div>
            <div class="scrollDiv2 mobile">
              <a  href="#connect" class="mobileSmooth">
                  @include('layouts.see_next')
              </a>
        </div>
        </div>
    </section>
    <section class="row m-0  red6 hero-image section" id="connect">
        <div class="red6-overlay desktop"></div>
        <div class="content">
            <div class="row justify-content-center logo ">
                <img class="imgL mobile"src="/images/logos/logodrDark.svg" alt="" />
                <div class="txtInitials1 not  red">
                    <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
                        <div class="text">
                            <h4>Dušan </h4><h4>Radulović</h4>
                        </div>
                </div>
            </div>
            <div class="row">
            <div class=" col-xl-6 col-sm-12  col-12 intro masd ">
                <div class="introt6">
                    <h1>Let's</h1>
                    <h1>Connect!</h1>
                    <p>Let me know what you'd like to say. Let's start conversation and find the best solution for you.
                        Even if you just want to talk with somebody and share your feelings about sports, fitness or
                        training, hit me up.</p>

                </div>

                <div class="intro_button">
                    <form action="{{app()->getLocale()}}/inquiry">
                        <button class=" noBorder" type="submit">Fill out questionnaire </button>
                    </form>


                </div>
            </div>
            </div>
        </div>
    </section>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.onepage-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>
<script src="/js/wavesurfer.js"></script>
<script>
    $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: false
    });
</script>
@endsection
