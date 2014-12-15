var tomwilkins = (function(){

	var init,
		initPageScroll;


	init = function(){

		$(document).ready(function(){
			initPageScroll();
		});

	};

	initPageScroll = function(){
		
		$('nav > a').click(function(e){
			e.preventDefault();

			var url = this.href,
				section = url.substring(url.indexOf("#"));

			$('html, body').animate({
		        scrollTop: $(section).offset().top
		    }, 1000, 'easeOutExpo', function(){
		    	window.location.hash=section;
		    });

			$('.active').removeClass('active');
		    $('[href=' + section + ']').addClass('active');
		});

		if(window.location.hash === ''){
			$('[href="#about"]').click().addClass('active');
		}else{
			$('[href="' + window.location.hash + '"]').addClass('active');
		}
	};

	return{
		init: init
	};

})();

tomwilkins.init();