<!DOCTYPE html>

<html>
    <head>
        <title> </title>
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
        <!-- <div class="top">
            <div class="left"><p></p></div>
            <div class="right">
                <h5>
                    <a href="registration.php">CreateAccount</a>
                    <a href="login.php">Login</a>
                </h5>
            </div>
        </div> -->
        <div id="includeHtml"></div>
        <!-- <div class="logo">
            <div class="left">
                <h1>
                    <img src="image/logo.jpg" width="40px" height="35px" />CAR
                    GENIE
                </h1>
            </div>
            <div class="right">
                <p>
                    <img src="image/phone.png" width="16px" height="16px/" />
                    Order or
                    call us:(+91)9968853896
                </p>
            </div>
        </div> -->

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
        <!-- <div class="pick">
<h1>
Search From Variety Of Used Car And Brand With Easy Finance & RC Transfer. Find  Certified And Good Condition Used Cars With Great Deals. Refundable Booking Amount.  No Service Charges. Free 3rd party Insurance. 12 Months Free Warranty. Styles:  Hatchback, Sedan, SUV,
</h1>
</div> -->
        <center>
            <h1>WHATS'S POPULAR IN CARS</h1>
        </center>
        <div class="image">
            <img
                src="../image/cars/audi.jpg"
                style="width: 49%; float: left; height: 500px; margin-left: 10px" />
            <img
                src="../image/cars/bmw.jpg"
                style="width: 49%; float: right; height: 500px; margin-right: 10px" />

            <h3 class="description">
                Performance cars aren't all about engine noise, exhaust fumes,
                and
                squealing tires.
            </h3>
            <h3 class="description">Engine Tweaks Pump Up Horsepower</h3>
        </div>

        <div class="footer">
            <div class="foot_top">
                <div class="footer2">
                    <input type="text" name="t1" placeholder="Name" /><br />
                    <input type="text" name="t1" placeholder="Email" /><br />
                    <input type="text" name="t1" placeholder="Telephone" /><br />
                    <input type="text" name="t1" placeholder="Comment" /><br />
                    <input type="submit" value="submit" />
                </div>
                <div class="Address">
                    <h3>Address</h3>
                    <h5>
                        Kartar Nagar<br />3-1/2 Pusta<br />
                        Delhi Pin code : 110053
                    </h5>
                </div>
            </div>
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT US</a>
            <a href="login.php">PROFILE</a>
            
        </div>
        <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4>
    </body>
</html>
