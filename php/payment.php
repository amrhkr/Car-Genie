<?php include("conn.php");  session_start();
?>

<html>

<head>
    <title>CAR GENIE</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
    $( document ).ready(function() {
        $("#includeHtml").load("header.php");
    console.log( "ready!" );
});
   </script>
</head>

<body>
    <div id="includeHtml"></div>
    <div id="menu">
        <a href="Index.php">home</a>
        <a href="about.php">About Us</a>
        <a href="All Product.php">All Product</a>
        <select onchange="location = this.value;">
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
    </div>

    <div class="payment">
        <form action="accept_payment.php" method="post">
            <h1>Payment</h1>
            VEHICLE ID:<input type="text" name="vchl_id" placeholder="Vehicle ID"><br><br> 
            PURCHASE QUENTITY :<input type="number" name="purch_qunt" placeholder="Quentity"><br><br>
            VEHICLE NAME:<input type="text" name="vchl_nme" placeholder="Vehicle NAME"><br><br>
            TOTAL AMOUNT: <input type="text" name="amt" placeholder="amount"><br><br> Payment Mode
            <select>
                <option>Select card</option>
                <option value="Credit Card" name="pay">Credit card</option>
                <option value="Debit Card" name="pay">Debit card</option>
                <option value="Paytm" name="pay">Paytm</option>
            </select><br><br>
            CARD NO:<input type="text" name="crd_num" placeholder="Card Number"><br><br> ADDRESS:<input type="text"
                name="addrs" placeholder="address"><br><br>

            <input type="submit" value="PayNow">
            <input type="submit" value="Reset">


        </form>
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
                <a href="about.php">About Us</a>
                <a href="contact.php">CONTACT US</a>
                <a href="login.php">PROFILE</a>
            </div>

    <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4>
</body>

</html>