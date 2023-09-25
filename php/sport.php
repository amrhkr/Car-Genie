<?php include("conn.php");
?>
<?php include("header.php"); ?>

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
    <?php include 'menu.php'; ?>
    <div class="product-item">
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports1.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports2.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports3.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports4.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports5.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports6.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sports Car</h1>
            <a href="payment.php"><img src="../image/cars/sports/sports9.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sports Car 2023 Model<br> Price: &#8377 2900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    
    
    <div id="includeFooter"></div>
</body>

</html>