
$(document).ready(function() {
	
	$('.serv-navTab').on('click', function(e) {
		
		var firstTab = $('#services-section .nav-tabs')[0].firstElementChild;
		var lastTab = $('#services-section .nav-tabs')[0].lastElementChild;
		var activeTabHash = $('#services-section .nav-tabs li.active a')[0].hash;
		console.log(activeTabHash);
		
		if ( e.currentTarget.classList.contains('serv-navTab-left') ) {
			
			var previousSibling = $('#services-section .nav-tabs li.active')[0].previousElementSibling;
//			$(activeTabHash).css("opacity", "0");
			
			if ( $(previousSibling).length === 1 ) {
//				$(previousSibling).find('a').trigger('click');
				$(previousSibling).find('a').tab('show');
			}
			else {
//				$(lastTab).find('a').trigger('click');
				$(lastTab).find('a').tab('show');
			}
			
		}
		else if ( e.currentTarget.classList.contains('serv-navTab-right') ) {
			
			var nextSibling = $('#services-section .nav-tabs li.active')[0].nextElementSibling;
//			$(activeTabHash).css("opacity", "0");
			
			if ( $(nextSibling).length === 1 ) {
//				$(nextSibling).find('a').trigger('click');
				$(nextSibling).find('a').tab('show');
			}
			else {
//				$(firstTab).find('a').trigger('click');
				$(firstTab).find('a').tab('show');
			}
		}
		
	});
	
	  // Add smooth scrolling to all links
	  $(".smoothScroll").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      var anchor = $(hash).offset().top - 60;
	      $('html, body').animate({
	        scrollTop: anchor
	      }, 800, function(){

	        // Add hash (#) to URL when done scrolling (default click behavior)
	        // window.location.hash = hash;
	      });
	    } // End if
	  })
	
	
});