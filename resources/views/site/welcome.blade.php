@extends('layouts.main')

@section('content')

  <main id="swup" class="transition-fade">
    <div class="bckgImage">
      <div id="overlay" onclick="changeImg()"></div>
      <img name="slide" class="background" src="/images/login/1.jpg" />
   <a href="/home" style="z-index: 2;
    width: 100px;
    position: absolute;
    color: white;
    bottom: 50%;
    right: 30%;"> KUCA </a>
      <img class="logoImage" src="/images/logos/Logo-white.svg" />
        <div class="playSong1 red">
            <div id="waveform">
              <div id="audio-spectrum"></div>
              <!-- Create action buttons -->
              <input type="button" id="btn-stop" value="Stop" disabled="disabled" />
              <input type="button" id="btn-pause" value="Pause" disabled="disabled" style="display:none;"/>

          </div>

          <div class="playSong2" id = "textSong">
            <img class="runningLogo" id="btn-play" src="/images/logos/Play-button-wh.svg" />
            <h4 id = "play"> Play my spiritual song</h4>
          </div>
        </div>


          <div class="txtInitials1 red">
            <img class="runningLogo" src="/images/logos/Profile-icon-sport.svg" />
            <div class="text">
              <h3> Dusan Radulovic
              </h3>
              <h4> PERSONAL TRAINER
              </h4>
          </div>
        </div>


</main>
<div class = "transition-wipe overlay"></div>

@endsection 
