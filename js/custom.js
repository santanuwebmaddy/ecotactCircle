$(window).load(function() {
  $(".se-pre-con").fadeOut("slow");
});

$('.parallax-window').parallax();


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

 $('.image-popup').magnificPopup({
  type: 'image',
   gallery:{ 
    enabled: true 
  }
});