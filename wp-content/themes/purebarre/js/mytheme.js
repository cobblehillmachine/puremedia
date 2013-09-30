$(document).ready(function() {
	footerHeight();
	showSubnav();

});

$(window).resize(function() {
	footerHeight();

});

$(window).load(function() {
	footerHeight();
});

function footerHeight(){
var footer = $('#footer'),
windowHeight = $(window).height(),
combinedHeight = footer.offset().top + 125,
height = (windowHeight > combinedHeight) ? windowHeight - footer.offset().top : 125;
// height = windowHeight - footer.offset().top;
//height = windowHeight - combinedHeight -22;
footer.css({'height':height});
}

function showSubnav() {
	$('.menu-item').each(function() {
		$(this).on({
			mouseenter: function(e){$(this).children('.sub-menu').show(); e.stopPropagation();},
			mouseleave: function(){$(this).children('.sub-menu').hide();}
		});
		// $('.sub-menu').on({
		// 	mouseleave: function(){$(this).hide();}
		// });
	});
}
