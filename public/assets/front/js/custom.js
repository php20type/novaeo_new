//--Menubar Section jQuery

$(document).ready(function(){
    $("a.menubar-btn").click(function(){
        $(".header-menubar nav").addClass("menu-drawer-open");
    });
    $(".menubar-close-btn a").click(function(){
        $(".header-menubar nav").removeClass("menu-drawer-open");
    });
});

//--Banner Section jQuery
$(document).ready(function(){
    $('.banner-slider-sec').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 10000,
        infinite: true,
    });
    // Team Slider
    $(".team-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows : true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }
            }
        ]
    });
    // Team Slider
    $(".team-block-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows : true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }
            }
        ]
    });
    $(".person-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows : true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
    });
    // Perks Section jQuery
    $(".perks-box-block .col-md-2").slice(0, 12).show();
    $("body").on('click touchstart', '.perks-box-btn a', function (e) {
        e.preventDefault();
        $(".perks-box-block .col-md-2:hidden").slice(0, 12).slideDown();
        if ($(".perks-box-block .col-md-2:hidden").length == 0) {
            $(".perks-box-btn a").css('visibility', 'hidden');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
    });
});



// ===== Scroll to Top ==== 

$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});

