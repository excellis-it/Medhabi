(function (window, document, $, undefined) {
    "use strict";

    var eduJs = {
        i: function (e) {
            eduJs.d();
            eduJs.methods();
        },
        d: function (e) {
            (this._window = $(window)),
                (this._document = $(document)),
                (this._body = $("body")),
                (this._html = $("html"));
        },

        methods: function (e) {
            eduJs.salActive();
            eduJs.stickyHeaderMenu();
        },


        stickyHeaderMenu: function () {
            $(window).on("scroll", function () {
                // Sticky Class Add
                if ($("body").hasClass("sticky-header")) {
                    var stickyPlaceHolder = $("#edu-sticky-placeholder"),
                        menu = $(".header-mainmenu"),
                        menuH = menu.outerHeight(),
                        topHeaderH = $(".header-top-bar").outerHeight() || 0,
                        targrtScroll = topHeaderH + 200;
                    if ($(window).scrollTop() > targrtScroll) {
                        menu.addClass("edu-sticky");
                        stickyPlaceHolder.height(menuH);
                    } else {
                        menu.removeClass("edu-sticky");
                        stickyPlaceHolder.height(0);
                    }
                }
            });
        },

        salActive: function () {
            sal({
                threshold: 0.01,
                once: true,
            });
        },

    };


    // CAMPUS GALLERY SLIDER
    var menu = [];
    jQuery('.swiper-slide').each(function (index) {
        menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
        loop: true,
        speed: 1000,
        parallax: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        watchSlidesProgress: true,


        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },

            touchStart: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },

            setTransition: function (speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = $(".slide-bg-image");
    sliderBgSetting.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
            $(".slider-img").removeClass("active");
            $(this).addClass("active");
        });
    });

    // Academic Swiper Js
    var swiper = new Swiper(".academic-swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 0,
            slideShadows: true
        },
        keyboard: {
            enabled: true
        },
         autoplay: {
             delay: 2000,
         },
        spaceBetween: 60,
        loop: true,
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true
        // }
        // Responsive breakpoints
        breakpoints: {
            767: {
                spaceBetween: 30,
            },
            // 1024: {
            //     slidesPerView: 2,
            //     spaceBetween: 20
            // }
        }

    });


    $('.research_oriented_slider').owlCarousel({
        loop: false,
        margin: 40,
        nav: false,
        dots: false,
        navText: [
            "<span class='ri-arrow-left-s-line prev_btn'></span>",
            "<span class='ri-arrow-right-s-line next_btn'></span>",
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                autoplay: true,
                autoplayTimeout: 2000,
            },
            600: {
                items: 2,
                autoplay: true,
                autoplayTimeout: 2000,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
            }
        }
    })
    jQuery(document).ready(function ($) {
        function setSecondSliderActive() {
            $(".slider-img").removeClass("active");
            $(".slider-img").eq(3).addClass("active");
        }

        setSecondSliderActive();

        $(".slider-img").on("mouseover", function () {
            $(".slider-img").removeClass("active");
            $(this).addClass("active");
        });

        $(".slider-images").on("mouseleave", function () {
            setSecondSliderActive()
        });
    });


    // jQuery(document).ready(function ($) {
    //     $(".slider-img").on("click", function () {
    //         $(".slider-img").removeClass("active");
    //         $(this).addClass("active");
    //     });
    // });
    document.addEventListener(
        'DOMContentLoaded',
        function () {

            var international = document.getElementById("international");
            international.textContent = 2000;

            var visiting = document.getElementById("visiting");
            visiting.textContent = 80;
            var nationalities = document.getElementById("nationalities");
            nationalities.textContent = 65;

            var student = document.getElementById("student");
            student.textContent = 800;

        }, false
    );
    $('.mobile_student_talk_slider').owlCarousel({
        loop: true,
        margin: 5,
        items: 1,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        autoplayHoverPause: false,
        // nav: true,
        // navText: [
        //     "<span class='ri-arrow-left-s-line prev_btn'></span>",
        //     "<span class='ri-arrow-right-s-line next_btn'></span>",
        // ],
        responsive: {
            0: {
                items: 1,
                center: false
            },
            375: {
                items: 1,
                center: false
            },
            520: {
                items: 2,
                center: false
            },
            767: {
                items: 2,
                center: false
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1366: {
                items: 2
            },
            1400: {
                items: 2
            }
        }
    });
    $('.university__name').owlCarousel({
        loop: true,
        margin: 5,
        items: 3,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: [
            "<span class='ri-arrow-left-s-line prev_btn'></span>",
            "<span class='ri-arrow-right-s-line next_btn'></span>",
        ],
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });
    $('.accredation__slider').owlCarousel({
        loop: true,
        margin: 40,
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        nav: false,
        center: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: true
            }
        }
    });
    $('.industry___slider').owlCarousel({
        loop: true,
        margin: 40,
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: true
            }
        }
    });
    $('.profile__logo').owlCarousel({
        loop: true,
        margin: 10,
        items: 5,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false,
                loop: false
            }
        }
    });
    $('.home__logo').owlCarousel({
        loop: true,
        margin: 10,
        items: 5,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: false
            }
        }
    });
    // $('.home__logo').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     items: 5,
    //     autoplay: true,
    //     autoplayTimeout: 2000,
    //     autoplayHoverPause: true,
    //     nav: false,
    //     dots: false,
    //     responsiveClass: true,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             nav: false
    //         },
    //         600: {
    //             items: 1,
    //             nav: false
    //         },
    //         1000: {
    //             items: 5,
    //             nav: false,
    //             loop: false
    //         }
    //     }
    // });
    $('.contact__logo').owlCarousel({
        loop: true,
        margin: 10,
        items: 5,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false,
                loop: true
            }
        }
    });
    $('.life__medhavi').owlCarousel({
        loop: true,
        animateOut: 'fadeOut',
        margin: 10,
        items: 1,
        autoplay: false,
        autoplayTimeout: 2000,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 0,
            },
            600: {
                items: 1,
                nav: false,
                margin: 0,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true,
                autoplay: true,
            }
        }
    });
    $('.diploma__slider').owlCarousel({
        loop: false,
        infinite: true,
        margin: 40,
        items: 3,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: [
            "<span class='ri-arrow-left-s-line prev_btn'></span>",
            "<span class='ri-arrow-right-s-line next_btn'></span>",
        ],
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });


    $('.featured__medhavi').owlCarousel({
        loop: true,
        animateOut: 'fadeOut',
        margin: 10,
        items: 1,
        autoplay: false,
        autoplayTimeout: 2000,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 0,
            },
            600: {
                items: 1,
                nav: false,
                margin: 0,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    });
    $('.featuredstories__medhavi').owlCarousel({
        loop: true,
        animateOut: 'fadeOut',
        margin: 10,
        items: 1,
        autoplay: false,
        autoplayTimeout: 2000,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 0,
            },
            600: {
                items: 1,
                nav: false,
                margin: 0,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    });

    $('.student-says').owlCarousel({
        loop: false,
        margin: 30,
        dots: false,
        rtl: false,
        center: false,
        autoplayHoverPause: false,
        autoplay: false,
        singleItem: true,
        smartSpeed: 1200,
        nav: true,
        navText: [
            "<span class='ri-arrow-left-s-line prev_btn'></span>",
            "<span class='ri-arrow-right-s-line next_btn'></span>",
        ],
        responsive: {
            0: {
                items: 1,
                center: false
            },
            375: {
                items: 1,
                center: false
            },
            520: {
                items: 2,
                center: false
            },
            767: {
                items: 2,
                center: false
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1366: {
                items: 2
            },
            1400: {
                items: 2
            }
        }
    });
    $('.students-say-slider').owlCarousel({
        loop: true,
        infinite: true,
        margin: 10,
        items: 3,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            },
            1023: {
                items: 2,
                nav: true,
                loop: true
            },
            1920: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });

    $('.placement__slider').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        animateIn: 'fadeIn',
        rtl: false,
        center: false,
        autoplayHoverPause: false,
        autoplay: true,
        autoplayTimeout: 3000,
        singleItem: true,
        smartSpeed: 1200,
        nav: false,
        navText: [
            "<span class='ri-arrow-left-s-line prev_btn'></span>",
            "<span class='ri-arrow-right-s-line next_btn'></span>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    });

    $(document).ready(function () {
        $('.popup-youtube').magnificPopup({
            type: 'iframe'
        });
    });

    // jQuery(document).ready(function ($) {
    //     var maxLength = 1448;
    //     $(".chancellor_para").each(function () {
    //         var myStr = $(this).text();
    //         if ($.trim(myStr).length > maxLength) {
    //             var newStr = myStr.substring(0, maxLength);
    //             var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
    //             $(this).empty().html(newStr);
    //             $(this).after(' <a href="javascript:void(0);" class="read-more hover-underline-animation_read">read more</a>');
    //             $(this).after(' <a href="javascript:void(0);" class="read-less hover-underline-animation_read">read less</a>');
    //             $(this).parent().find(".read-less").css('display', 'none');
    //             $(this).append('<span class="more-text">' + removedStr + '</span>');
    //         }
    //     });
    //     $(".read-more").click(function () {
    //         $(this).parent().find(".more-text").css('display', 'inline');
    //         $(this).parent().find(".read-less").css('display', 'block');
    //         $(this).hide();
    //     });

    //     $(".read-less").click(function () {
    //         $(this).parent().find(".more-text").css('display', 'none');
    //         $(this).parent().find(".read-more").css('display', 'block');
    //         $(this).hide();
    //     });
    // });


    $('.moreless-button').click(function () {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });
    $('.moreless-button-1').click(function () {
        $('.moretext-1').slideToggle();
        if ($('.moreless-button-1').text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });
    $('.moreless-button-2').click(function () {
        $('.moretext-2').slideToggle();
        if ($('.moreless-button-2').text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });
    $('.moreless-button-3').click(function () {
        $('.moretext-3').slideToggle();
        if ($('.moreless-button-3').text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });


   //   var win = window,
   //      doc = document,
   //      docElem = doc.documentElement,
   //      body = doc.getElementsByTagName('body')[0],
   //      x = win.innerWidth || docElem.clientWidth || body.clientWidth,
   //       y = win.innerHeight || docElem.clientHeight || body.clientHeight;
   // alert(x + ' × ' + y);


    eduJs.i();


})(window, document, jQuery);