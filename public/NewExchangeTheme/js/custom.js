$(document).ready(function () {
  // Get the necessary elements
  var arrowLeft = $(".arrow-left");
  var arrowRight = $(".arrow-right");
  var tabList = $("#taj_home_sports_list");
  var navItems = tabList.find(".nav-item");
  var itemWidth = navItems.first().outerWidth(true);
  var containerWidth = tabList.parent().width();
  var visibleItems = Math.floor(containerWidth / itemWidth);
  var currentPosition = 0;
  var maxScrollPosition = Math.max(0, navItems.length - visibleItems);

  // Add event listeners to arrow tabs
  arrowLeft.on("click", slideLeft);
  arrowRight.on("click", slideRight);

  function slideLeft() {
    if (currentPosition > 0) {
      currentPosition--;
      slideToCurrent();
    }
  }

  function slideRight() {
    if (currentPosition < maxScrollPosition) {
      currentPosition++;
      slideToCurrent();
    } else {
      currentPosition = 0; // Loop back to the first item
      slideToCurrent();
    }
  }

  function slideToCurrent() {
    var scrollAmount = currentPosition * itemWidth;
    tabList.css("transform", "translateX(-" + scrollAmount + "px)");
  }
});

$(document).ready(function () {
  $(".menu-button-mobile").click(function () {
    $(".point-menu").toggleClass("show");
  });

  $(".dropdown-toggle").click(function () {
    var parentLi = $(this).closest("li");
    var subUl = parentLi.find(".dropdown-menu");

    var navbarNav = parentLi.closest(".navbar-nav");
    var otherNavs = navbarNav.siblings(".navbar-nav");
    otherNavs.find("li").removeClass("show");
    otherNavs.find(".dropdown-menu").removeClass("show");

    parentLi.toggleClass("show");
    subUl.toggleClass("show");
  });

  // $("#taj_home_sports_list").owlCarousel({
  //   loop: true,
  //   nav: true,
  //   dots: false,
  //   autoWidth: true,
  //   items: 5,
  //   responsive: {
  //     0: {
  //       // items: 5,
  //     },
  //     600: {
  //       // items: 5,
  //     },
  //   },
  // });

  $("#banner-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
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

  $(".upcoming-slider").slick({
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1500,
    vertical: true,
    verticalSwiping: true,
  });
  $(".upcoming-slider-mobile").slick({
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1500,
    vertical: true,
    verticalSwiping: true,
  });
  $(".winner-slider").slick({
    slidesToScroll: 1,
    slidesToShow: 3,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1500,
    vertical: true,
    verticalSwiping: true,
  });
  $(".new-launched").slick({
    arrows: false,
    dots: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 900,
    infinite: true,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
  });
  $(".virtual-casino-slider").slick({
    arrows: false,
    dots: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 900,
    infinite: true,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
  });
  $(".our-casino-slider").slick({
    // slidesToScroll: 4,
    // slidesToShow: 4,
    // vertical: true,
    // verticalSwiping: true,
    arrows: false,
    dots: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 900,
    infinite: true,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
  });
});

$(window).scroll(function () {
  var winScrollTop = $(window).scrollTop();
  var winHeight = $(window).height();
  var fromBottom = (winHeight * 50) / 100;
  var top = winScrollTop + fromBottom;
  $("#floater").css({
    top: top + "px",
  });
});

$(function () {
  $.getJSON("https://api.ipify.org?format=jsonp&callback=?", function (json) {
    IP_ADDRESS = json.ip;
    localStorage.setItem("clientAddr", json.ip);
  });
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 6) {
    $(".right-sidebar").addClass("sticky");
  }
  if ($(this).scrollTop() < 6) {
    $(".right-sidebar").removeClass("sticky");
  }
});

$(document).on("click", ".nav-tabs .nav-item", function () {
  centerItFixedWidth($(this), $(this).parent());
});

$(document).on("click", ".nav-pills .nav-item", function () {
  centerItFixedWidth($(this), $(this).parent());
});

function centerItFixedWidth(target, outer) {
  var out = $(outer);
  var tar = $(target);
  var x = out.width();
  var y = tar.outerWidth(true);
  var z = tar.index();
  var q = 0;
  var m = out.find("li");
  //Just need to add up the width of all the elements before our target.
  for (var i = 0; i < z; i++) {
    q += $(m[i]).outerWidth(true);
  }
  out.animate(
    {
      scrollLeft: Math.max(0, q - (x - y) / 2),
    },
    300
  );
}

$(document).click(function (e) {
  if (!$(e.target).is(".user-dropdown")) {
    $(".user-dropdown.collapse").collapse("hide");
  }
});

$(document).click(function (e) {
  if (
    !$(e.target).is(".casino-search i") &&
    !$(e.target).is(".casino-search .search-icon") &&
    !$(e.target).is(".casino-search .form-control")
  ) {
    $(".casino-search").removeClass("open-search");
    $(".casino-search").addClass("close-search");
  }
});

$(document).on("mouseenter", ".ifTooltip", function () {
  var $this = $(this);
  //- console.log($this.text())
  //- console.log(this.offsetWidth, this.scrollWidth)
  if (this.offsetWidth < this.scrollWidth) {
    //- console.log('here')
    $this.tooltip({
      title: $this.text(),
      placement: "bottom",
    });
    $this.tooltip("show");
  }
});

$(".home-new .menu-button-mobile").click(function () {
  $(".login-mobile-menu").show();
});

$(".home-new .close-mobile-menu").click(function () {
  $(".login-mobile-menu").hide();
});
