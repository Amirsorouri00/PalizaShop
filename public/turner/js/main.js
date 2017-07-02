/*---------------------------------------------------
ACTIVE JS FILES:
	[1. Slicknav ]
	[2. Sticky ]
	[3. Scrollspy ]
	[4. Smooth Scroll ]
	[5. ScrollUp ]
	[6. Video ]
	[7. WOW ]
	[8. NiceScroll ]
	[9. OwlCarousel ]
----------------------------------------------------*/
jQuery(document).ready(function($){
/*-------------------
[1. Slicknav ]
---------------------*/
	$('#nav').slicknav();
/*-------------------
[2. Sticky ]
---------------------*/
	 $("header").sticky({topSpacing:0});
/*-------------------
[3. Scrollspy ]
---------------------*/
	$('body').scrollspy({
		target: '#navbar-example',
		offset: 95
	});
/*-------------------
[4. Smooth Scroll ]
---------------------*/
	var $root = $('html, body');
	$('#nav li a').click(function() {
		var href = $.attr(this, 'href');
		$root.animate({
			scrollTop: $(href).offset().top
		}, 2000, function () {
			window.location.hash = href;
		});
		return false;
	});
/*-------------------
[5. ScrollUp ]
---------------------*/
	$.scrollUp({
		animation: 'slide', // Fade, slide, none
		scrollSpeed: 2000,
		scrollText: [
		  "<i class='fa fa-chevron-up'></i>"
		]
	});
/*-------------------
[6. Video ]
---------------------*/
		var vid = document.getElementById("bgvid");
		var pauseButton = document.querySelector("#polina button");

		function vidFade() {
		  vid.classList.add("stopfade");
		}

		vid.addEventListener('ended', function()
		{
		// only functional if "loop" is removed
		vid.pause();
		// to capture IE10
		vidFade();
		});
		pauseButton.addEventListener("click", function() {
		  vid.classList.toggle("stopfade");
		  if (vid.paused) {
			vid.play();
			pauseButton.innerHTML =[
			  "<i class='fa fa-pause'></i>"
			];
		  } else {
			vid.pause();
			pauseButton.innerHTML = [
			  "<i class='fa fa-play'></i>"
			];
		  }
		})
/*-------------------
[7. WOW ]
---------------------*/
	wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
	  )
	wow.init();
/*-------------------
[8. NiceScroll ]
---------------------*/
    (function () {
   var nice = $("html").niceScroll({
    cursorcolor: '#ffd400',
      cursorwidth: '12px',
      cursorborderradius: '100px',
      cursorborder: '0px solid',
      zindex:"9999"

    });  // The document page (body)
    $("#boxscroll").niceScroll({touchbehavior:true});

    }());
/*-------------------
[9. OwlCarousel ]
---------------------*/
	var owl = $("#owl-demo");
	  owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1000,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [900,3], // betweem 900px and 601px
		  itemsTablet: [600,2], //2 items between 600 and 0
		  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
		  autoPlay: true,
	  });
	 // Custom Navigation Events
	  $(".next").click(function(){
		owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
		owl.trigger('owl.prev');
	  })
});
