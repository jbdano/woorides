<?php 
$navBrandHref = ($page_loc === 'home') ? '#top' : '/';
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar icon-bar-1"></span>
        <span class="icon-bar icon-bar-2"></span>
        <span class="icon-bar icon-bar-3"></span>
   	    <span class="icon-bar icon-bar-cross icon-bar-cross-4"></span>
        <span class="icon-bar icon-bar-cross icon-bar-cross-5"></span>
      </button>
      <a class="navbar-brand smoothScroll" href="<?php echo $navBrandHref; ?>"><img src="<?php echo $path_back ?>Assets/img/WRlogovectorSVG.svg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="<?php if ($page_loc === 'home') echo '/' ?>#services" id="navItem-services" class="smoothScroll">Services <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php if ($page_loc === 'home') echo '/' ?>#values" id="navItem-values" class="smoothScroll">Values</a></li>
        <li><a href="<?php if ($page_loc === 'home') echo '/' ?>#press" id="navItem-press" class="smoothScroll">Press</a></li>
        <li><a href="/FAQs" id="navItem-faqs">FAQs</a></li>
        <li><a href="/Booking" id="navItem-cta" class="navbar_contact_btn">Book Tour</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>