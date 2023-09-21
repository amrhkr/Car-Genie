<?php  include("conn.php");  session_start();
?>

<html>

<head>
    <title>CAR GENIE - All Cars</title>
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
    <h1><?php print_r($_SESSION) ?></h1>
    <div id="includeHeader"></div>
    <div id="commonMenu"></div>
    <div class="product">
        <div class="block">
            <img    
                src="../image/cars/kiasport.jpg"
                alt="Kia Forte GT Sport Car"
                id="productImage"
                data-product-id="V2345"
                data-product-name="2020 Kia Forte GT Sport Car"
                data-product-price="500000"
                onmouseover="this.style.cursor='pointer';"
                
            />
            <h3>Model : 2020 Kia Forte GT Sport Car &nbsp[Price: &#8377 5000000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block">
            <img    
                src="../image/cars/scorpio.jpg"
                alt="2020 Scorpio Car"
                id="productImage"
                data-product-id="V2045"
                data-product-name="2020 Scorpio Car"
                data-product-price="2000000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2020 Scorpio Car &nbsp[Price: &#8377 2000000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/>
            <img    
                src="../image/cars/ferrari.jpg"
                alt="2023 Ferrari"
                id="productImage"
                data-product-id="V2046"
                data-product-name="2023 Ferrari"
                data-product-price="6000000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2023 Ferrari &nbsp[Price: &#8377 6000000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/>
            <img    
                src="../image/cars/audi.jpg"
                alt="2019 Audi A1 Sportback"
                id="productImage"
                data-product-id="V2047"
                data-product-name="2019 Audi A1 Sportback"
                data-product-price="400000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2019 Audi A1 Sportback &nbsp[Price: &#8377 400000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/><br/><br/>
            <img    
                src="../image/cars/toyota.jpg"
                alt="2019 Toyota Corolla"
                id="productImage"
                data-product-id="V2049"
                data-product-name="2019 Toyota Corolla"
                data-product-price="200000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2019 Toyota Corolla &nbsp[Price: &#8377 200000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/><br/><br/>
            <img    
                src="../image/cars/nissan.jpg"
                alt="2019 Nissan"
                id="productImage"
                data-product-id="V2946"
                data-product-name="2019 Nissan"
                data-product-price="300000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2019 Nissan &nbsp[Price: &#8377 300000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/><br/><br/><br/><br/>
            <img    
                src="../image/cars/bmw.jpg"
                alt="2019 BMW"
                id="productImage"
                data-product-id="V2645"
                data-product-name="2019 BMW"
                data-product-price="700000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2019 BMW &nbsp[Price: &#8377 700000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
        <div class="block"><br/><br/><br/><br/><br/>
            <img    
                src="../image/cars/infinity.jpg"
                alt="2019 Infiniti"
                id="productImage"
                data-product-id="V2946"
                data-product-name="2019 Infiniti"
                data-product-price="400000"
                onmouseover="this.style.cursor='pointer';"
            />
            <h3>Model : 2019 Infiniti &nbsp[Price: &#8377 400000]</h3>   
            <center>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">
            </center>
        </div>
    </div>


    <!-- <div class="footer">
                <div class="foot_top">
                    <div class="footer2">
                        <input type='text' name='commenterName' placeholder='Name'><br>
                        <input type='text' name='commenterEmail' placeholder='Email'><br>
                        <input type='text' name='commenterPhone' placeholder='Telephone'><br>
                        <input type='text' name='comment' placeholder='Comment'><br>
                        <input type='submit' value='Submit' />
                    </div>
                    <div class="Address">
                        <h3>Address</h3>
                        <h5>Kartar Nagar<br>3-1/2 Pusta<br> Delhi Pin code : 110053</h5>
                    </div>
                </div>
                <a href="home.php">HOME</a>
                <a href="about.php">ABOUT US</a>
                <a href="contact.php">CONTACT US</a>
                <a href="login.php">PROFILE</a>
            </div>
    <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4> -->
    <div id="includeFooter"></div>
    <script>
        document.getElementById("productImage").addEventListener("click", function() {
            // Get product details from the data attributes
            var productId = this.getAttribute("data-product-id");
            var productName = this.getAttribute("data-product-name");
            var productPrice = this.getAttribute("data-product-price");
            
        
            // Encode product details as query parameters
            var encodedproductId = encodeURIComponent(productId);
            var encodedProductName = encodeURIComponent(productName);
            var encodedProductPrice = encodeURIComponent(productPrice);
        
            // Redirect to the payment page with product details as query parameters
            window.location.href = "payment.php?modelId=" + encodedproductId + "&modelName=" + encodedProductName + "&modelPrice=" + encodedProductPrice;
    });
</script>
</body>
</html>