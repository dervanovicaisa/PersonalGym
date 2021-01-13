$(document).ready(function () {
    setTimeout(function () {
        $("body").addClass("loaded")
    }, 200);
    $(".navA").hasClass("active") ? $(".active .navb path").attr("d", "M11.5,0,23,19H0Z") : $(".navA .navb path").attr("d", "  M 4.5, 4.5 m -8, 0 a 4.5,4.5 0 1,0 9,0 a 4.5,4.5 0 1,0 -9,0"), $("#train").click(function () {
        $(".leftText").css({
            opacity: "1"
        }), $(".rightText").css({
            opacity: "0"
        }), $("#train").css({
            "font-size": "80px",
            color: "white"
        }), $("#reha").css({
            "font-size": "60px",
            color: "#B2B2B2"
        })
    }), $("#reha").click(function () {
        $(".leftText").css({
            opacity: "0"
        }), $(".rightText").css({
            opacity: "1"
        }), $("#train").css({
            "font-size": "60px",
            color: "#B2B2B2"
        }), $("#reha").css({
            "font-size": "80px",
            color: "white"
        })
    }), $("section").height($(window).height()), $("section").first().addClass("active"), $("input[type=radio][name=yes_no]").change(function () {
        $("#validationCustom10").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no']:checked").val() && $("#validationCustom10").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no1]").change(function () {
        $("#validationCustom11").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no1']:checked").val() && $("#validationCustom11").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no2]").change(function () {
        $("#validationCustom12").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no2']:checked").val() && $("#validationCustom12").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no3]").change(function () {
        $("#validationCustom13").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no3']:checked").val() && $("#validationCustom13").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no4]").change(function () {
        $("#validationCustom14").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no4']:checked").val() && $("#validationCustom14").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no5]").change(function () {
        $("#validationCustom15").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no5']:checked").val() && $("#validationCustom15").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no6]").change(function () {
        $("#validationCustom16").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no6']:checked").val() && $("#validationCustom16").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no7]").change(function () {
        $("#validationCustom17").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no7']:checked").val() && $("#validationCustom17").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no8]").change(function () {
        $("#validationCustom18").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no8']:checked").val() && $("#validationCustom18").css({
            "pointer-events": "visible"
        })
    }), $("input[type=radio][name=yes_no9]").change(function () {
        $("#validationCustom40").css({
            "pointer-events": "none"
        }), "yes" == $("input[name='yes_no9']:checked").val() && $("#validationCustom40").css({
            "pointer-events": "visible"
        })
    }), $(".language-list > div").on("click", function () {
        $(".language-list > div").removeClass("current"), $(this).addClass("current")
    }),$("#application_form input").keyup(function () {
        var t = 0;
        $("#application_form input[required]").each(function () {
            this.validity.valid && t++
        });
        var e = $("#progress"),
            n = $("#progress-message");
        0 == t && (e.attr("value", "6"), n.text("6%")), 1 == t && (e.attr("value", "12"), n.text("12%")), 2 == t && (e.attr("value", "18"), n.text("18%")), 3 == t && (e.attr("value", "24"), n.text("24%")), 4 == t && (e.attr("value", "30"), n.text("30%")), 5 == t && (e.attr("value", "36"), n.text("36%")), 6 == t && (e.attr("value", "42"), n.text("42%")), 7 == t && (e.attr("value", "48"), n.text("48%")), 8 == t && (e.attr("value", "54"), n.text("54%")), 9 == t && (e.attr("value", "60"), n.text("60%")), 10 == t && (e.attr("value", "66"), n.text("66%")), 11 == t && (e.attr("value", "72"), n.text("72%")), 12 == t && (e.attr("value", "78"), n.text("78%")), 13 == t && (e.attr("value", "84"), n.text("84%")), 14 == t && (e.attr("value", "90"), n.text("Success ! Send application !"))
    })
}), $(document).ready(function () {
    $(".mobileSmooth").on("click", function (t) {
        if ("" !== this.hash) {
            t.preventDefault();
            var e = this.hash;
            $("html, body").animate({
                scrollTop: $(e).position().top
            }, 400, function () {
                window.location.hash = e
            })
        }
    })
});
/* (function() {
    $('.form-control').keyup(function() {
        var empty = false;
        $('.form-control').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
  
        if (empty) {
            $('.sendInq').attr('disabled', 'disabled');
        } else {
            $('.sendInq').removeAttr('disabled');
        }
    });
  }); */

/* const hero1 = [
    "/images/all/slika6.png",
    "/images/all/slika7.png"
  ]
  const node = document.getElementById("section-1");


  const cycleImages = (images, container, step) => {
      images.forEach((image, index) => (
        setTimeout(() => {
          container.style.backgroundImage = `url(${image})`  
      }, step * (index + 1))
    ))
    setTimeout(() => cycleImages(images, container, step), step * images.length)
  }
  
  cycleImages(hero1, node, 6000) */
