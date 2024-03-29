$(document).ready(function() {
	$(window).resize(function() {
		if ($('#overlay').css('display') === 'none') {
			$('#responsive-nav').css({'left': '-' + $(window).width() + 'px'});
		}
	});

	$('#responsive-nav').css({'left': '-' + $(window).width() + 'px'});

	$('#responsive-nav-trigger').click(function() {
		$('#overlay').fadeToggle();
		$('#responsive-nav').animate({'left': '0'}, 500);
		$('#responsive-nav').css({'box-shadow': '0 0 15px 0 rgba(0, 0, 0, 0.25)'});
		$('#responsive-nav').addClass('active');
	});

	$('#overlay').click(function() {
		$('#overlay').fadeToggle();
		$('#responsive-nav').css({'box-shadow': 'none'});
		$('#responsive-nav').animate({'left': '-' + $(window).width() + 'px'}, 500);
	});

	$('.portfolio-image').mouseenter(function() {
		var prop_status = $(this).children().css("display");

		if (prop_status != "block") {
			$(this).children().fadeIn(200);
		}
	});

	$('.portfolio-meta').mouseleave(function() {
		var prop_status = $(this).css("display");

		if (prop_status == "block") {
			$(this).fadeOut(200);
		}
	});
});