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

  $(document).ready(function () {
    // Trigger the video on button click
    $(".vjs-big-play-button").click(function () {
      var video = $("video")[0]; // Get the video element
      if (video.paused) {
        video.play(); // Play the video
      } else {
        video.pause(); // Pause the video
      }
    });
  });
});
