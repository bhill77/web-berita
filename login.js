$(document).ready(function () {	
    $('a.login').click(function () {
	$('div.loginform').slideToggle('medium');
	});
});

$(function() {
		$( "div.loginform" ).draggable();
});