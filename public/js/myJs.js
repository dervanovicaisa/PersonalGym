AOS.init();
/* //////////////////////lodaer///////////
 */
$(document).ready(function() {
    setTimeout(function() {
        $("body").addClass("loaded");
    }, 200);
});


let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

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
///FORMA////////////////////////////////////////////////////////////////

$("input[type=radio][name=yes_no]").change(function() {
    $("#validationCustom10").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom10").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no1]").change(function() {
    $("#validationCustom11").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no1']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom11").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no2]").change(function() {
    $("#validationCustom12").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no2']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom12").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no3]").change(function() {
    $("#validationCustom13").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no3']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom13").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no4]").change(function() {
    $("#validationCustom14").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no4']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom14").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no5]").change(function() {
    $("#validationCustom15").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no5']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom15").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no6]").change(function() {
    $("#validationCustom16").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no6']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom16").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no7]").change(function() {
    $("#validationCustom17").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no7']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom17").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no8]").change(function() {
    $("#validationCustom18").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no8']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom18").css({ "pointer-events": "visible" });
    }
});
$("input[type=radio][name=yes_no9]").change(function() {
    $("#validationCustom40").css({ "pointer-events": "none" });
    var radioValue = $("input[name='yes_no9']:checked").val();
    if (radioValue == "yes") {
        $("#validationCustom40").css({ "pointer-events": "visible" });
    }
});
//////////////////////////////////////////////////////////////////////////////////////////
$(".language-list > div").on("click", function() {
    $(".language-list > div").removeClass("current");
    $(this).addClass("current");
});

/* $(document).ready(function() {
    $("#next").click(function() {
        $("#section_form").toggle(
            function() {
                $("#section_form").css({ width: "0" });
                $("#section_form").css({ opacity: "0" });
                $("#section_form").css({ height: "0" });
            },
            function() {
                $("#section_2_form").css({ width: "100%" });
                $("#section_2_form").css({ opacity: "1" });
                $("#section_2_form").css({ height: "auto" });
            }
        );
    });
    $("#prev").click(function() {
        $("#section_form").toggle(
            function() {
                $("#section_form").css({ width: "100%" });
                $("#section_form").css({ opacity: "1" });
                $("#section_form").css({ height: "auto" });
            },
            function() {
                $("#section_2_form").css({ width: "0" });
                $("#section_2_form").css({ opacity: "0" });
                $("#section_2_form").css({ height: "0" });
            }
        );
    });
}); */
$(document).ready(function() {
    $("#next").click(function() {
        $("#section_form").toggle(
            function() {
                $("#section_form").css({ display: "none" });
            },
            function() {
                $("#section_2_form").css({ display: "block" });
            }
        );
    });
    $("#prev").click(function() {
        $("#section_2_form").toggle(
            function() {
                $("#section_2_form").css({ display: "none" });
            },
            function() {
                $("#section_form").css({ display: "block" });
            }
        );
    });

    $("#next1").click(function() {
        $("#section_2_form").toggle(
            function() {
                $("#section_2_form").css({ display: "none" });
            },
            function() {
                $("#section_3_form").css({ display: "block" });
            }
        );
    });
    $("#prev1").click(function() {
        $("#section_3_form").toggle(
            function() {
                $("#section_3_form").css({ display: "none" });
            },
            function() {
                $("#section_2_form").css({ display: "block" });
            }
        );
    });
});
