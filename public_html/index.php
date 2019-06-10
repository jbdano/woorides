<?php
if (!defined('PAGETITLE')) define('PAGETITLE', 'Woorides');
if (!defined('ACTIVEPAGE')) define('ACTIVEPAGE', 'home');
if (!defined('ROOTPATH')) define('ROOTPATH', './');
include ROOTPATH.'config.php'; 
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include ROOTPATH.'head.php'; ?>
</head>

<body>

    <?php

    //
    // Navigation
    include ASSETPATH.'components/global/TopNavigation.php'; 
    ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <?php include ROOTPATH.'footer-scripts.php'; ?>

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