
$(document).ready(function() {
	
	$('.navbar-collapse ul.navbar-nav li').on('click', function (e) {
		if (screen.width < 768) {
			$('button.navbar-toggle').trigger('click');
		}
	});
	
	$(document).on('click', function(e) {
		
		if ( $('.navbar-fixed-top .navbar-collapse.in').length > 0 ) {
			
			if (screen.width < 768 ) {
				$('button.navbar-toggle').trigger('click');
			}
		}
	});
	
});