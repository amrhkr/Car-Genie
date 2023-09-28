<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include("conn.php");
?>
<?php require_once("header.php"); ?>

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
    <?php require_once 'menu.php'; ?>
    <div class="product-item">
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup1.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup2.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup3.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup4.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup5.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup6.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Pickup Truck</h1>
            <a href="payment.php"><img src="../image/cars/pickup/pickup9.jpg" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Pickup Truck 2023 Model<br> Price: &#8377 700000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div id="includeFooter"></div>
</body>

</html>