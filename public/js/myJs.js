
const swup = new Swup(); // only this line when included with script tag



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

// Store the 3 buttons in some object
var buttons = {
    play: document.getElementById("btn-play"),
    pause: document.getElementById("btn-pause"),
    stop: document.getElementById("btn-stop")
};

// Create an instance of wave surfer with its configuration
var Spectrum = WaveSurfer.create({
    container: "#audio-spectrum",
    progressColor: "#03a9f4",
    fillParent: true
});

// Handle Play button
buttons.play.addEventListener(
    "click",
    function() {
        document.getElementById("waveform").style.visibility = "visible";
        document.getElementById("textSong").style.display = "none";

        Spectrum.play();
        // Enable/Disable respectively buttons
        buttons.stop.disabled = false;
        buttons.pause.disabled = false;
        buttons.play.disabled = true;
    },
    false
);

// Handle Stop button
buttons.stop.addEventListener(
    "click",
    function() {
        document.getElementById("textSong").style.display = "inline-block";
        document.getElementById("waveform").style.visibility = "hidden";

        Spectrum.stop();

        // Enable/Disable respectively buttons
        buttons.pause.disabled = true;
        buttons.play.disabled = false;
        buttons.stop.disabled = true;
    },
    false
);
// Add a listener to enable the play button once it's ready
Spectrum.on("ready", function() {
    buttons.play.disabled = false;
});
// Handle Pause button
buttons.pause.addEventListener(
    "click",
    function() {
        Spectrum.pause();
        // Enable/Disable respectively buttons
        buttons.pause.disabled = true;
        buttons.play.disabled = false;
    },
    false
);

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

// Load the audio file from your domain !
Spectrum.load("/images/video/elderbrook-numb.mp3");
