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
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv1.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv2.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv3.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv4.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv5.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv6.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>SUV</h1>
            <a href="payment.php"><img src="../image/cars/suv/suv9.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>SUV 2023 Model<br> Price: &#8377 100000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    
    
    <div id="includeFooter"></div>
</body>

</html>