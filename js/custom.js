$(window).load(function() {
  $(".se-pre-con").fadeOut("slow");
});

$('.parallax-window').parallax();

$(window).on('scroll',function(){
  if ($(window).scrollTop() > 0) {
    $('.navbar').addClass('shrink-nav');
  } else {
    $('.navbar').removeClass('shrink-nav')
  }
});
$(document).ready(function(){
  $("#connect").click(function(){
    $(".connect-details").toggle();
  });
  $("#collaborate").click(function(){
    $(".collaborate-details").toggle();
  });
  $("#care").click(function(){
    $(".care-details").toggle();
  });
});

$('.testimonial-carousel').owlCarousel({
  loop:true,
  nav:false,
  dots:false,
  autoplay:true,
  margin:10,
  smartSpeed:600,
  autoplayTimeout:3000,
  responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
  }
});
$('.gallery-carousel').owlCarousel({
  loop:true,
  nav:true,
  navText: ['<i class="las la-angle-left"></i>', '<i class="las la-angle-right"></i>'],
  dots:false,
  autoplay:true,
  margin:10,
  smartSpeed:600,
  autoplayTimeout:5000,
  responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    1000:{
        items:3
    }
  }
});




 $('.image-popup').magnificPopup({
  type: 'image',
   gallery:{ 
    enabled: true 
  }
});