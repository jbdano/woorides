<?php
$PAGETITLE = 'WooRides | Frequently Asked Questions';
$ACTIVEPAGE = 'faq';
$ROOTPATH = '../';

include $ROOTPATH.'config.php'; 
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $ROOTPATH.'head.php'; ?>
</head>

<body>


    <div id="faq-section"
         class="preload-hide">
        <div class="faq-container">
            <h2 class="faq-title">Frequently Asked Questions</h2>

            <div class="faq-section-title">
                <h4>General</h4>
            </div>
            <div class="faq-question">
                <p>How can I book a ride?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>Either wave us down in the street or call us directly at 508-966-8439.</p>
                </div>
            </div>
            <div class="faq-question">
                <p>Do you only take cash? How do I give you my money?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>We take cash or Venmo. Either way, don't forget to tip your driver. That way they pedal extra
                        fast ;)</p>
                </div>
            </div>
            <div class="faq-question">
                <p>Where can I find you for a ride?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>We operate mainly in the Grid and Canal Districts. Whether you're enjoying a farm fresh dinner
                        at Armsby Abbey, a brew at the Beer Garden, or a late night snack at Dive Bar, we've got you
                        covered.</p>
                </div>
            </div>
            <div class="faq-question">
                <p>Peddling these things seems hard. How far will you take me?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>You're right. It is hard. But that doesn't stop us. Our typical range for a ride
                        is 1 mile but exceptions can be made if you smile a lot and tell us how awesome we are.</p>
                </div>
            </div>
            <div class="faq-question">
                <p>How many people can ride at once?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>For safety sake (and for our drivers' backs) we limit rides to two
                        adults or two adults and one child.</p>
                </div>
            </div>
            <div class="faq-question">
                <p>Can I drive the pedicab?</p>
                <i class="fas fa-angle-down"></i>
                <div class="faq-answer">
                    <p>As much as we would like to reverse rolls and take a well-deserved break,
                        we unfortunately can't make this happen. Our insurance wouldn't be happy with us.</p>
                </div>
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
        $('#faq-section').removeClass('preload-hide');

        $('.faq-question').on('click', function(e) {

            if ($(this).hasClass('faq-question-active')) {
                $(this).removeClass('faq-question-active');
            } else {
                $('.faq-question').removeClass('faq-question-active');
                $(this).addClass('faq-question-active');
            }
        });
    });
    </script>
</body>

</html>