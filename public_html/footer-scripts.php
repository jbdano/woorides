<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<!-- BOOTSTRAP -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>
<!-- LAZY -->
<script src="<?php echo $ASSETPATH; ?>js/lazy.js"></script>
<!-- BOOTBOX -->
<script src="<?php echo $ASSETPATH; ?>js/bootbox.min.js"></script>

<script>
$(document).ready(function() {

    var loadLink = document.createElement('link');
    loadLink.rel = 'stylesheet';
    loadLink.href = '<?php echo $ASSETPATH; ?>css/font-awesome/all.min.css';
    loadLink.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(loadLink, godefer);

    // Add smooth scrolling to all links
    $(document).on('click', ".smoothScroll", function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            if (hash === '#top') {
                var anchor = 0;
            } else {
                var anchor = $(hash).offset().top;
            }

            // Close mobile menu dropdown if it's open
            var mobileMenuOpen = $('button.navbar-toggle').attr('aria-expanded');

            if (mobileMenuOpen === 'true') {
                $('button.navbar-toggle').trigger('click');
            }

            $('html, body').animate({
                scrollTop: anchor
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                // window.location.hash = hash;
            });
        } // End if
    });
});
</script>