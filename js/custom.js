// $('.bestseller-carousal').slick({
//   dots: false,
//   infinite: true,
//   navigator: false,
//   centerMode: true,
//   speed: 300,
//   slidesToShow: 4,
//   slidesToScroll: 4,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 4,
//         slidesToScroll: 4,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 992,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }

//   ]
// });

$('.clients-carousal').slick({
  dots: false,
  infinite: true,
  navigator: true,
  centerMode: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
$('#clients-carousal').owlCarousel({
  center: true,
  items: 2,
  nav: true,
  navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
  autoplay: true,
  // autoplayTimeout: 3000,
  autoplayHoverPause: true,
  loop: true,
  margin: 10,
  responsive: {
    2025: {
      center: true,
      items: 2
    },
    1920: {
      center: true,
      items: 2
    },
    769: {
      center: true,
      items: 2
    },
    768: {
      center: false,
      items: 1
    },
    480: {
      center: false,
      items: 1
    },
    375: {
      center: false,
      items: 1
    }
  }
});


$(document).ready(function () {
  $('.prd-top').hover(function () {
    $(this).addClass('active').siblings('.prd-top').removeClass('active');
  }, function () {
    $('.prd-top').removeClass('active');
  });
});
$(document).ready(function () {
  $('.accordion-item').click(function () {
    $(this).toggleClass('active');
  });
});

$(document).ready(function () {
  $('.navbar-toggler').click(function () {
    $('.navbar-brand').toggleClass('active');
  });
});

$(window).on("scroll", function () {
  if ($(window).scrollTop() > 50) {
    $(".header-main,.mobile-main").addClass("active");
  } else {
    $(".header-main,.mobile-main").removeClass("active");
  }
});
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: ''
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    start: settings.start,
    step: function () {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};

$(document).ready(function () {
  let progress = 0;
  const interval = setInterval(() => {
    let start = progress
    if (progress < 100) {
      if (progress == 0) {
        progress += 25
        $(".viewport-wrapper .loader-vector").css('bottom', '20%')
        $(".viewport-wrapper").css('background-color', '#1D84A7')
      } else if (progress == 25) {
        progress += 25
        $(".viewport-wrapper .loader-vector").css('bottom', '50%')
        $(".viewport-wrapper").css('background-color', '#81CFE5')
      } else if (progress == 50) {
        progress += 50
        $("body").addClass('enable-scroll')
        $('.banner-bg').css('border-radius', `0`)
        $(".viewport-wrapper .loader-vector").css('bottom', '150%')
        $(".viewport-wrapper").css('background-color', '#fff')
        setTimeout(() => {
          $(".ban-top-text h1").addClass('animated')
          $(".ban-top-text h2").addClass('animated')
          $(".banner-bottom").addClass('animated')
          $(".borderw-icon").addClass('animated')
          $(".banner-discover").addClass('animated')
          $(".bsocial").addClass('animated')
          setTimeout(() => {
            $(".header-main").css('transform', 'translateY(0)')
            $(".mobile-main").css('transform', 'translateY(0)')
          }, 500);
        }, 300);
      }
      $(".viewport-wrapper .loader-vector").css('transform', `translateX(-50%) scale(${progress / 100})`)
      console.log(progress / 100)
      $('.loading-txt span').jQuerySimpleCounter({ end: progress, start, duration: 500 });
      $('.banner-bg').css('transform', `scale(${progress / 100})`)
    } else {
      $('body').removeClass("overflow-hidden")
      clearInterval(interval);
    }
  }, 1000);
});

$(document).ready(function () {
  gsap.timeline({
    scrollTrigger: {
      trigger: ".hpb-bottom",
      start: "top 80%",
      end: "top 20%",
      scrub: true,
      // pin: true
    }
  })
    .to(".hpb-bottom", {
      scale: 1,
      ease: "none"
    });
})
$(document).ready(function () {
  gsap.timeline({
    scrollTrigger: {
      trigger: ".iti-prd",
      start: "top 40%",
      end: "top 0%",
      scrub: true,
      // pin: true
    }
  })
    .to(".iti-prd", {
      scale: 1,
      rotation: 0,
      ease: "none"
    });
})
$(document).ready(function () {
  gsap.timeline({
    scrollTrigger: {
      trigger: ".prd-list-item.left",
      start: "top 80%",
      end: "top 20% ",
      scrub: true
      // pin: true
    }
  })
    .fromTo(".prd-list-item.left", {
      y: 100
    }, {
      y: -100,
      ease: "none"
    });
})

// $(document).ready(function () {
//   ScrollTrigger.batch(".product-loop", {
//     onEnter: elements => {
//       gsap.from(elements, {
//         // autoAlpha: 0,
//         y: 50,
//         stagger: 0.2
//       });
//     },
//     // once: true
//   });
// })
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
ScrollSmoother.create({
  // wrapper: 'body',
  content: 'main',
  smooth: 3, // how long (in seconds) it takes to "catch up" to the native scroll position
  effects: true, // looks for data-speed and data-lag attributes on elements
  smoothTouch: 0.5, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
});
$(document).ready(function () {
  gsap.timeline({
    scrollTrigger: {
      trigger: ".home-journey",
      start: "top top",
      end: "+=300",
      scrub: true,
      // pin: true,
      stagger: 0.1
      // pin: true
    }
  })
    .to(".home-journey", {
      yPercent: 30,
      scale: 0.45,
      ease: "none"
    });
})

$(document).ready(function () {
  // const numItems = document.querySelectorAll(".bestseller-carousal .product-loop").length;
  // const itemWidth = 100 / numItems;
  let xPercent;
  if (innerWidth > 1200) {
    xPercent = -33.33
  }
  else if (innerWidth > 767) {
    xPercent = -50
  }
  else if (innerWidth > 990) {
    xPercent = -33.33
  }
  else if (innerWidth > 1024) {
    xPercent = -50
  } else if (innerWidth > 500) {
    xPercent = -66
  } else {
    xPercent = -83
  }
  gsap.timeline({
    scrollTrigger: {
      trigger: ".home-best-seller",
      start: "center center ",
      end: "+=1000",
      scrub: true,
      // stagger: 0.1,
      pin: true
    }
  })
    .to(".bestseller-carousal", {
      xPercent,
      ease: "none"
    });
})
// $(document).ready(function () {
//   // const numItems = document.querySelectorAll(".bestseller-carousal .product-loop").length;
//   // const itemWidth = 100 / numItems;
//   let xPercent;
//   if (innerWidth > 990) {
//     xPercent = -33.33
//   } else if (innerWidth > 767) {
//     xPercent = -50
//   } else if (innerWidth > 500) {
//     xPercent = -66
//   } else {
//     xPercent = -83
//   }
//   gsap.timeline({
//     scrollTrigger: {
//       trigger: ".home-best-seller",
//       start: "top top",
//       end: "+=1000",
//       scrub: true,
//       // stagger: 0.1,
//       pin: true
//     }
//   })
//     .to(".bestseller-carousal", {
//       xPercent,
//       ease: "none"
//     });
// })
// document.addEventListener('DOMContentLoaded', () => {
//   const header = document.getElementById('header');

//   window.addEventListener('scroll', () => {
//     if (window.scrollY > 0) {
//       header.classList.add('scroll');
//     } else {
//       header.classList.remove('scroll');
//     }
//   });
// });
const header = document.querySelector(".header-main");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 150) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});
