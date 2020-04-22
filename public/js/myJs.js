/* const swup = new Swup(); // only this line when included with script tag
 */
AOS.init();
var i = 0;
var images = [];
var time = 150;

// Image List
images[0] = "/images/login/1.jpg";
images[1] = "/images/login/2.jpg";
images[2] = "/images/login/3.jpg";
images[3] = "/images/login/4.jpg";
images[4] = "/images/login/5.jpg";
images[5] = "/images/login/6.jpg";
images[6] = "/images/login/7.jpg";
images[7] = "/images/login/8.jpg";
images[8] = "/images/login/9.jpg";
images[9] = "/images/login/10.jpg";
images[10] = "/images/login/11.jpg";
images[11] = "/images/login/1.jpg";

// Change Image
function changeImg() {
    console.log(i);
    document.slide.src = images[i];

    // Check If Index Is Under Max
    if (i < images.length - 1) {
        // Add 1 to Index
        i++;
    } else {
        // Reset Back To O
        /*         location.href = "https://www.google.co.in";
         */
    }

    // Run function every x seconds
    setTimeout("changeImg()", time);
} /////////////////////////

///////////////////////////////PLAY SONG


// Create an instance of wave surfer with its configuration
var Spectrum = WaveSurfer.create({
  container: "#audio-spectrum",
  progressColor: 'hsla(200, 100%, 30%, 0.5)',
  cursorColor: '#fff',
  fillParent: true,
  barWidth: 3
});
$(document).ready(function() {
    var state = "paused";
    $('#pause').on('click', function() {
        if(state == 'paused') {
            state = "playing";
            console.log("pustilo se");
            Spectrum.play();
            document.getElementById("waveform").style.opacity = "1";
            document.getElementById("play").style.opacity = "0";
            $("#circle").attr("class", "");
            $("#from_play_to_pause")[0].beginElement();
        } else {
  
            state = "paused";
            console.log("zaustavilo se");
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

// If you want a responsive mode (so when the user resizes the window)
// the spectrum will be still playable
/* window.addEventListener(
    "resize",
    function() {
        var currentProgress =
            Spectrum.getCurrentTime() / Spectrum.getDuration();
        // Reset graph
        Spectrum.empty();
        Spectrum.drawBuffer();
        // Set original position
        Spectrum.seekTo(currentProgress);
        // Enable/Disable respectively buttons
        buttons.pause.disabled = true;
        buttons.play.disabled = false;
        buttons.stop.disabled = false;
    },
    false
); */


//smooth scroll
$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on("click", function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800,
                function() {
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                }
            );
        } // End if
    });
});

