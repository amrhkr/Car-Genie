<?php include("conn.php"); session_start();
?>

<html>

<head>
    <title>CAR GENIE</title>
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
    <div class="sofa">
        <h1>MAHINDRA SCORPIO</h1>
        <img src="../image/cars/scorpio.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /><br><br>
        <h3>2020 Scorpio Car<br> Price:500000<br>
            <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
        </h3>
    </div>
    <div id="includeFooter"></div>
</body>

</html>