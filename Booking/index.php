<?php
$page_loc = 'booking';
$path_back = '../';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include $path_back.'Templates/Global/head.php' ?>
  </head>
  <body id="booking">
  
  	<?php include $path_back.'Templates/Global/navigation.php' ?>
  	
	<script src='https://squareup.com/appointments/buyer/widget/daeb64a0-95f2-4a1e-8a6f-4f08b92d2a8c/12QARAKR1YM1A.js'></script>

  	<?php include $path_back.'Templates/Global/footer.php' ?>
  
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
	<script src="<?php echo $path_back ?>Assets/js/custom.js"></script>
  
  	<script>
	$(document).ready(function() {
		
    	var dialog = bootbox.dialog({
    		message: '<p style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> Loading Booking App...</p>',
    		closeButton: false
    	});
    	
	});
	
	$(window).on('load', function(e) {
		bootbox.hideAll();
	});
  	</script>
  </body>
</html>