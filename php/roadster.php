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
    <div class="product-item">
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster1.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster2.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster3.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster4.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster5.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster6.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Roadster</h1>
            <a href="payment.php"><img src="../image/cars/roadster/roadster9.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Roadster 2023 Model<br> Price: &#8377 5000000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    
    
    <div id="includeFooter"></div>
</body>

</html>