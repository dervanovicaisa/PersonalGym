$(document).ready(function () {
    $.fn.fullpage({
        navigation: true,
        navigationPosition: 'right'
    });
})

!(function(e) {
	
    var a = {
            sectionContainer: "section",
            easing: "ease",
            animationTime: 700,
            pagination: !0,
            updateURL: !1,
            keyboard: !0,
            beforeMove: null,
            afterMove: null,
            loop: !0,
		    responsiveFallback: !1,
            direction: "vertical"
        },
        n = "M11.5,0,23,19H0Z",
        t = "    M 4.5, 4.5 m -8, 0 a 4.5,4.5 0 1,0 9,0 a 4.5,4.5 0 1,0 -9,0";
    (e.fn.swipeEvents = function() {
        return this.each(function() {
            var a,
                n,
                t = e(this);
            function i(e) {
                var o = e.originalEvent.touches;
                if (o && o.length) {
                    var s = a - o[0].pageX,
                        d = n - o[0].pageY;
                    s >= 50 && t.trigger("swipeLeft"),
                        s <= -50 && t.trigger("swipeRight"),
                        d >= 50 && t.trigger("swipeUp"),
                        d <= -50 && t.trigger("swipeDown"),
                        (Math.abs(s) >= 50 || Math.abs(d) >= 50) &&
                            t.unbind("touchmove", i);
                }
            }
            t.bind("touchstart", function(e) {
                var o = e.originalEvent.touches;
                o &&
                    o.length &&
                    ((a = o[0].pageX),
                    (n = o[0].pageY),
                    t.bind("touchmove", i));
            });
        });
    }),
        (e.fn.onepage_scroll = function(i) {
            var o = e.extend({}, a, i),
                s = e(this),
                d = e(o.sectionContainer);
            function r() {
                var a = !1,
                    n = typeof o.responsiveFallback;
                "number" == n && (a = e(window).width() < o.responsiveFallback),
                    "boolean" == n && (a = o.responsiveFallback),
                    "function" == n &&
                        ((valFunction = o.responsiveFallback()),
                        (a = valFunction),
                        (typeOFv = typeof a),
                        "number" == typeOFv &&
                            (a = e(window).width() < valFunction)),
                    a
                        ? (e("body").addClass("disabled-onepage-scroll"),
                          e(document).unbind(
                              "mousewheel DOMMouseScroll MozMousePixelScroll"
                          ),
                          s.swipeEvents().unbind("swipeDown swipeUp"))
                        : (e("body").hasClass("disabled-onepage-scroll") &&
                              (e("body").removeClass("disabled-onepage-scroll"),
                              e("html, body, .wrapper").animate(
                                  { scrollTop: 0 },
                                  "fast"
                              )),
                          s
                              .swipeEvents()
                              .bind("swipeDown", function(a) {
                                  e("body").hasClass(
                                      "disabled-onepage-scroll"
                                  ) || a.preventDefault(),
                                      s.moveUp();
                              })
                              .bind("swipeUp", function(a) {
                                  e("body").hasClass(
                                      "disabled-onepage-scroll"
                                  ) || a.preventDefault(),
                                      s.moveDown();
                              }),
                          e(document).bind(
                              "mousewheel DOMMouseScroll MozMousePixelScroll",
                              function(e) {
                                  e.preventDefault(),
                                      l(
                                          e,
                                          e.originalEvent.wheelDelta ||
                                              -e.originalEvent.detail
                                      );
                              }
                          ));
            }
            function l(e, a) {
                deltaOfInterest = a;
                var n = new Date().getTime();
                n - lastAnimation < quietPeriod + o.animationTime
                    ? e.preventDefault()
                    : (deltaOfInterest < 0 ? s.moveDown() : s.moveUp(),
                      (lastAnimation = n));
            }
            if (
                ((total = d.length),
                (status = "off"),
                (topPos = 0),
                (leftPos = 0),
                (lastAnimation = 0),
                (quietPeriod = 500),
                (paginationList = ""),
                (e.fn.transformPage = function(a, n, t) {
                    if (
                        ("function" == typeof a.beforeMove && a.beforeMove(t),
                        e("html").hasClass("ie8"))
                    )
                        if ("horizontal" == a.direction) {
                            var i = (s.width() / 100) * n;
                            e(this).animate(
                                { left: i + "px" },
                                a.animationTime
                            );
                        } else {
                            i = (s.height() / 100) * n;
                            e(this).animate({ top: i + "px" }, a.animationTime);
                        }
                    else
                        e(this).css({
                            "-webkit-transform":
                                "horizontal" == a.direction
                                    ? "translate3d(" + n + "%, 0, 0)"
                                    : "translate3d(0, " + n + "%, 0)",
                            "-webkit-transition":
                                "all " + a.animationTime + "ms " + a.easing,
                            "-moz-transform":
                                "horizontal" == a.direction
                                    ? "translate3d(" + n + "%, 0, 0)"
                                    : "translate3d(0, " + n + "%, 0)",
                            "-moz-transition":
                                "all " + a.animationTime + "ms " + a.easing,
                            "-ms-transform":
                                "horizontal" == a.direction
                                    ? "translate3d(" + n + "%, 0, 0)"
                                    : "translate3d(0, " + n + "%, 0)",
                            "-ms-transition":
                                "all " + a.animationTime + "ms " + a.easing,
                            transform:
                                "horizontal" == a.direction
                                    ? "translate3d(" + n + "%, 0, 0)"
                                    : "translate3d(0, " + n + "%, 0)",
                            transition:
                                "all " + a.animationTime + "ms " + a.easing
                        });
                    e(this).one(
                        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                        function(e) {
                            "function" == typeof a.afterMove && a.afterMove(t);
                        }
                    );
                }),
                (e.fn.moveDown = function() {
                    var a = e(this);
                    if (
                        ((index = e(o.sectionContainer + ".active").data(
                            "index"
                        )),
                        (current = e(
                            o.sectionContainer + "[data-index='" + index + "']"
                        )),
                        (next = e(
                            o.sectionContainer +
                                "[data-index='" +
                                (index + 1) +
                                "']"
                        )),
                        next.length < 1)
                    ) {
                        if (1 != o.loop) return;
                        (pos = 0),
                            (next = e(o.sectionContainer + "[data-index='1']"));
                    } else pos = 100 * index * -1;
                    if (
                        ("function" == typeof o.beforeMove &&
                            o.beforeMove(next.data("index")),
                        current.removeClass("active"),
                        next.addClass("active"),
                        1 == o.pagination &&
                            (e(
                                ".onepage-pagination li a[data-index='" +
                                    index +
                                    "']"
                            ).removeClass("active"),
                            e(
                                ".onepage-pagination li a[data-index='" +
                                    next.data("index") +
                                    "']"
                            ).addClass("active")),
                        (e("body")[0].className = e(
                            "body"
                        )[0].className.replace(/\bviewing-page-\d.*?\b/g, "")),
                        e("body").addClass(
                            "viewing-page-" + next.data("index")
                        ),
                        e(".navA .navb path").attr("d", t),
                        e(".active .navb path").attr("d", n),
                        history.replaceState && 1 == o.updateURL)
                    ) {
                        var i =
                            window.location.href.substr(
                                0,
                                window.location.href.indexOf("#")
                            ) +
                            "#" +
                            (index + 1);
                        history.pushState({}, document.title, i);
                    }
                    a.transformPage(o, pos, next.data("index"));
                }),
                (e.fn.moveUp = function() {
                    var a = e(this);
                    if (
                        ((index = e(o.sectionContainer + ".active").data(
                            "index"
                        )),
                        (current = e(
                            o.sectionContainer + "[data-index='" + index + "']"
                        )),
                        (next = e(
                            o.sectionContainer +
                                "[data-index='" +
                                (index - 1) +
                                "']"
                        )),
                        next.length < 1)
                    ) {
                        if (1 != o.loop) return;
                        (pos = 100 * (total - 1) * -1),
                            (next = e(
                                o.sectionContainer +
                                    "[data-index='" +
                                    total +
                                    "']"
                            ));
                    } else pos = 100 * (next.data("index") - 1) * -1;
                    if (
                        ("function" == typeof o.beforeMove &&
                            o.beforeMove(next.data("index")),
                        current.removeClass("active"),
                        next.addClass("active"),
                        1 == o.pagination &&
                            (e(
                                ".onepage-pagination li a[data-index='" +
                                    index +
                                    "']"
                            ).removeClass("active"),
                            e(
                                ".onepage-pagination li a[data-index='" +
                                    next.data("index") +
                                    "']"
                            ).addClass("active")),
                        (e("body")[0].className = e(
                            "body"
                        )[0].className.replace(/\bviewing-page-\d.*?\b/g, "")),
                        e("body").addClass(
                            "viewing-page-" + next.data("index")
                        ),
                        e(".navA .navb path").attr("d", t),
                        e(".active .navb path").attr("d", n),
                        history.replaceState && 1 == o.updateURL)
                    ) {
                        var i =
                            window.location.href.substr(
                                0,
                                window.location.href.indexOf("#")
                            ) +
                            "#" +
                            (index - 1);
                        history.pushState({}, document.title, i);
                    }
                    a.transformPage(o, pos, next.data("index"));
                }),
                (e.fn.moveTo = function(a) {
                    if (
                        ((current = e(o.sectionContainer + ".active")),
                        (next = e(
                            o.sectionContainer + "[data-index='" + a + "']"
                        )),
                        next.length > 0)
                    ) {
                        if (
                            ("function" == typeof o.beforeMove &&
                                o.beforeMove(next.data("index")),
                            current.removeClass("active"),
                            next.addClass("active"),
                            e(".onepage-pagination li a.active").removeClass(
                                "active"
                            ),
                            e(
                                ".onepage-pagination li a[data-index='" +
                                    a +
                                    "']"
                            ).addClass("active"),
                            (e("body")[0].className = e(
                                "body"
                            )[0].className.replace(
                                /\bviewing-page-\d.*?\b/g,
                                ""
                            )),
                            e("body").addClass(
                                "viewing-page-" + next.data("index")
                            ),
                            e(".navA .navb path").attr("d", t),
                            e(".active .navb path").attr("d", n),
                            (pos = 100 * (a - 1) * -1),
                            history.replaceState && 1 == o.updateURL)
                        ) {
                            var i =
                                window.location.href.substr(
                                    0,
                                    window.location.href.indexOf("#")
                                ) +
                                "#" +
                                (a - 1);
                            history.pushState({}, document.title, i);
                        }
                        s.transformPage(o, pos, a);
                    }
                }),
                s.addClass("onepage-wrapper").css("position", "relative"),
                e.each(d, function(a) {
                    e(this)
                        .css({ position: "absolute", top: topPos + "%" })
                        .addClass("section")
                        .attr("data-index", a + 1),
                        e(this).css({
                            position: "absolute",
                            left:
                                "horizontal" == o.direction ? leftPos + "%" : 0,
                            top:
                                "vertical" == o.direction ||
                                "horizontal" != o.direction
                                    ? topPos + "%"
                                    : 0
                        }),
                        "horizontal" == o.direction
                            ? (leftPos += 100)
                            : (topPos += 100),
                        1 == o.pagination &&
                            (paginationList +=
                                "<li><a data-index='" +
                                (a + 1) +
                                "' href='#" +
                                (a + 1) +
                                "'></a></li>");
                }),
                s
                    .swipeEvents()
                    .bind("swipeDown", function(a) {
                        e("body").hasClass("disabled-onepage-scroll") ||
                            a.preventDefault(),
                            s.moveUp();
                    })
                    .bind("swipeUp", function(a) {
                        e("body").hasClass("disabled-onepage-scroll") ||
                            a.preventDefault(),
                            s.moveDown();
                    }),
                "" != window.location.hash && "#1" != window.location.hash)
            )
                if (
                    ((init_index = window.location.hash.replace("#", "")),
                    parseInt(init_index) <= total && parseInt(init_index) > 0)
                ) {
                    if (
                        (e(
                            o.sectionContainer +
                                "[data-index='" +
                                init_index +
                                "']"
                        ).addClass("active"),
                        e("body").addClass("viewing-page-" + init_index),
                        e(".navA .navb path").attr("d", t),
                        e(".active .navb path").attr("d", n),
                        1 == o.pagination &&
                            e(
                                ".onepage-pagination li a[data-index='" +
                                    init_index +
                                    "']"
                            ).addClass("active"),
                        (next = e(
                            o.sectionContainer +
                                "[data-index='" +
                                init_index +
                                "']"
                        )),
                        next &&
                            (next.addClass("active"),
                            1 == o.pagination &&
                                e(
                                    ".onepage-pagination li a[data-index='" +
                                        init_index +
                                        "']"
                                ).addClass("active"),
                            (e("body")[0].className = e(
                                "body"
                            )[0].className.replace(
                                /\bviewing-page-\d.*?\b/g,
                                ""
                            )),
                            e("body").addClass(
                                "viewing-page-" + next.data("index")
                            ),
                            e(".active .navb path").attr("d", n),
                            history.replaceState && 1 == o.updateURL))
                    ) {
                        var c =
                            window.location.href.substr(
                                0,
                                window.location.href.indexOf("#")
                            ) +
                            "#" +
                            init_index;
                        history.pushState({}, document.title, c);
                    }
                    (pos = 100 * (init_index - 1) * -1),
                        s.transformPage(o, pos, init_index);
                } else
                    e(o.sectionContainer + "[data-index='1']").addClass(
                        "active"
                    ),
                        e("body").addClass("viewing-page-1"),
                        e(".navA .navb path").attr("d", t),
                        e(".active .navb path").attr("d", n),
                        1 == o.pagination &&
                            e(
                                ".onepage-pagination li a[data-index='1']"
                            ).addClass("active");
            else
                e(o.sectionContainer + "[data-index='1']").addClass("active"),
                    e("body").addClass("viewing-page-1"),
                    e(".navA .navb path").attr("d", t),
                    e(".active .navb path").attr("d", n),
                    1 == o.pagination &&
                        e(".onepage-pagination li a[data-index='1']").addClass(
                            "active"
                        );
            return (
                1 == o.pagination &&
                    e(".onepage-pagination li a").click(function() {
                        var a = e(this).data("index");
                        s.moveTo(a);
                    }),
                e(document).bind(
                    "mousewheel DOMMouseScroll MozMousePixelScroll",
                    function(a) {
                        a.preventDefault();
                        var n =
                            a.originalEvent.wheelDelta ||
                            -a.originalEvent.detail;
                        e("body").hasClass("disabled-onepage-scroll") ||
                            l(a, n);
                    }
                ),
                0 != o.responsiveFallback &&
                    (e(window).resize(function() {
                        r();
                    }),
                    r()),
                1 == o.keyboard &&
                    e(document).keydown(function(a) {
                        var n = a.target.tagName.toLowerCase();
                        if (!e("body").hasClass("disabled-onepage-scroll"))
                            switch (a.which) {
                                case 38:
                                    "input" != n &&
                                        "textarea" != n &&
                                        s.moveUp();
                                    break;
                                case 40:
                                case 32:
                                    "input" != n &&
                                        "textarea" != n &&
                                        s.moveDown();
                                    break;
                                case 33:
                                    "input" != n &&
                                        "textarea" != n &&
                                        s.moveUp();
                                    break;
                                case 34:
                                    "input" != n &&
                                        "textarea" != n &&
                                        s.moveDown();
                                    break;
                                case 36:
                                    s.moveTo(1);
                                    break;
                                case 35:
                                    s.moveTo(total);
                                    break;
                                default:
                                    return;
                            }
                    }),
                !1
            );
        });
})(window.jQuery);
    
