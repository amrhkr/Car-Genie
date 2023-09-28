<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include("conn.php"); ?>
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
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan1.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
                <input type='button' id="mbtn" value='More Details' onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan2.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan3.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan4.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan5.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan6.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan9.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div id="includeFooter"></div>
</body>
</html>