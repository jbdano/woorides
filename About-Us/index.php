<?php
$page_loc = 'aboutus';
$path_back = '../';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include $path_back.'Templates/Global/head.php' ?>
  </head>
  <body>
  
  	<?php include $path_back.'Templates/Global/navigation.php' ?>

 	<div id="values-section">
 		<div id="values" class="scroll-flag"></div>
		<h2 class="section-header">ABOUT <span class="theme-color-yellow">US</span></h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h5 class="content-title">We are here for you.</h5>
					<p class="content-description">WooRides is a zero-carbon emission transportation fleet 
					serving Worcester's vibrant community of residents, students, and professionals. We have 
					begun by using traditional technologies to connect Worcester's history and culture into 
					the future of Worcester's growth. Through our services, we envision alternative futures 
					rooted in sustainable technologies, equitable cities, and small business enterprise. 
					Whether to enjoy nightlife, make it to a business meeting, or plan an event, we are 
					here for you.</p>
				</div>
				<div class="col-sm-6">
					<img id="values-description-img" src="../Assets/img/Ali_Valentine_Yaovi.jpg">
				</div>
			</div>

		</div>
	</div>

	<div id="involvement-section">
		<div class="container">
		
			<img class="pedicab-img lazy lazy-fade-right" src="../Assets/img/WRlogovector-fromnewpage.svg">
		
			<div class="involvement">
				<div class="flexbox flexbox-r">
					<div class="flex-graphic flex-graphic-wr">
						<img src="../Assets/img/worcester-roots-logo.png" class="lazy lazy-fade-right">
					</div>
					<div class="flex-content flex-content-wr lazy">
						<h4>Worcester is in our roots...literally.</h4>
						<p>We are a part of Worcester Roots and proudly operate as a cooperative company. That sounds  
						really fancy, but in reality it's just a different way to run a business. Instead of profit  
						and competition, we care about community need, cooperation, people, and the environment.</p>
					</div>
				</div>
				<div class="dashed-border dashed-border--top"></div>
				<div class="dashed-border dashed-border--right"></div>
				<div class="dashed-border dashed-border--bottom"></div>
			</div>
			
			<div class="involvement">
				<div class="flexbox flexbox-wcac">
					<div class="flex-graphic flex-graphic-wcac">
						<img src="../Assets/img/community-action.jpg" class="lazy lazy-fade-left">
					</div>
					<div class="flex-content flex-content-wcac lazy">
						<h4>Investing in the Woo's youth.</h4>
						<p>We participate in Worcester Community Action Council's YouthWorks Summer Jobs Program. 
						This program create summer jobs for low-income, at-risk, inner city youth between the 
						ages of 14 and 21. We currently employ four youth workers who are doing an amazing job 
						helping us set up our retail shop, plan our Block Party, and work on our bikes. We hope 
						to inspire youth and create a path for them to get involved in the bike industry.</p>
					</div>
				</div>
				<div class="dashed-border dashed-border--left"></div>
				<div class="dashed-border dashed-border--bottom"></div>
			</div>
			
			<div class="involvement">
				<div class="flexbox flexbox-eab">
					<div class="flex-graphic flex-graphic-eab">
						<img src="../Assets/img/EarnABikeLogo.png" class="lazy lazy-fade-right">
					</div>
					<div class="flex-content flex-content-eab lazy">
						<h4>EARN-A-BIKE. Earn the future.</h4>
						<p>We are proud to partner with Worcester Earn-A-Bike on a shared venture in used bicycle 
						sales in which we stock a selection of upcycled bicycles from Worcester Earn-A-Bike. We 
						are pumped to bring refurbished bike sales to downtown Worcester.This allows WEAB to 
						focus on its core mission & patrons - running programming to facilitate bicycle use and 
						keeping on hand used bicycles more affordable in the heart of Main South. Together, we 
						see a future with safer roads and a culture built around accessibility of complete streets 
						for all!</p>
					</div>
				</div>
				<div class="dashed-border dashed-border--right"></div>
			</div>
			
		</div>
	</div>

  	<?php include $path_back.'Templates/Global/footer.php' ?>
  
  	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?php echo $path_back ?>Assets/js/custom.js"></script>
	
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
	});

	

	</script>

  </body>
</html>