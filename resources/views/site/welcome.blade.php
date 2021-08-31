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
                
                    <h5 class="wrapper" id="play">{{ __('text.playMySpiritualSong') }}</h5>

                </div>
            </div>
        </div>
        <div class="txtInitials1 red">
        <img class="runningLogo desktop" src="/images/logos/Logo-DR.svg" />
          <img class="runningLogo mobile" src="/images/logos/logodrDark.svg" />

          <div class="text">
                    <h3>Dušan </h3><h3>Radulović</h3>
                    <h6 class="mobile">{{ __('text.personalTrainer') }}</h6>
                </div>
        </div>
        <div class="scrollDiv desktop">
            <ul class="onepage-pagination buttonUl">
                <li>
                    <a data-index="2" href="/{{app()->getLocale()}}/#2" class="mouse smoothscroll">
                        <span class="mouse-icon">
                            <span class="mouse-wheel"></span>
                        </span>
                        <h6>{{ __('text.scrollDown') }}</h6>

                    </a>
                </li>
            </ul>


        </div>
        <div class="scrollDiv mobile">
          <a href="#intro" class="mouse smoothscroll mobileSmooth">
              <span class="mouse-icon">
                  <span class="mouse-wheel"></span>
              </span>
              <h5>{{ __('text.scrollDown') }}</h5>
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
                            <h1>{{ __('text.intro') }}</h1>
                            <h5>{{ __('text.scrollDown') }}</h5>
                        </div>
                    </div>
            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile">  
                    {{ __('text.introMobile1') }}</p>
                    <div class="desktop">
                <p>
                    {{ __('text.intro1') }}
                 </p>
                     <p>
                        {{ __('text.intro2') }}</p>
                <p>
                    {{ __('text.intro3') }}
                </p>
                <p>
                    {{ __('text.intro4') }}
                </p> 
                <p>{{ __('text.intro') }}
                        </p><br><br>
                       <!-- <p > Now that we have your training, let's talk about training. </p>    -->         
				</div>
                <h6 class="readMore mobile">
                    <button type="button" class="btn " data-toggle="modal" data-target="#modal_intro">
                        {{ __('text.readMore') }}
                      </button>
             
                </h6>
            </div>

            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="3" href="/{{app()->getLocale()}}/#3" class="">
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
                                <h1 id="train">  {{ __('text.training') }}</h1>
                            </div>

                            <h1 id="reha" class="rehab"> {{ __('text.rehab') }}</h1>
                        </div>
                        <h5> {{ __('text.trainingrehaSubtitle') }} </h5>
                    </div>
              </div>
              <div class="col-xl-8 col-sm-12  col-12 my-2 parent">
                    <div class=" leftText">
                    
                        <p class="mobile"> {{ __('text.trainingrehabMobile1') }} </p>
                            <div class="desktop">
                                <p>
                                    {{ __('text.trainingrehab1') }} 
                        </p><br>
                   			 <p><b>{{ __('text.trainingrehab2') }} 
                        </p>
                        <p >{{ __('text.trainingrehab3') }} 
 </p>            

                    </div>
                        <h6 class="readMore mobile">
                            <button type="button" class="btn white" data-toggle="modal" data-target="#modal_rehab">
                                {{ __('text.readMore') }} 
                            </button>                      </h6>
                    </div>
                    <div class=" rightText">

                        <p class="mobile">       {{ __('text.trainingrehabMobile4') }}  </p>
                            <div class="desktop">
                        <p>
                            {{ __('text.trainingreha5') }}
                        </p><br><br>
                        <p>  {{ __('text.trainingreha6') }}</p><br><br>
                        <p>{{ __('text.trainingreha7') }}</p>
                        </p> 
                    </div>
                        <h6 class="readMore mobile">
                            <button type="button" class="btn white" data-toggle="modal" data-target="#modal_training">
                                {{ __('text.readMore') }} 
                            </button>                    </h6>
                    </div>
                </div>
            </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="4" href="/{{app()->getLocale()}}/#4" class="">
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
                        <h1>   {{ __('text.nutrition') }} </h1>
                        <h5>{{ __('text.nutritionSubtitle') }} </h5>

                    </div>
                </div>
             </div>
            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile"> {{ __('text.nutrition1') }}</p>
              <div class="desktop">
                  <p>
                    {{ __('text.nutrition1') }}

                </p><br>
                 <p>
                    {{ __('text.nutrition2') }}</p><br>
                <p>
                    {{ __('text.nutrition3') }}
                </p> 
            </div>
                <h6 class="readMore mobile">
                    <button type="button" class="btn white" data-toggle="modal" data-target="#modal_nutrition">
                        {{ __('text.readMore') }}
                      </button>                </h6>
            </div>
          </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="5" href="/{{app()->getLocale()}}/#5" class="">

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
                        <h1>{{ __('text.recovery') }}</h1>
                        <h5>{{ __('text.recoverySubtitle') }}</h5>

                    </div>
                </div>
               </div>

            <div class="col-xl-8 col-sm-12  col-12 my-2 textAbout">
                <p class="mobile">   {{ __('text.recoveryMobile1') }}</p>
                    <div class="desktop">
                          <p>
                            {{ __('text.recovery1') }}
                </p><br>
              <p>
                {{ __('text.recovery2') }}

                </p><br>
                <p>
                    {{ __('text.recovery3') }}

                </p>
            </div>
                <h6 class="readMore mobile">
                    <button  type="button" class="btn white" data-toggle="modal" data-target="#modal_recovery">
                        {{ __('text.readMore') }}

                      </button>                </h6>
            </div>
          </div>
            <div class="scrollDiv2 desktop">
                <ul class="onepage-pagination buttonUl">
                    <li>
                        <a data-index="6" href="/{{app()->getLocale()}}/#6" class="">

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
                    <h1>  {{ __('text.lets') }} </h1>
                    <h1> {{ __('text.connect') }}</h1>
                    <p> {{ __('text.letsConectParagraph') }}</p>

                </div>

                <div class="intro_button">
                    <form action="{{app()->getLocale()}}/inquiry">
                        <button class=" noBorder" type="submit">{{ __('text.letsConectBtnFillOut') }} </button>
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
