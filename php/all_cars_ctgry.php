<?php  include("conn.php");  session_start();
?>

<html>

<head>
    <title>CAR GENIE - All Cars</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    
</head>

<body>
    <h1><?php print_r($_SESSION) ?></h1>
    <div class="top">
        <div class="left">
            <p>SALE UPTO 70% OFF. USE CODE "SALES 70%. SHOP NOW</P>
        </div>
        <div class="righth">
            <p style="color:#fff; padding-top: 20px;">Welcome
                <a href='logout.php'
                    style="color: #fff; text-decoration: none; font-family: sans-serif; word-spacing: 60px; ">LogOut</a>


        </div>

    </div>

    <div class="logo">
        <div class="left">
            <h1><img src="../image/logo.jpg" width="40px" height="50px" />CAR
                GENIE</h1>
        </div>
        <div class="right">
            <p><img src="../image/phone.svg" width="26px" height="36px">
                Order or call us:(+91)9968853896</p>
        </div>
    </div>


    <div id="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="#" onclick="alert('Please Login First...!!!')">All CARS</a>
        <select onclick="alert('Please Login First...!!!')">
            <option>Cars Category</option>
            <option value="car_catgy_one.php">Kia Forte</option>
            <option value="car_catgy_two.php">Scorpio Car</option>
            <option value="car_catgy_one.php">GT Sport Car</option>
            <option value="car_catgy_one.php">Audi A1</option>
            <option value="car_catgy_one.php">Toyota Corolla</option>
            <option value="car_catgy_one.php">Nissan</option>
            <option value="car_catgy_one.php">BMW</option>
            <option value="car_catgy_one.php">Infiniti</option>
        </select>

        <a href="contact.php">Contact Us</a>
        <a href="feedback.php">FeedBack</a>
    </div>


    <div class="product">
        <div class="block">
            <img src="../image/cars/kiasport.jpg"  />
            <h3>2020 Kia Forte GT Sport Car<br> Price:500000<br>Vechile id=V2345
                <input type='Submit' value="BuyNow" onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/scorpio.jpg" />
            <h3> 2020 Scorpio Car<br> Price:200000<br>Vechile id=V2045
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/ferrari.jpg" />
            <h3>2023 Ferrari <br> Price:6000000<br>Vechile id=V2046
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/audi.jpg" />
            <h3>2019 Audi A1 Sportback <br> Price:400000<br>Vechile id=V2047
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/toyota.jpg" />
            <h3>2019 Toyota Corolla<br> Price:200000<br>Vechile id=V2049
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/nissan.jpg" />
            <h3>2019 Nissan<br> Price:300000<br>Vechile id=V2946
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/bmw.jpg" />
            <h3>2019 BMW<br> Price:700000<br>Vechile id=V2645
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
        <div class="block">
            <img src="../image/cars/infinity.jpg" />
            <h3>2019 Infiniti<br> Price:400000<br/>
                <input type='Submit' value='BuyNow' onclick="location.href='payment.php'">

        </div>
    </div>


    <div class="footer">
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
    <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4>
</body>

</html>