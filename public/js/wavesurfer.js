// Create an instance of wave surfer with its configuration
var Spectrum = WaveSurfer.create({
    container: "#audio-spectrum",
    progressColor: "hsla(200, 100%, 30%, 0.5)",
    cursorColor: "#9aacc1",
    fillParent: true,
    waveColor: "#ffff",
    barWidth: 3,
    barHeight: 1
});
$(document).ready(function() {
    var state = "paused";
    $("#pause").on("click", function() {
        if (state == "paused") {
            state = "playing";
            Spectrum.play();
            document.getElementById("waveform").style.opacity = "1";
            document.getElementById("play").style.opacity = "0";
            $("#circle").attr("class", "");
            $("#from_play_to_pause")[0].beginElement();
        } else {
            state = "paused";
            Spectrum.stop();
            document.getElementById("play").style.opacity = "1";
            document.getElementById("waveform").style.opacity = "0";

            $("#circle").attr("class", "play");
            $("#from_pause_to_play")[0].beginElement();
        }
    });
});
// Load the audio file from your domain !
Spectrum.load("/images/video/elderbrook-numb.mp3");
