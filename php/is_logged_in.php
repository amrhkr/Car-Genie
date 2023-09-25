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
            include ('all_cars.php');
        }
 ?>