<?php include("header.php");
?>

<!DOCTYPE html>

<html>

<head>
    <title>Car Genie - Home</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
    $( document ).ready(function() {
        $("#includeHeader").load("../html/header.html");
        $("#includeFooter").load("../html/footer.html");
        $("#commonMenu").load("../html/menu.html");
        console.log( "ready!" );
    });
   </script>
</head>

<body>
    <div id="includeHeader"></div>
    <div id="commonMenu"></div>
    <?php include 'menu.php'; ?>
    <center>
        <h1>WHAT'S POPULAR IN CARS</h1>
    </center>
    <div class="image">
        <img src="../image/cars/McLaren1.jpg" style=" width: 49%; float: left; height: 500px; margin-left:  10px;">
        <img src="../image/cars/McLaren2.jpg" style=" width: 49%; float: right; height: 500px; margin-right:  10px; ">
        <h3 class="description">Performance cars aren't all about engine noise, exhaust fumes,
            and squealing tires.
        </h3>
        <h3 class="description"> Engine Tweaks Pump Up Horsepower </h3>
    </div>
    <div id="includeFooter"></div>
    </body>
</html>