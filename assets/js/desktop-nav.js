$(document).ready(function () {
	$('.desktopnav li.menu-item').hoverIntent(function () {
	    $(this).toggleClass("open");
		$(this).find("> .sub-menu").animate({height:'toggle'},500);
	});

	$('.desktopnav #search-btn').click(function () {
		$(".menu-radford-container").animate({width:'toggle'},500);
		$(this).animate({left: 'toggle'},500);
		$("#hamburger-btn").fadeIn();
		$("input#search").animate({width:'100%'},500);
		$("input#search").select();
	});

	$('.desktopnav #hamburger-btn').click(function () {
		$(".menu-radford-container").animate({width:'toggle'},500);
		$('#search-btn').animate({left: 'toggle'},500);
		$("#hamburger-btn").fadeOut();
		$("input#search").animate({width:'0'},500);
		$("input#search").select();
	});

	$('.home').prev('.breadcrumbs').addClass('home-bc');

});



