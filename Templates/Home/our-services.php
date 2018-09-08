<?php 

$data = array();

// RIDES
//
array_push($data, array(
    'tabName' => 'Rides',
    'tabID' => 'brides',
    'overview' => array(
        'imgPath' => 'Assets/img/home_hero.jpg',
        'titlePrefix' => 'YOU',
        'bodyText' => "Want a fun ride to your favorite venue, restaurant, or bar in the Canal District, City 
		      		Square, or on Shrewsbury Street? Take our pedicabs! Operating Thursday through Saturday 
		      		nights from 10:00pm to 2:00am. Starting at just $5!",
        'buttons' => array(
            array(
                'title' => 'BOOK A RIDE',
                'href' => $path_back.'Booking',
                'className' => 'theme-btn-cta-primary serv-overview-btn'
            )
        )
    ),
    'reviews' => array(
        array(
            'name' => 'Richie Caldwell',
            'quote' => 'My kids loved it!! After the 3rd ride my little one asked can we go again! I met the co-owner and he is a real cool dude; down to earth! Good luck!',
            'imgClass' => 'review-headshot-richie',
            'numStars' => 5
        ),
        array(
            'name' => 'Norma Iris',
            'quote' => 'My driver was very friendly and funny!! Great safe and calm ride! Will certainly take my little guy for a ride!! Will enjoy it again for sure!!',
            'imgClass' => 'review-headshot-norma',
            'numStars' => 5
        )
    )
));

// BOOK US
//
array_push($data, array(
    'tabName' => 'Book Us',
    'tabID' => 'bookus',
    'overview' => array(
        'imgPath' => 'Assets/img/home_hero.jpg',
        'titlePrefix' => 'CUSTOM',
        'bodyText' => "Book WooRides for all your custom ride needs. Book one of our four tours with us on weekends 
	      		and see Worcester like you've never seen the city before. Or book our services for your event 
	      		to give your guests an extra special experience anytime you're getting a crowd together.",
        'buttons' => array(
            array(
                'title' => 'SCHEDULE A TOUR',
                'href' => $path_back.'Booking',
                'className' => 'theme-btn-cta-primary serv-overview-btn'
            ),
            array(
                'title' => 'BOOK AN EVENT',
                'href' => $path_back.'Contact',
                'className' => 'theme-btn-cta-secondary serv-overview-btn'
            )
        )
    ),
    'reviews' => array(
        array(
            'name' => 'Richie Caldwell',
            'quote' => 'My kids loved it!! After the 3rd ride my little one asked can we go again! I met the co-owner and he is a real cool dude; down to earth! Good luck!',
            'imgClass' => 'review-headshot-richie',
            'numStars' => 5
        ),
        array(
            'name' => 'Norma Iris',
            'quote' => 'My driver was very friendly and funny!! Great safe and calm ride! Will certainly take my little guy for a ride!! Will enjoy it again for sure!!',
            'imgClass' => 'review-headshot-norma',
            'numStars' => 5
        )
    )
));

// ADVERTISING
//
array_push($data, array(
    'tabName' => 'Advertising',
    'tabID' => 'advertising',
    'overview' => array(
        'imgPath' => 'Assets/img/WR.jpg',
        'titlePrefix' => 'ADVERTISE',
        'bodyText' => "Our pedicabs provide the unique opportunity for local businesses 
                    to reach customers in Worcester. Advertise with us to reach your next customers across the city.",
        'buttons' => array(
            array(
                'title' => 'ADVERTISE WITH US',
                'href' => $path_back.'Contact',
                'className' => 'theme-btn-cta-primary serv-overview-btn'
            )
        )
    ),
    'reviews' => array(
        array(
            'name' => "Tim O'Neil",
            'quote' => "Took a ride from the rooftop party at Union Station down to Water St. Our driver made the ride a blast and it was faster than waiting on a Lyft!",
            'imgClass' => 'review-headshot-tim',
            'numStars' => 5
        ),
        array(
            'name' => 'Maya R.',
            'quote' => "We had so much fun riding with WooRides! A great way to get around downtown Worcester. Would recommend!",
            'imgClass' => 'review-headshot-maya',
            'numStars' => 5
        )
    )
));

// SHOP
//
array_push($data, array(
    'tabName' => 'Shop',
    'tabID' => 'shop',
    'overview' => array(
        'imgPath' => 'Assets/img/Priscilla_Messinger.jpg',
        'titlePrefix' => 'YOU',
        'bodyText' => "Looking for your next set of wheels? We've partnered with Worcester Earn-A-Bike 
	      		to sell bikes in our shop at 22 Portland St. Rides coming soon!",
        'buttons' => array()
    ),
    'reviews' => array(
        array(
            'name' => 'Daysha Williams',
            'quote' => "Loved the ride & respect the Mission! Can't wait for warmer weather!",
            'imgClass' => 'review-headshot-daysha',
            'numStars' => 5
        ),
        array(
            'name' => 'Wesam Al-Salman',
            'quote' => 'Fantastic idea and under supervision of honest and professional people.',
            'imgClass' => 'review-headshot-wesam',
            'numStars' => 5
        )
    )
));

