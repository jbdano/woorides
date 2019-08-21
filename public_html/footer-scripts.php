<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- BOOTSTRAP -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
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
});
</script>