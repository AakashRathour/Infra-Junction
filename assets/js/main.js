$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $(e.target.hash).find('img').each(function () {
        var imageSrc = $(this).attr("data-src");
        $(this).attr("src", imageSrc).attr("data-src");
    });
});
$('.carousel').bind('slide.bs.carousel', function (e) {
    $(e.relatedTarget).find('img').each(function () {
        var imageSrc = $(this).attr("data-src");
        $(this).attr("src", imageSrc).attr("data-src");
    });
});
/* dropdown hover */
(function($) {
    var defaults={
        sm : 540,
        md : 720,
        lg : 960,
        xl : 1140,
        navbar_expand: 'lg'
    };
    $.fn.bootnavbar = function() {
        var screen_width = $(document).width();
        if(screen_width >= defaults.lg){
            $(this).find('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').first().addClass('show').addClass('animated fadeIn').one('animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd', function () {
                    $(this).removeClass('animated fadeIn');
                });
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').first().removeClass('show');
            });
        }
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
          if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');

          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
          });

          return false;
        });
    };
})(jQuery);
$(function () {
    $('#main_navbar').bootnavbar();
})
/* menu */
$(function () {
    function close() {
        $('body').removeClass('has-active-menu');
        setTimeout(function () {
            $('.nav-slider').removeClass('toggling');
        }, 500);
    }
    function open() {
        $('body').addClass('has-active-menu');
        $('.nav-slider').addClass('toggling');
    }
    $('.nav-mask').click(close);
    $('.navbar-toggler').click(open);
});
/* lang option */
$('#langMobileBlockOpen').click(function () {
    $('#langMobileBlock').show();
});
$('#langMobileBlockClose').click(function () {
    $('#langMobileBlock').hide();
})
/* sort option */
$('#filterBtns-mobileSort').click(function () {
    $('#sortMobileBlock').show();
});
$('#sortMobileBlockClose').click(function () {
    $('#sortMobileBlock').hide();
})
/* search bar */
$('.searchTractorsbtn').click(function () {
    $('.fixedsearchbar').show();
});
$('.fixedsearchbar-close').click(function () {
    $('.fixedsearchbar').hide();
});
/* ckeditor */
$('.ckeditor-btn').click(function(){
    $(this).parent().siblings('.content-ckeditor-hide').slideToggle();
});
$('.fixedInputsearch').focus(function () {
    $('div.fixedsearchbar-results').show();
    $(document).bind('focusin.fixedsearchbar-results click.fixedsearchbar-results', function (e) {
        if ($(e.target).closest('.fixedsearchbar-results, .fixedInputsearch').length) return;
        $(document).unbind('.fixedsearchbar-results');
        $('div.fixedsearchbar-results').hide();
    });
});
$('div.fixedsearchbar-results').hide();
/* load function */
$(function() {
    $('.sliderBlock').addClass('sliderBlockHeight');
});
/* lazy load */
$(function () {
    $("img").unveil(500);
});
/* filter */
$("#filterBtns-mobileFilter").click(function(){
    $(".truckFilterBlock").addClass("truckFilterBlock-mobile");
});
$("#cancle-filter").click(function(){
    $(".truckFilterBlock").removeClass("truckFilterBlock-mobile");
})
/* variants */
$(".newTruckBlock-variants").click(function(){
    $(this).find(".newTruckBlock-variantsList").slideToggle();
    $(this).find("p img").toggleClass("flipImg");
})
/* fileupload */
jQuery(($) => {
    $('.attachment input[type="file"]')
      .on('change', (event) => {
      let el = $(event.target).closest('.attachment').find('.attachment-file');
      el
        .find('.attachment-preview')
        .css({
          'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) + ')'
        });
    });
});
/* sell truck popup */
$(".listTruckBtn-popup").click(function(){
    $("#sellTruck").show();
})
$(".listTruckBtn-popupClose").click(function(){
    $("#sellTruck").hide();
})
/* youtube */
let deferVideo = () => {
    const vidDefer = document.querySelectorAll("iframe.lazyVid"); 
    if ("IntersectionObserver" in window) {
        let lazyYoutube = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyVid = entry.target;
                    lazyVid.src = lazyVid.dataset.src;
                    lazyYoutube.unobserve(lazyVid);
                }
            });
        });
        vidDefer.forEach((lazyVid) => {
            lazyYoutube.observe(lazyVid);
        });
    }
}
window.onload = deferVideo();
/* timer */
(function () {
const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

//I'm adding this section so I don't have to keep updating this pen every year :-)
//remove this if you don't need it
let today = new Date(),
    dd = String(today.getDate()).padStart(2, "0"),
    mm = String(today.getMonth() + 1).padStart(2, "0"),
    yyyy = today.getFullYear(),
    nextYear = yyyy + 1,
    dayMonth = "06/30/",
    birthday = dayMonth + yyyy;

today = mm + "/" + dd + "/" + yyyy;
if (today > birthday) {
    birthday = dayMonth + nextYear;
}
//end

const countDown = new Date(birthday).getTime(),
    x = setInterval(function() {    

        const now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
        document.getElementById("headline").innerText = "Mahindra Product Launch";
        document.getElementById("countdown").style.display = "none";
        document.getElementById("content").style.display = "block";
        clearInterval(x);
        }
        //seconds
    }, 0)
}());
/* social share */
$(".social_share_product_icon").click(function(){
    $(".social_share_product_inner").fadeIn();
})
$(".social_share_product_close").click(function(){
    $(".social_share_product_inner").fadeOut();
})