
	var path = window.location.pathname;
	var pathQ = window.location.pathname+window.location.search;
	if(path == "/lista"){
		if(pathQ.indexOf("trabajo")!=-1){
				$('#lgi3').addClass('active');
				$('#contactoIntro').removeClass('contactoIntro');
				$('#contactoIntro').addClass('bgtrabajos');
			}
			else{
				if(pathQ.indexOf("publicidad")!=-1){
					$('#lgi4').addClass('active');
				}
				else{
					if(pathQ.indexOf("mascotas")!=-1){
						$('#lgi5').addClass('active');
						$('#contactoIntro').removeClass('contactoIntro');
						$('#contactoIntro').addClass('bgpets');
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
				$('#contactoIntro').removeClass('contactoIntro');
				$('#contactoIntro').addClass('bginmo');
			}
			else{
				if(path == "/vatodo"){
					$('#lgi6').addClass('active');
				}
			}
		}
	}


	function readCookie(name) {

  var nameEQ = name + "="; 
  var ca = document.cookie.split(';');

  for(var i=0;i < ca.length;i++) {

    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) {
      return decodeURIComponent( c.substring(nameEQ.length,c.length) );
    }

  }

  return "";
}

function eliminarBotones() {

  var nameEQ = "reps="; 
  var ca = document.cookie.split(';');

  for(var i=0;i < ca.length;i++) {

    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) {
      /*return*/ var str = decodeURIComponent( c.substring(nameEQ.length,c.length) );
      var dato = str.split(" ");
      for (var i=0; i<str.length; i++) { $("#"+dato[i]).remove() }
    }

  }

  return "";
}

function realizaProceso(id){
        $.ajax({                
                url:   '/ajax/updateVote.php?id='+id,
                type:  'post',
                success:  function (response) {     
                    $("#report"+id).remove();
                    var d = new Date();
                    d.setTime(d.getTime() + (60*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = "reps=" + readCookie("reps") + encodeURIComponent( " report"+id );
                    document.cookie = expires;              
                }
        });
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
