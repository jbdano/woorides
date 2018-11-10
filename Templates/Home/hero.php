<?php ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  


  <!-- Wrapper for slides -->
  <div class="carousel-inner">

  
    <div class="item active">
    	<div class="carousel-graphic graphic-1">
   	     	<div class="carousel-clickzone carousel-clickzone-left"></div>
  			<div class="carousel-clickzone carousel-clickzone-right"></div>
    	</div>
	    <div class="home-hero-caption">
	   		<h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
	   		<p>Worcester's premier pedicab service</p>
	   		<!-- <a href="Booking/" class="theme-btn-cta-primary webLink">TAKE A RIDE</a> -->
	   		<a href="tel:1-508-966-8439" class="theme-btn-cta-primary teleLink">TAKE A RIDE</a>
	  	</div>
    </div>
     
    <div class="item">
    	<div class="carousel-graphic graphic-2">
			<div class="carousel-clickzone carousel-clickzone-left"></div>
			<div class="carousel-clickzone carousel-clickzone-right"></div>
    	</div>
	    <div class="home-hero-caption">
	   		<h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
	   		<p>Add something special to your next event</p>
	   		<a href="<?php echo $path_back; ?>Contact/" class="theme-btn-cta-primary">BOOK AN EVENT</a>
	  	</div>
    </div>

    <div class="item">
		<div class="carousel-graphic graphic-3">
			<div class="carousel-clickzone carousel-clickzone-left"></div>
			<div class="carousel-clickzone carousel-clickzone-right"></div>		
		</div>
		<div class="home-hero-caption">
	   		<h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
	   		<p>COMING SOON: Visit our store to purchase your next bike</p>
	  	</div>
    </div>
    <div class="item">
      	<div class="carousel-graphic graphic-4">
			<div class="carousel-clickzone carousel-clickzone-left"></div>
			<div class="carousel-clickzone carousel-clickzone-right"></div>      	
      	</div>
    	<div class="home-hero-caption">
	   		<h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
	   		<p>More than just rides. Learn how we are impacting the Worcester community.</p>
	   		<a href="<?php echo $path_back; ?>About-Us/" class="theme-btn-cta-primary">ABOUT US</a>
	  	</div>
    </div>
   		
  </div>
 </div>
 
 <style>
 
 	.carousel-inner .item .graphic-1 {
		background-image: url('Assets/img/Ali_Valentine_Yaovi.jpg');
	}
	.carousel-inner .item .graphic-3 {
		background-image: url('Assets/img/WR.png');
	}
	.carousel-inner .item .graphic-2 {
		background-image: url('Assets/img/home_hero.jpg');
	}
	.carousel-inner .item .graphic-4 {
		background-image: url('Assets/img/WR-8.png');
	}
    
    /*
    @media only screen and (min-width: 600px) {
    	.carousel-inner .item .graphic-1 {
    		background-image: url('Assets/img/Ali_Valentine_Yaovi.jpg');
    	}
	   .carousel-inner .item .graphic-3 {
		  background-image: url('Assets/img/WR_md.png');
	   }
	   	.carousel-inner .item .graphic-2 {
    		background-image: url('Assets/img/home_hero.jpg');
    	}
		.carousel-inner .item .graphic-4 {
    		background-image: url('Assets/img/WR-8_md.png');
    	}
    }
    
    @media only screen and (min-width: 1600px) {
		.carousel-inner .item .graphic-3 {
    		background-image: url('Assets/img/WR_lg.png');
    	}
    	.carousel-inner .item .graphic-4 {
    		background-image: url('Assets/img/WR-8_lg.png');
    	}
    }
    */

 </style>