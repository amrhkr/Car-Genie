<?php 
        include("header.php");
        include("conn.php");
        if( !$conn ){
            die('Problem connecting to the Database.');
        }
        $isHomePage = true; // Set a flag to indicate this is home.php

        if ( ! isset($_SESSION['email'])) {
            include ('login_test.php');
        } else {
 ?>

<html>

<head>
    <title>CAR GENIE - All Cars</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        $( document ).ready(function() {
            $("#includeHeader").load("../html/header.html");
            $("#includeFooter").load("../html/footer.html");
            $("#commonMenu").load("../html/menu.html");
            console.log( "ready!" );
            console.log(window.location.pathname.indexOf('campervan.php'));
            console.log(window.location.pathname);
            if (window.location.pathname.indexOf('page1.php') === -1 && window.location.pathname.indexOf('page2.php') === -1) {
            // Hide the header and footer here using JavaScript
            // $("#includeHeader").hide();
            $("#includeFooter").hide();
        }
        });
    </script>
</head>

<body>
    <!-- <h1><?php print_r($_SESSION) ?></h1> -->
    <!-- <div id="includeHeader"></div>
    
    <div id="commonMenu"></div> -->

    <?php include 'campervan.php'; ?>
    <?php include 'pickup.php'; ?>
    <?php include 'roadster.php'; ?>
    <?php include 'sedan.php'; ?>
    <?php include 'sport.php'; ?>
    <?php include 'super.php'; ?>
    <?php include 'suv.php'; ?>
    <?php include '../html/footer.html'; ?>

    <div id="includeFooter"></div>
    <?php } ?>
</body>
</html>
