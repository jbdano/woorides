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

    <h1>Hello World</h1>

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