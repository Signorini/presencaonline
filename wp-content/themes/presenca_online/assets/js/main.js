jQuery(document).ready(function ($) {

	//Change background-color from fixed menu-mobile when opened
	$('.menu .navbar-toggle').on('click', function() {

		if($('.menu').hasClass('bg-mob')) {
			$('.menu').removeClass('bg-mob');
		}

		else {
			$('.menu').addClass('bg-mob');
		}
	});

	//Change background-color from menu-mobile when opened
	$('.main-nav .navbar-toggle').on('click', function() {

		if($('.hero .container-nav').hasClass('bg-mob')) {
			$('.hero .container-nav').removeClass('bg-mob');
		}

		else {
			$('.hero .container-nav').addClass('bg-mob');
		}
	});

	
	//Enable swipe in carousels
	$(".carousel").swiperight(function() {
	    $(this).carousel('prev');
    });
   	$(".carousel").swipeleft(function() {
		$(this).carousel('next');
   	});

	//Remove interval from carousel
	$('.carousel-lightbox').carousel({
	    interval: false
	});

	//Smooth Scrolling
	$('[href^=#]').not('.carousel a').click(function (e) {
	  e.preventDefault();
	  var div = $(this).attr('href');
	  $("html, body").animate({
	    scrollTop: $(div).position().top
	  }, "slow");
	});

	//Check height from top to show fixed menu
	var menu = $('.menu');
	var container_footer = $('.container-footer-intro');
	var social_list_fixed = $('.social-list-fixed');
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		var scroll_bottom = $(document).height() - $(window).height() - $(window).scrollTop();
		
		if(scroll >= 357) {
			menu.addClass('top');
		}
		else {
			menu.removeClass('top');
		}

		if(scroll >= 910) {
			social_list_fixed.addClass('top');
		}

		else {
			social_list_fixed.removeClass('top');
		}

		if(scroll_bottom < 310) {
			container_footer.addClass('static');
			
		}
		else {
			container_footer.removeClass('static');

		}
	});
});
