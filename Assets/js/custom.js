
$(document).ready(function() {
	
	$('.serv-navTab').on('click', function(e) {
		
		var firstTab = $('#services-section .nav-tabs')[0].firstElementChild;
		var lastTab = $('#services-section .nav-tabs')[0].lastElementChild;

		
		if ( e.currentTarget.classList.contains('serv-navTab-left') ) {
			
			var previousSibling = $('#services-section .nav-tabs li.active')[0].previousElementSibling;
			var lastSibling = $('#services-section .nav-tabs li.active')[0].previousElementSibling;

			if ( $(previousSibling).length === 1 ) {
				$(previousSibling).find('a').trigger('click');
			}
			else {
				$(lastTab).find('a').trigger('click');
			}
			
		}
		else if ( e.currentTarget.classList.contains('serv-navTab-right') ) {
			
			var nextSibling = $('#services-section .nav-tabs li.active')[0].nextElementSibling;

			if ( $(nextSibling).length === 1 ) {
				$(nextSibling).find('a').trigger('click');
			}
			else {
				$(firstTab).find('a').trigger('click');
			}
		}
		
	});
	
	
});