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

    <?php

    include $ASSETPATH.'components/global/TopNavigation.php'; 
    include $ROOTPATH.'footer-scripts.php'; 
    ?>

    <script>
    $(document).ready(function() {

        // $('.openbtn').on('click', function() {
        //     $("#mySidenav").css('width', '80%');
        // });

        // $('.closebtn').on('click', function() {
        //     $("#mySidenav").css('width', '0');
        // });
    });
    </script>

</body>

</html>