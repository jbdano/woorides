<?php
$PAGETITLE = 'Woorides';
$ACTIVEPAGE = 'home';
$ROOTPATH = './';

include $ROOTPATH.'config.php'; 
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $ROOTPATH.'head.php'; ?>
</head>

<body>

    <div id="myCarousel"
         class="carousel slide"
         data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel"
                data-slide-to="0"
                class="active"></li>
            <li data-target="#myCarousel"
                data-slide-to="1"></li>
            <li data-target="#myCarousel"
                data-slide-to="2"></li>
            <li data-target="#myCarousel"
                data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <div class="carousel-graphic graphic-1">
                    <div class="carousel-clickzone carousel-clickzone-left"></div>
                    <div class="carousel-clickzone carousel-clickzone-right"></div>
                </div>
                <div class="lazy-fade lazy-fade-left home-hero-caption">
                    <h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
                    <p>Worcester's premier pedicab service</p>
                    <a href="tel:1-508-966-8439"
                       class="theme-btn-cta-primary teleLink">TAKE A RIDE</a>
                </div>
            </div>

            <div class="item">
                <div class="carousel-graphic graphic-2">
                    <div class="carousel-clickzone carousel-clickzone-left"></div>
                    <div class="carousel-clickzone carousel-clickzone-right"></div>
                </div>
                <div class="lazy-fade lazy-fade-left home-hero-caption">
                    <h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
                    <p>Add something special to your next event</p>
                    <a href="<?php echo WEBSERVERROOT.'Contact/' ?>"
                       class="theme-btn-cta-primary">BOOK AN EVENT</a>
                </div>
            </div>

            <div class="item">
                <div class="carousel-graphic graphic-3">
                    <div class="carousel-clickzone carousel-clickzone-left"></div>
                    <div class="carousel-clickzone carousel-clickzone-right"></div>
                </div>
                <div class="lazy-fade lazy-fade-left home-hero-caption">
                    <h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
                    <p>COMING SOON: Visit our store to purchase your next bike</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-graphic graphic-4">
                    <div class="carousel-clickzone carousel-clickzone-left"></div>
                    <div class="carousel-clickzone carousel-clickzone-right"></div>
                </div>
                <div class="lazy-fade lazy-fade-left home-hero-caption">
                    <h1><span class="theme-color-yellow">WOO</span>RIDES</h1>
                    <p>More than just rides. Learn how we are impacting the Worcester community.</p>
                    <a href="<?php echo WEBSERVERROOT.'About-Us/'; ?>"
                       class="theme-btn-cta-primary">ABOUT US</a>
                </div>
            </div>

        </div>
    </div>

    <style>
    .carousel-inner .item .graphic-1 {
        background-image: url(<?php echo $ASSETPATH.'img/Ali_Valentine_Yaovi.jpg'; ?>);
    }

    .carousel-inner .item .graphic-3 {
        background-image: url(<?php echo $ASSETPATH.'img/WR.png'; ?>);
    }

    .carousel-inner .item .graphic-2 {
        background-image: url(<?php echo $ASSETPATH.'img/home_hero.jpg'; ?>);
    }

    .carousel-inner .item .graphic-4 {
        background-image: url(<?php echo $ASSETPATH.'img/WR-8.png'; ?>);
    }
    </style>

    <div id="definition-banner">
        <div class="defBan-img-cell">
            <!-- IMG placeholder -->
            <img src="<?php echo $ASSETPATH; ?>img/WRlogovector2SVG.svg"
                 class="lazy-fade lazy-fade-right">
        </div>
        <div class="defBan-def-cell">
            <p><strong>PEDICAB / ' pedikab /</strong> noun</p>
            <p>A human powered, fully immersive mode of transportation;<br>great for rides, tours, events, and
                advertising. Also, <span style="font-weight: bold;">rickshaw</span></p>
        </div>
    </div>

    <?php
    include $ASSETPATH.'components/home/our-services.php';
    ?>

    <div id="valueProp-break-section">
        <h3 class="lazy-fade">A new way to get around the <i class="fas fa-heart"></i> of the Commonwealth.</h3>
    </div>

    <div id="values-section">
        <div id="values"
             class="scroll-flag"></div>
        <h2 class="section-header">Our <span class="theme-color-yellow">Values</span></h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="content-title">We're a cooperative company.</h5>
                    <p class="content-description">WooRides is a zero-carbon emission transportation fleet serving
                        Worcester's vibrant community of
                        residents, students, and professionals. We have begun by using traditional technologies to
                        connect
                        Worcester's history and culture into the future of Worcester's growth. Through our services, we
                        envision alternative futures rooted in sustainable technologies, equitable cities, and small
                        business enterprise. Whether to enjoy nightlife, make it to a business meeting, or plan an
                        event,
                        we are here for you!</p>
                    <a href="<?php echo $ASSETPATH; ?>About-Us"
                       class="theme-btn-cta-primary values-overview-btn">Read More</a>
                </div>
                <div class="col-sm-6">
                    <img id="values-description-img"
                         src="<?php echo $ASSETPATH; ?>img/Ali_Valentine_Yaovi_sm.jpg"
                         class="lazy-fade lazy-fade-up">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="values-icon lazy-fade lazy-fade-up"
                         src="<?php echo $ASSETPATH; ?>img/003-green.svg">
                    <h4 class="values-title">Sustainable</h4>
                    <p class="values-description">Our human-powered pedicabs are an alternative to carbon-emitting
                        vehicles.</p>
                </div>
                <div class="col-sm-4">
                    <img class="values-icon lazy-fade lazy-fade-up"
                         src="<?php echo $ASSETPATH; ?>img/002-birthday.svg">
                    <h4 class="values-title">fun</h4>
                    <p class="values-description">The most memorable way to get from point A to point B or tour the
                        city.</p>
                </div>
                <div class="col-sm-4">
                    <img class="values-icon lazy-fade lazy-fade-up"
                         src="<?php echo $ASSETPATH; ?>img/001-ruler.svg">
                    <h4 class="values-title">flexible</h4>
                    <p class="values-description">Custom tours, event services, and accommodations available. Just ask!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="work-with-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 id="wwu-title">WORK WITH US!</h2>
                    <p id="wwu-content">Meet new people.<br>Burn some calories.<br>Explore our city.<br>Make riders
                        smile.<br>
                        Contact us about being a WooRides driver today!</p>
                    <a href="<?php echo $ASSETPATH; ?>Contact"
                       class="theme-btn-cta-primary lazy-fade"
                       id="wwu-btn">Contact US</a>
                </div>
            </div>
        </div>
    </div>

    <div id="as-seen-in-section">
        <div id="press"
             class="scroll-flag"></div>
        <div class="reviews-ruler ruler-break">
            <hr class="revRul-line ruler-break-line">
            <h2 class="revRul-title ruler-break-title">AS SEEN IN</h2>
        </div>
        <div id="asi-grid">
            <div class="asi-item">
                <a href="https://www.masslive.com/news/worcester/index.ssf/2017/07/woorides_is_worcesters_new_ped.html"
                   rel="noreferrer"
                   target="_blank">
                    <div class="asi-img lazy-fade asi-img-masslive">
                        <h4 class="asi-text-overlay">MASSLIVE</h4>
                    </div>
                </a>
            </div>
            <div class="asi-item">
                <a href="http://www.telegram.com/news/20170725/pedicabs-add-to-worcester-transportation-mix"
                   rel="noreferrer"
                   target="_blank">
                    <div class="asi-img lazy-fade asi-img-wtg">
                        <h4 class="asi-text-overlay">WORCESTER<br>TELEGRAM & GAZETTE</h4>
                    </div>
                </a>
            </div>
            <div class="asi-item">
                <a href="http://www.wbjournal.com/article/20170707/NEWS01/170709979/new-pedicab-service-in-worcester"
                   rel="noreferrer"
                   target="_blank">
                    <div class="asi-img lazy-fade asi-img-wbj">
                        <h4 class="asi-text-overlay">WORCESTER<br>BUSINESS JOURNAL</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <?php
    include $ASSETPATH.'components/global/Footer.php';
    include $ASSETPATH.'components/global/TopNavigation.php';
    include $ROOTPATH.'footer-scripts.php'; 
    ?>

    <script>
    $(document).ready(function() {

        $(document).on('click', '.carousel-clickzone-left', function(e) {
            $("#myCarousel").carousel("prev");
        });

        $(document).on('click', '.carousel-clickzone-right', function(e) {
            $("#myCarousel").carousel("next");
        });

        $(document).on('click', '.serv-navTab', function(e) {

            var firstTab = $('#services-section .nav-tabs')[0].firstElementChild;
            var lastTab = $('#services-section .nav-tabs')[0].lastElementChild;
            // var activeTabHash = $('#services-section .nav-tabs li.active a')[0].hash;

            if (e.currentTarget.classList.contains('serv-navTab-left')) {

                var previousSibling = $('#services-section .nav-tabs li.active')[0]
                    .previousElementSibling;

                if ($(previousSibling).length === 1) {
                    $(previousSibling).find('a').tab('show');
                } else {
                    $(lastTab).find('a').tab('show');
                }

            } else if (e.currentTarget.classList.contains('serv-navTab-right')) {

                var nextSibling = $('#services-section .nav-tabs li.active')[0].nextElementSibling;

                if ($(nextSibling).length === 1) {
                    $(nextSibling).find('a').tab('show');
                } else {
                    $(firstTab).find('a').tab('show');
                }
            }
        });

    });
    </script>

</body>

</html>