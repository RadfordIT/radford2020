// Mobile Header hamburger menu
$(document).ready(function() {
	$('#mobilenav li.menu-item').click(function () {
	    $(this).toggleClass("open");
		$(this).find("> .sub-menu").animate({height:'toggle'},500);
	});

	$('#mobilenavbar button').click(function () {
		$("#mobilenav").animate({height:'toggle'},350);
		$("#mobilenav").toggleClass("open")
	});
})
