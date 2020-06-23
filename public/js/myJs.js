AOS.init();
/* //////////////////////lodaer///////////
 */

$(document).ready(function () {
    setTimeout(function () {
        $("body").addClass("loaded");
    }, 200);

    var tro = "M11.5,0,23,19H0Z";
    var loptica = "  M 4.5, 4.5 m -8, 0 a 4.5,4.5 0 1,0 9,0 a 4.5,4.5 0 1,0 -9,0";



    if ($(".navA").hasClass("active")) {
        $(".active .navb path").attr("d", tro);
    } else {
        $(".navA .navb path").attr("d", loptica);
    }



    ////////////////////////////////////////////////////////////

    $("#train").click(function () {
        $(".leftText").css({
            opacity: "1"
        });
        $(".rightText").css({
            opacity: "0"
        });
        $("#train").css({
            "font-size": "80px",
            color: "white"
        });
        $("#reha").css({
            "font-size": "60px",
            color: "#B2B2B2"
        });
    });
    $("#reha").click(function () {
        $(".leftText").css({
            opacity: "0"
        });
        $(".rightText").css({
            opacity: "1"
        });
        $("#train").css({
            "font-size": "60px",
            color: "#B2B2B2"
        });
        $("#reha").css({
            "font-size": "80px",
            color: "white"
        });
    });

    //Set each section's height equals to the window height
    $("section").height($(window).height());
    /*set the class 'active' to the first element 
     this will serve as our indicator*/
    $("section")
        .first()
        .addClass("active");
    ///FORMA////////////////////////////////////////////////////////////////

    $("input[type=radio][name=yes_no]").change(function () {
        $("#validationCustom10").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom10").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no1]").change(function () {
        $("#validationCustom11").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no1']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom11").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no2]").change(function () {
        $("#validationCustom12").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no2']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom12").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no3]").change(function () {
        $("#validationCustom13").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no3']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom13").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no4]").change(function () {
        $("#validationCustom14").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no4']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom14").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no5]").change(function () {
        $("#validationCustom15").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no5']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom15").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no6]").change(function () {
        $("#validationCustom16").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no6']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom16").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no7]").change(function () {
        $("#validationCustom17").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no7']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom17").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no8]").change(function () {
        $("#validationCustom18").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no8']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom18").css({
                "pointer-events": "visible"
            });
        }
    });
    $("input[type=radio][name=yes_no9]").change(function () {
        $("#validationCustom40").css({
            "pointer-events": "none"
        });
        var radioValue = $("input[name='yes_no9']:checked").val();
        if (radioValue == "yes") {
            $("#validationCustom40").css({
                "pointer-events": "visible"
            });
        }
    });
    //////////////////////////////////////////////////////////////////////////////////////////
    $(".language-list > div").on("click", function () {
        $(".language-list > div").removeClass("current");
        $(this).addClass("current");
    });
    ////////////////////////////////////////////////////////////
    $("#next").click(function () {
        $("#section_form").toggle(function () {
            $("#section_2_form").css({
                display: "block"
            });
        });
    });
    $("#prev").click(function () {
        $("#section_2_form").toggle(function () {
            $("#section_form").css({
                display: "block"
            });
        });
    });

    $("#next1").click(function () {
        $("#section_2_form").toggle(function () {
            $("#section_3_form").css({
                display: "block"
            });
        });
    });
    $("#prev1").click(function () {
        $("#section_3_form").toggle(function () {
            $("#section_2_form").css({
                display: "block"
            });
        });
    });

    ///////////////////////////////////////////////////////
    $("#application_form input").keyup(function () {
        var numValid = 0;
        $("#application_form input[required]").each(function () {
            if (this.validity.valid) {
                numValid++;
            }
        });

        var progress = $("#progress"),
            progressMessage = $("#progress-message");

        if (numValid == 0) {
            progress.attr("value", "6");
            progressMessage.text("6%");
        }
        if (numValid == 1) {
            progress.attr("value", "12");
            progressMessage.text("12%");
        }
        if (numValid == 2) {
            progress.attr("value", "18");
            progressMessage.text("18%");
        }
        if (numValid == 3) {
            progress.attr("value", "24");
            progressMessage.text("24%");
        }
        if (numValid == 4) {
            progress.attr("value", "30");
            progressMessage.text("30%");
        }
        if (numValid == 5) {
            progress.attr("value", "36");
            progressMessage.text("36%");
        }
        if (numValid == 6) {
            progress.attr("value", "42");
            progressMessage.text("42%");
        }
        if (numValid == 7) {
            progress.attr("value", "48");
            progressMessage.text("48%");
        }
        if (numValid == 8) {
            progress.attr("value", "54");
            progressMessage.text("54%");
        }
        if (numValid == 9) {
            progress.attr("value", "60");
            progressMessage.text("60%");
        }
        if (numValid == 10) {
            progress.attr("value", "66");
            progressMessage.text("66%");
        }
        if (numValid == 11) {
            progress.attr("value", "72");
            progressMessage.text("72%");
        }
        if (numValid == 12) {
            progress.attr("value", "78");
            progressMessage.text("78%");
        }
        if (numValid == 13) {
            progress.attr("value", "84");
            progressMessage.text("84%");
        }
        if (numValid == 14) {
            progress.attr("value", "90");
            progressMessage.text("Success ! Send application !");
        }
    });
    ///////////////////////////////////////////////////////////////
});
