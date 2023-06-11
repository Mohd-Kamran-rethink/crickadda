$(document).ready(function(){
	$('#banner-slider').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		autoplay:true,
		autoplayTimeout:10000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			}
		}
	})
	$('.play').on('click',function(){
		owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		owl.trigger('stop.owl.autoplay')
	})

	$('#top-winner-slider').slick({
		infinite: true,
		autoplay:true,
		autoplaySpeed: 0,
		speed: 4000,
		centerMode: true,
		pauseOnHover: false,
		cssEase: 'linear',
		slidesToShow: 6,
		responsive: [
			{
			  breakpoint: 1280,
			  settings: {
				slidesToShow: 5,
			  }
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 850,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 650,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 530,
				settings: {
					slidesToShow: 1.5,
				}
			},
			{
				breakpoint: 420,
				settings: {
					slidesToShow: 1,
				}
			},
		  ]
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

	var input = document.querySelector("#countryphone");
      window.intlTelInput(input, {
        utilsScript: "build/js/utils.js"
      });
	  

});

