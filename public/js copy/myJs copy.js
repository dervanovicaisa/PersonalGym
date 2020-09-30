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
} */
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

window.addEventListener("scroll", event => {
    let fromTop = window.scrollY;

    mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
            section.offsetTop - 20 <= fromTop &&
            section.offsetTop + section.offsetHeight - 20 > fromTop
        ) {
            link.classList.add("current");
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
                    /*                     $("a").addClass("current");
                     */
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

/* handle the mousewheel event together with 
   DOMMouseScroll to work on cross browser */
$(document).on("mousewheel DOMMouseScroll", function(e) {
    e.preventDefault(); //prevent the default mousewheel scrolling
    var active = $("section.active");
    //get the delta to determine the mousewheel scrol UP and DOWN
    var delta =
        e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0 ? 1 : -1;

    //if the delta value is negative, the user is scrolling down
    if (delta < 0) {
        //mousewheel down handler
        next = active.next();
        //check if the next section exist and animate the anchoring
        if (next.length) {
            /*setTimeout is here to prevent the scrolling animation
              to jump to the topmost or bottom when 
              the user scrolled very fast.*/
            var timer = setTimeout(function() {
                /* animate the scrollTop by passing 
                  the elements offset top value */
                $("body, html").animate(
                    {
                        scrollTop: next.offset().top
                    },
                    "slow"
                );

                // move the indicator 'active' class
                next.addClass("active")
                    .siblings()
                    .removeClass("active");

                clearTimeout(timer);
            }, 800);
        }
    } else {
        //mousewheel up handler
        /*similar logic to the mousewheel down handler 
          except that we are animate the anchoring 
          to the previous sibling element*/
        prev = active.prev();

        if (prev.length) {
            var timer = setTimeout(function() {
                $("body, html").animate(
                    {
                        scrollTop: prev.offset().top
                    },
                    "slow"
                );

                prev.addClass("active")
                    .siblings()
                    .removeClass("active");

                clearTimeout(timer);
            }, 800);
        }
    }
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
///FORMA////////////////////////////////////////////////////////////////

$("input[type=radio][name=yes_no]").change(function() {
    $("#validationCustom10").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom10").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no1]").change(function() {
    $("#validationCustom11").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no1']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom11").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no2]").change(function() {
    $("#validationCustom12").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no2']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom12").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no3]").change(function() {
    $("#validationCustom13").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no3']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom13").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no4]").change(function() {
    $("#validationCustom14").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no4']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom14").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no5]").change(function() {
    $("#validationCustom15").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no5']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom15").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no6]").change(function() {
    $("#validationCustom16").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no6']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom16").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no7]").change(function() {
    $("#validationCustom17").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no7']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom17").css({ "pointer-events": "all" });
    }
});
$("input[type=radio][name=yes_no8]").change(function() {
    $("#validationCustom18").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no8']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom18").css({ "pointer-events": "all" });
    }
});

$(".language-list > div").on("click", function() {
    $(".language-list > div").removeClass("current");
    $(this).addClass("current");
    $("input").attr("placeholder", $(this).attr("data-title"));
    currlang = $(this).attr("data-lang");
    var title = $(".naslov");
    var yourdata = $(".yourdata");
    var starter = $(".starter");
    var opis = $(".opis");

    if (currlang == "en") {
        title.html("hello");
    } else if (currlang == "de") {
        title.html("Gutten tag");
    } else if (currlang == "rus") {
        title.html("Cyka blyat");
    }
});
