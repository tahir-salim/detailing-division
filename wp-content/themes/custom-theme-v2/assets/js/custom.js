$(document).ready(function() {
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $(".menu-Bar").click(function() {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
    });

    $(".loginUp").click(function() {
        $(".LoginPopup").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".signUp").click(function() {
        $(".signUpPop").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".closePop,.overlay").click(function() {
        $(".popupMain").fadeOut();
        $(".overlay").fadeOut();
    });
    var myVideo = document.getElementById("videoplay"); 
    $('.play-btn').on( "click" , function(){
        if (myVideo.paused) {
            myVideo.play(); 
            $(".play-btn").hide();
            $("#videoplay").attr("controls" , "true");
        }
    
        else {
            myVideo.pause(); 
        }
    });

    $('.menu li').addClass('different');

    // $(".menu .menu-item-has-children").addClass("dropdown ");
    // $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown-list");
    // $(".menu .menu-item-has-children ul.sub-menu .sub-menu").addClass("dropdown-list1");

    /* Tabbing Function */
    $("[data-targetit]").on("click", function(e) {
        $(this).addClass("active");
        $(this)
            .siblings()
            .removeClass("active");
        var target = $(this).data("targetit");
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $("." + target).fadeIn();
        $(".tabViewList").slick("setPosition", 0);
    });

    // Accordian
    $(".accordian h4").click(function() {
        $(".accordian li").removeClass("active");
        $(this)
            .parent("li")
            .addClass("active");
        $(".accordian li div").slideUp();
        $(this)
            .parent("li")
            .find("div")
            .slideDown();
    });

    $("li.dropdown-nav").hover(function() {
        $(this)
            .children("ul")
            .stop(true, false, true)
            .slideToggle(300);
    });

    $(".searchBtn").click(function() {
        $(".searchWrap").addClass("active");
        $(".overlay").fadeIn("active");
        $(".searchWrap input").focus();
        $(".searchWrap input").focusout(function(e) {
            $(this)
                .parents()
                .removeClass("active");
            $(".overlay").fadeOut("active");
            $("body").removeClass("ovr-hiddn");
        });
    });

    $(".index-slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        arrows:false,
        autoplay:true,
        responsive: [
           
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
            // prevArrow: $('.prev'),
            // nextArrow: $('.next')
    });
    $(".revslider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows:false,
        autoplay:true,
            // prevArrow: $('.prev'),
            // nextArrow: $('.next')
    });

    //     Slider For
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        // fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
    });

    /* Top Scroll */
    // $('body').on('click', '.scrolldown-fl', function() {
    //     goToScroll('awardSec');
    // });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function() {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $("ul.menu li a").each(function() {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).removeClass("active");
            $(this)
                .closest("li")
                .addClass("active");
            $("ul.menu li.first").removeClass("active");
        }
    });
});
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


/* RESPONSIVE JS */
if ($(window).width() < 824) {}

function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $(".topAppendTxt").each(function() {
            var getdtd = $(this)
                .find(".cloneDiv")
                .clone(true);
            $(this)
                .find(".cloneDiv")
                .remove();
            $(this).append(getdtd);
        });
    }
}

function goToScroll(e) {
    $("html, body").animate({
            scrollTop: $("." + e).offset().top
        },
        1000
    );
}

$(window).scroll(numberAnimate);
        var viewed = false;

        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();

            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();

            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        function numberAnimate() {
            if (isScrolledIntoView($(".animate_number")) && !viewed) {
                viewed = true;
                $('.animie_value').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 2000,
                        easing: 'linear',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }
        }

     