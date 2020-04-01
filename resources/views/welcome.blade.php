<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Personal Gym</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/myStyle.css">


</head>

<body>

  <div class="wrap">
    <div class="bckgImage">
      <div id="overlay" onclick="changeImg()"></div>
      <img name="slide" class="background" src="/images/login/1.jpg" />
      <script>


      </script>
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


      </div>

</body>
  <!-- SCript -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>

<script src="/js/myJs.js"></script>



</html>