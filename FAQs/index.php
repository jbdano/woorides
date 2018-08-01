<?php
$page_loc = 'faqs';
$path_back = '../';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include $path_back.'Templates/Global/head.php' ?>
  </head>
  <body>
  
  	<?php include $path_back.'Templates/Global/navigation.php' ?>
  
  	<?php include $path_back.'Templates/FAQs/faqs.php' ?>
  	
  	<?php include $path_back.'Templates/Global/footer.php' ?>
  
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="../Assets/js/custom.js"></script>
  
  	<script>
  	$(document).ready(function() {
  		$('#faq-section').removeClass('preload-hide');
  		
  		$('.faq-question').on('click', function(e) {
  			
  			if ($(this).hasClass('faq-question-active')) {
  				$(this).removeClass('faq-question-active');
  			}
  			else {
  	  			$('.faq-question').removeClass('faq-question-active');
  	  			$(this).addClass('faq-question-active');
  			}
  		});
  	});
  	</script>
  </body>
</html>