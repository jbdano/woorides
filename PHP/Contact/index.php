<?php
$page_loc = 'contact';
$path_back = '../';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include $path_back.'Templates/Global/head.php' ?>
  </head>
  <body>
  
  	<?php include $path_back.'Templates/Global/navigation.php' ?>
  
  	<?php include $path_back.'Templates/Contact/contact.php' ?>

  	<?php include $path_back.'Templates/Global/footer.php' ?>
  
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?php echo $path_back ?>Assets/js/custom.js"></script>
  
  	<script>
  	$(document).ready(function() {
  		$('#contact-section').removeClass('preload-hide');
  		
  		$('#contact-form-submit').on('click', function(e) {
  			e.preventDefault();
  			
  		    document.body.scrollTop = 0; // For Safari
  		    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  			
  			setTimeout(function(){
  				$('#contact-submit-message').removeClass('hidden');
  			}, 50);
  		});
  		
  		$('#contact-form input[type="radio"]').on('change', function(e) {
  			var serviceType = $(this).val();
  			console.log(serviceType);
  			
  			$('#event_questions').addClass('hidden');
  			$('#advertise_questions').addClass('hidden');
  			
  			if (serviceType == 'events') {
  				$('#event_questions').removeClass('hidden');
  			}
  			else if (serviceType == 'advertising') {
  				$('#advertise_questions').removeClass('hidden');
  			}
  		});
  	});
  	</script>
  </body>
</html>