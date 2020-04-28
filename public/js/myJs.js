
AOS.init(); 

///////////////////////// ///////////////////////////////PLAY SONG //smooth scroll
/* var i = 0;
var images = [];
var time = 150; */

// Image List
/* images[0] = "/images/login/1.jpg";
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
images[11] = "/images/login/1.jpg"; */

// Change Image
/* function changeImg() {
    console.log(i);
    document.slide.src = images[i];

    if (i < images.length - 1) {
        i++;
    } else {
                 location.href = "https://www.google.co.in";
         
    }

    setTimeout("changeImg()", time);
} */ $(
    document
).ready(function() {
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

/*PRELAZ NA 2 STRANU
 $(".btn_nav").click(function() {
    // animate content
    $("body").addClass("animate_content");
    $(".swup")
        .fadeOut(100)
        .delay(2800)
        .fadeIn();
});


// on click show page after 1500ms
$(".home_link").click(function() {
    setTimeout(function() {
        $(".home").addClass("fadeIn");
    }, 1500);

    setTimeout(function() {
        location.href = "/j";
    }, 1600);
});

$(document).ready(function() {
    console.log("ready!");
    $("jstrana").addClass("reanimate_content");
}); */
// Create an instance of wave surfer with its configuration
var Spectrum = WaveSurfer.create({
    container: "#audio-spectrum",
    progressColor: "hsla(200, 100%, 30%, 0.5)",
    cursorColor: "#fff",
    fillParent: true,
    barWidth: 3
});
$(document).ready(function() {
    var state = "paused";
    $("#pause").on("click", function() {
        if (state == "paused") {
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

/* window.onclick = (e) =>
{
  e.preventDefault();
  scrollTo(e.target.href.split('#')[1]);
}; */
let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];
window.addEventListener("scroll", event => {
    let fromTop = window.scrollY;
  
    mainNavLinks.forEach(link => {
      let section = document.querySelector(link.hash);
  
      if (
        section.offsetTop <= fromTop &&
        section.offsetTop + section.offsetHeight > fromTop
      ) {
        link.classList.add("current");
      } else {
        link.classList.remove("current");
      }
    });
  });
