AOS.init();
$(document).ready(function() {
    new fullpage("#fullpage", {});
});

let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.
var pathD = "M11.5,0,23,19H0Z";
var loptica = "    M 4.5, 4.5 m -8, 0 a 4.5,4.5 0 1,0 9,0 a 4.5,4.5 0 1,0 -9,0";

window.addEventListener("scroll", event => {
    let fromTop = window.scrollY;
    if ($(".navA").not(".current")) {
        $(".navA .navb path").attr("d", loptica);
    }

    mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
            section.offsetTop - 20 <= fromTop &&
            section.offsetTop + section.offsetHeight - 20 > fromTop
        ) {
            link.classList.add("current");
            $(".current .navb path").attr("d", pathD);
        } else {
            link.classList.remove("current");
        }
    });
});

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

$("#train").click(function() {
    $(".leftText").css({ opacity: "1" });
    $(".rightText").css({ opacity: "0" });
    $("#train").css({ "font-size": "80px", color: "white" });
    $("#reha").css({ "font-size": "60px", color: "#B2B2B2" });
});
$("#reha").click(function() {
    $(".leftText").css({ opacity: "0" });
    $(".rightText").css({ opacity: "1" });
    $("#train").css({ "font-size": "60px", color: "#B2B2B2" });
    $("#reha").css({ "font-size": "80px", color: "white" });
});

//Set each section's height equals to the window height
$("section").height($(window).height());
/*set the class 'active' to the first element 
     this will serve as our indicator*/
$("section")
    .first()
    .addClass("active");

///////////////////
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
