// set initial variables
var $showMenu;

$(function() {
	firstLoad();
});

function firstLoad() {
	initVars();
	showMenu();
}

// function to set dom vars, etc that will not change
function initVars() {
	$nav 	= $('div#nav');
	$showMenu 	= $('a#mainNav');
}

// show hide menu
function showMenu(){
	$showMenu.click(function(){
		if ($nav.hasClass('expand')) {
			menuOut();
		} else {
			menuIn();
		}
		return false;
	});
}
function menuOut() {
	$nav.removeClass('expand');
}
function menuIn() {
	$nav.addClass('expand');
}	
