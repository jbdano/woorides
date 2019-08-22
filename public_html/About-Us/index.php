<?php
$PAGETITLE = 'WooRides | About Us';
$ACTIVEPAGE = 'about';
$ROOTPATH = '../';

include $ROOTPATH.'config.php'; 
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $ROOTPATH.'head.php'; ?>
</head>

<body>

    <div id="values-section">
        <div id="values"
             class="scroll-flag"></div>
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
                    <img id="values-description-img"
                         src="<?php echo $ASSETPATH; ?>img/Ali_Valentine_Yaovi_md.jpg">
                </div>
            </div>

        </div>
    </div>

    <div id="involvement-section">
        <div class="container">

            <img class="pedicab-img lazy-fade lazy-fade-right"
                 src="<?php echo $ASSETPATH; ?>img/WRlogovector-fromnewpage.svg">

            <div class="involvement">
                <div class="flexbox flexbox-r">
                    <div class="flex-graphic flex-graphic-wr">
                        <img src="<?php echo $ASSETPATH; ?>img/cropped-Cooperation-Worcester-Logo-2018-sm-01.png"
                             class="lazy-fade lazy-fade-right">
                    </div>
                    <div class="flex-content flex-content-wr lazy">
                        <h4>Worcester is in our roots...literally.</h4>
                        <p>We were sprouted & fiscally sponsored by Worcester Roots and we now operate as an independent
                            cooperative company. That sounds really fancy, but in reality it's just a different way to
                            run a
                            business. Instead of profit and competition, we care about community need, cooperation,
                            people,
                            and the environment. We are a part of <a href="http://www.cooperationworcester.org/"
                               rel="noreferrer"
                               class="theme-link"
                               target="_blank">Cooperation Worcester</a>,
                            a collective of Worcester cooperatives working as a coalition to strengthen the worker-owner
                            cooperative and solidarity economy movement.</p>
                    </div>
                </div>
                <div class="dashed-border dashed-border--top"></div>
                <div class="dashed-border dashed-border--right"></div>
                <div class="dashed-border dashed-border--bottom"></div>
            </div>

            <div class="involvement">
                <div class="flexbox flexbox-wcac">
                    <div class="flex-graphic flex-graphic-wcac">
                        <img src="<?php echo $ASSETPATH; ?>img/community-action.jpg"
                             class="lazy-fade lazy-fade-left">
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
                        <img src="<?php echo $ASSETPATH; ?>img/EarnABikeLogo.png"
                             class="lazy-fade lazy-fade-right">
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

    <?php
    include $ASSETPATH.'components/global/Footer.php';
    include $ASSETPATH.'components/global/TopNavigation.php';
    include $ROOTPATH.'footer-scripts.php'; 
    ?>

</body>

</html>