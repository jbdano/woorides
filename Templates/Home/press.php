<?php 

$data = array();

array_push($data, array(
    'title' => "MASSLIVE",
    'backgroundClass' => "asi-img-masslive",
    'linkTo' => "https://www.masslive.com/news/worcester/index.ssf/2017/07/woorides_is_worcesters_new_ped.html"
));

array_push($data, array(
    'title' => "WORCESTER\nTELEGRAM & GAZETTE",
    'backgroundClass' => "asi-img-wtg",
    'linkTo' => "http://www.telegram.com/news/20170725/pedicabs-add-to-worcester-transportation-mix"
));

array_push($data, array(
    'title' => "WORCESTER\nBUSINESS JOURNAL",
    'backgroundClass' => "asi-img-wbj",
    'linkTo' => "http://www.wbjournal.com/article/20170707/NEWS01/170709979/new-pedicab-service-in-worcester"
));

?>

<div id="as-seen-in-section">
	<div id="press" class="scroll-flag"></div>
	<div class="reviews-ruler ruler-break">
		<hr class="revRul-line ruler-break-line">
		<h2 class="revRul-title ruler-break-title">AS SEEN IN</h2>
	</div>
	<div id="asi-grid">
	
	<?php
	foreach ($data as $press) {
	    
	    echo 
	    '<div class="asi-item">'.
	       '<a href="'.$press['linkTo'].'" target="_blank">'.
	           '<div class="asi-img lazy '.$press['backgroundClass'].'">'.
	               '<h4 class="asi-text-overlay">'.nl2br($press['title']).'</h4>'.
               '</div>'.
           '</a>'.
       '</div>';
	}
	?>
	
	</div>
</div>