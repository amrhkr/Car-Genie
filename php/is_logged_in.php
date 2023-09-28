<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php 
    include("header.php");
    include("conn.php");
    if( !$conn ){
        die('Problem connecting to the Database.');
    }
    $isHomePage = true;
    if ( ! isset($_SESSION['cus_email'])) {
        include ('login_test.php');
    } else {
        include ('all_cars.php');
    }
 ?>