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
