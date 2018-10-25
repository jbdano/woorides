<?php
$page_loc = 'home';
$path_back = './';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include 'Templates/Global/head.php' ?>
  </head>
  <body>
  
	<?php include 'Templates/Global/navigation.php' ?>
  
  	<?php include 'Templates/Home/hero.php' ?>
  	
  	<?php include 'Templates/Home/banner-definition.php' ?>
  
  	<?php include 'Templates/Home/our-services.php' ?>
  
  	<?php include 'Templates/Home/new-way-banner.php' ?>
  
  	<?php include 'Templates/Home/our-values.php' ?>
  
  	<?php include 'Templates/Home/work-with-us.php' ?>
  	
  	<?php include 'Templates/Home/press.php' ?>
  	
  	<?php include 'Templates/Global/footer.php' ?>
  
  	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="Assets/js/custom.js"></script>
	
    <!-- cdnjs -->
<!--     <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script> -->
	
	<script>
	
	$(document).ready(function() {
		
		$.fn.isInViewport = function() {
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();
			var viewportTop = $(window).scrollTop() + 100;
			var viewportBottom = viewportTop + $(window).height() - 200;
			return elementBottom > viewportTop && elementTop < viewportBottom;
		};

		function watchForLazyLoaders() {

			$(window).on('scroll', function() {

				$('.lazy:not(.show)').each(function(index) {
					if ( $(this).isInViewport() ) $(this).addClass('show');
				});
				
				if ( $('.lazy:not(.show)').length == 0 ) $(window).off();
			});

		};

		function showVisibleLazyLoaders() {

			$('.lazy:not(.show)').each(function(index) {
				if ( $(this).isInViewport() ) $(this).addClass('show');
			});
		};

		watchForLazyLoaders();
		showVisibleLazyLoaders();
		
		$('.carousel-clickzone-left').on('click', function(e) {
			$("#myCarousel").carousel("prev");
		});
		
		$('.carousel-clickzone-right').on('click', function(e) {
			$("#myCarousel").carousel("next");
		});
		
		$('.home-hero-caption').addClass('show');
		
		$('.serv-navTab').on('click', function(e) {
			
			var firstTab = $('#services-section .nav-tabs')[0].firstElementChild;
			var lastTab = $('#services-section .nav-tabs')[0].lastElementChild;
			var activeTabHash = $('#services-section .nav-tabs li.active a')[0].hash;
			
			if ( e.currentTarget.classList.contains('serv-navTab-left') ) {
				
				var previousSibling = $('#services-section .nav-tabs li.active')[0].previousElementSibling;
				
				if ( $(previousSibling).length === 1 ) {
					$(previousSibling).find('a').tab('show');
				}
				else {
					$(lastTab).find('a').tab('show');
				}
				
			}
			else if ( e.currentTarget.classList.contains('serv-navTab-right') ) {
				
				var nextSibling = $('#services-section .nav-tabs li.active')[0].nextElementSibling;
				
				if ( $(nextSibling).length === 1 ) {
					$(nextSibling).find('a').tab('show');
				}
				else {
					$(firstTab).find('a').tab('show');
				}
			}

		});

		$('#services-section a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$(window).scroll();
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
		      console.log(hash);
		      if (hash === '#top') {
		    	  var mobileMenuOpen = ( $('button.navbar-toggle:not(.collapsed)').length > 0 ) ? true : false;
		    	  if (screen.width < 768 && mobileMenuOpen) {
		    		  $('button.navbar-toggle').trigger('click');
		    	  }
		    	  var anchor = 0;
		      }
		      else {
		    	  var anchor = $(hash).offset().top;
		      }
		      
		      $('html, body').animate({
		        scrollTop: anchor
		      }, 800, function(){

		        // Add hash (#) to URL when done scrolling (default click behavior)
		        // window.location.hash = hash;
		      });
		    } // End if
		  })
		
		// credit: http://www.javascriptkit.com/javatutors/touchevents2.shtml
		function swipedetect(el, callback){
		  
		    var touchsurface = el,
		    swipedir,
		    startX,
		    startY,
		    distX,
		    distY,
		    threshold = 30, //required min distance traveled to be considered swipe
		    restraint = 100, // maximum distance allowed at the same time in perpendicular direction
		    allowedTime = 300, // maximum time allowed to travel that distance
		    elapsedTime,
		    startTime,
		    handleswipe = callback || function(swipedir){}
		  
		    touchsurface.addEventListener('touchstart', function(e){
		        var touchobj = e.changedTouches[0]
		        swipedir = 'none'
		        dist = 0
		        startX = touchobj.pageX
		        startY = touchobj.pageY
		        startTime = new Date().getTime() // record time when finger first makes contact with surface
		        // e.preventDefault()
		    }, false)
		  /*
		    touchsurface.addEventListener('touchmove', function(e){
		        e.preventDefault() // prevent scrolling when inside DIV
		    }, false)
		  */
		    touchsurface.addEventListener('touchend', function(e){
		        var touchobj = e.changedTouches[0]
		        distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
		        distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
		        elapsedTime = new Date().getTime() - startTime // get time elapsed
		        if (elapsedTime <= allowedTime){ // first condition for awipe met
		            if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
		                swipedir = (distX < 0)? 'left' : 'right' // if dist traveled is negative, it indicates left swipe
		            }
		            else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
		                swipedir = (distY < 0)? 'up' : 'down' // if dist traveled is negative, it indicates up swipe
		            }
		        }
		        handleswipe(swipedir)
		        // e.preventDefault()
		    }, false)
		}
		  
		//USAGE:

		var el = document.getElementById('myCarousel');
		swipedetect(el, function(swipedir){
			
		    if (swipedir == 'right') {
		    	$("#myCarousel").carousel("prev");
		    }
		    else if (swipedir == 'left') {
		    	$("#myCarousel").carousel("next");
		    }

		});
	});
	
	</script>
  
  </body>
</html>