$('#jsonTable').dynatable();
	var path = window.location.pathname;
	var pathQ = window.location.pathname+window.location.search;
	if(path == "/lista"){
		if(pathQ.indexOf("trabajo")!=-1){
				$('#lgi3').addClass('active');
			}
			else{
				if(pathQ.indexOf("publicidad")!=-1){
					$('#lgi4').addClass('active');
				}
				else{
					if(pathQ.indexOf("mascotas")!=-1){
						$('#lgi5').addClass('active');
					}
					else{
						$('#lgi0').addClass('active');
					}
				}
			}		
	}
	else{
		if(path == "/lista_todo"){
			$('#lgi1').addClass('active');			
		}
		else{
			if(path == "/inmobiliaria"){
				$('#lgi2').addClass('active');
			}
			else{
				if(path == "/vatodo"){
					$('#lgi6').addClass('active');
				}
			}
		}
	}
	
(function ($) {

	new WOW().init();

	jQuery(window).load(function() { 
		jQuery("#preloader").delay(100).fadeOut("slow");
		jQuery("#load").delay(100).fadeOut("slow");
	});


	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('.page-scroll a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

})(jQuery);
