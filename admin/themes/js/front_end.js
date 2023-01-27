$(document).ready(function() {
  "use strict";

 $(window).scroll(function() {
    $(".navbar").toggleClass("class_nav", $(this).scrollTop() > 20);
  });

$(".about img").height($(".about").height());

// START SPECIAL
 /* INDEX SLIDER*/
  $(".testiSlide").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    responsive: [
      {
        breakpoint: 850,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
        }
      }
    ]
  });

  // counter
// DOM Element's
const counters = document.querySelectorAll('.counter');

/*** Using forEach() ***/

/*
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const speed = 5000;

        const inc = target / speed;

        if(count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    }

    updateCount();
})

*/

/*** Same functionality, now using for...of ***/

for(let n of counters) {
    const updateCount = () => {
        const target = + n.getAttribute('data-target');
        const count = + n.innerText;
        const speed = 250000;
        
        const inc = target / speed; 

        if(count < target) {
            n.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, 1);
        } else {
            n.innerText = target;
        }
    }

    updateCount();
}

/*START COMP*/
    /*START SECTION SIX*/
    $('.comp .question-info i').click(function () {
         $(this).toggleClass('fa-chevron-down');
        $(this).next('p').slideToggle(1000);

    });
 
     $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        transitionStyle:"backSlide",
        autoPlay:true
    });




});
