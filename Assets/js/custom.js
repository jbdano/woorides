
$(document).ready(function() {
	
	$('.navbar-collapse ul.navbar-nav li').on('click', function (e) {
		if (screen.width < 768) {
			$('button.navbar-toggle').trigger('click');
		}
	});
	
});