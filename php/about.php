<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include("header.php"); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>About Car Genie</title>
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
        <?php include 'menu.php'; ?>
        <center>
            <h1>WHATS'S POPULAR IN CARS</h1>
        </center>
        <div class="image">
            <img
                src="../image/cars/McLaren3.jpg"
                style="width: 49%; float: left; height: 500px; margin-left: 10px" />
            <img
                src="../image/cars/mclaren5.png"
                style="width: 49%; float: right; height: 500px; margin-right: 10px" />

            <h3 class="description">
                Performance cars aren't all about engine noise, exhaust fumes,
                and
                squealing tires.
            </h3>
            <h3 class="description">Engine Tweaks Pump Up Horsepower</h3>
        </div>

        <div id="includeFooter"></div>
    </body>
</html>