// COMMUNITY SPACE
//
array_push($data, array(
    'tabName' => 'Community Space',
    'tabID' => 'community',
    'overview' => array(
        'imgPath' => 'Assets/img/Resized_20170811.jpg',
        'titlePrefix' => 'NOTJUST',
        'bodyText' => "We are about more than just rides. We are about building community. Our event space is 
	      		open to promote culture, art, and anything else that brings people together in Worcester. 
	      		Contact us today about hosting a gallery, performance, or event.",
        'buttons' => array(
            array(
                'title' => 'CONTACT US',
                'href' => $path_back.'Contact',
                'className' => 'theme-btn-cta-primary serv-overview-btn'
            )
        )
    ),
    'reviews' => array(
        array(
            'name' => 'Sabrina Staples',
            'quote' => "Hitched a ride with woorides at the free Eric Parlay concert tonight. We enjoyed the lift and the price was very reasonable!!",
            'imgClass' => 'review-headshot-sabrina',
            'numStars' => 5
        ),
        array(
            'name' => 'Nate Fournier',
            'quote' => 'Excellent service. Yaovi is the man! And shout out to Shahbaz!',
            'imgClass' => 'review-headshot-nate',
            'numStars' => 5
        )
    )
));

?>


<div id="services-section">
	<div id="services" class="scroll-flag"></div>
	<h2 class="section-header">Our <span class="theme-color-yellow">Services</span></h2>
	<ul class="nav nav-tabs">
	
		<?php
		foreach ($data as $i => $tab_info) {
		    
		    $tabClassName = ($i == 0) ? 'active' : '';
		    echo '<li class="'.$tabClassName.'"><a data-toggle="tab" href="#'.$tab_info['tabID'].'">'.$tab_info['tabName'].'</a></li>';
		}
		?>

	  </ul>
	  <div class="tab-content">
	  
	  	<div class="serv-navTab-left serv-navTab"><img src="Assets/img/back.svg"></div>
	  	<div class="serv-navTab-right serv-navTab"><img src="Assets/img/right-arrow.svg"></div>
	  	
	  	<?php
	  	foreach ($data as $i => $tab_info) {
	  	    
	  	    $tabClassName = ($i == 0) ? 'in active' : '';
	  	    
	  	    echo
	  	    '<div id="'.$tab_info['tabID'].'" class="tab-pane fade '.$tabClassName.'">'.
	  	        '<div class="overview-rides">'.
	  	            '<div class="overview-rides-img">'.
	  	                '<img src="'.$tab_info['overview']['imgPath'].'">'.
  	                '</div>'.
	  	            '<div class="overview-rides-content lazy lazy-fade-left">'.
    	  	            '<h5 class="overview-rides-content-title"><span class="theme-color-yellow">'.$tab_info['overview']['titlePrefix'].'</span>RIDES</h5>'.
    	  	            '<p>'.$tab_info['overview']['bodyText'].'</p>';
	  	    
	  	    foreach ($tab_info['overview']['buttons'] as $index => $button) {
	  	        echo 
	  	                '<a href="'.$button['href'].'" class="'.$button['className'].'">'.$button['title'].'</a>';
	  	    }
	  	    
	  	    echo
    	  	        '</div>'.
    	  	    '</div>'.
	  	        '<div class="reviews-ruler ruler-break">'.
	  	            '<hr class="revRul-line ruler-break-line">'.
	  	            '<h2 class="revRul-title ruler-break-title">Reviews</h2>'.
	  	        '</div>'.
	  	        '<div id="reviews-section">'.
	  	            '<div class="rev-grid">';
	  	    
	  	    foreach ($tab_info['reviews'] as $review) {
	  	        
	  	        echo
        	  	        '<div class="review review-one">'.
                            '<div class="review-headshot">'.
                                '<div class="review-headshot-img '.$review['imgClass'].'"></div>'.
                            '</div>'.
                            '<div class="review-content">'.
                                '<div class="review-rating">';
	  	        
	  	        $rating = intval($review['numStars']);
	  	        for ($k = 0 ; $k < $rating; $k++){ echo '<i class="fas fa-star"></i>'; }

                echo
                                '</div>'.
                                '<p class="review-content-quote">"'.$review['quote'].'"</p>'.
                                '<p class="review-content-author">- '.$review['name'].'</p>'.
                            '</div>'.
                        '</div>';
	  	    }
	  	    
	  	    echo
	  	            '</div>'.
	  	        '</div>'.
	  	    '</div>';
	  	}
	  	?>

	  </div>	
</div>