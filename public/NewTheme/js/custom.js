$(document).ready(function () {
  $("#banner-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
    },
  });
  $(".play").on("click", function () {
    owl.trigger("play.owl.autoplay", [1000]);
  });
  $(".stop").on("click", function () {
    owl.trigger("stop.owl.autoplay");
  });
});

$(".sidenav-trigger").click(function () {
  $(".sidenav-trigger").toggleClass("active");
  $("#nav-mobile").toggleClass("active");
});

// New Slider Impliment Js

// Popular Today Slider
$(document).ready(function () {
  $("#populer_today").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Sports Slider
  $("#slorts_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Games Slider
  $("#games_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Casinos Slider
  $("#casinos_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Live Casinos Slider
  $("#live_casinos_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Providers Slider
  $("#provider_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });
  $("#out-virtual-cascino").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });

  // Endorsements Slider
  $("#endorsements_slider").owlCarousel({
    loop: true,
    margin: 10,
    slideBy: 2,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
    },
  });
});
