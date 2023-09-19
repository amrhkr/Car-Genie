<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE - Feedback</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        $( document ).ready(function() {
            $("#includeHeader").load("../html/header.html");
            $("#includeFooter").load("../html/footer.html");
            console.log( "ready!" );
        });
    </script>
</head>

<body>
    <div id="includeHeader"></div>
    <!-- <div class="top">
        <div class="left">
            <p>SALE UPTO 70% OFF. USE CODE "SALES 70%. SHOP
                NOW</P>
        </div>
        <div class="right">
            <h5>
                <a href="registration.php">CreateAccount</a>
                <a href="login.php">Login</a>

            </h5>
        </div>
    </div>

    <div class="logo">
        <div class="left">
            <h1><img src="../image/logo.jpg" width="40px" height="35px" />PURCHASE CAR</h1>
        </div>
        <div class="right">
            <p><img src="../image/phone.svg" width="16px" height="16px/"> Order or call us
                :(+91)9968853896</p>
        </div>
    </div> -->

    <div id="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="#" onclick="alert('Please Login First...!!!')">All Product</a>
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
    </div>
    <div class="frame1">
        <form action="fed_bck_sts.php" method="post">
        <fieldset>
            <legend>FEEDBACK</legend>

            <label for="Name">Name:</label>
            <input type="text" name="cus_nme" id="Name" required>

            <label for="VehicleId">Vehicle ID:</label>
            <input type="text" name="vcli_id" id="VehicleId" required>

            <label for="FeedDetails">Feed Details:</label>
            <input type="text" name="detls" id="FeedDetails" required>

            <label for="Response">Response:</label>
            <input type="text" name="respns" id="Response">

            <label for="FeedbackStatus">Feedback Status:</label>
            <input type="text" name="sts" id="FeedbackStatus">
            <br/>
            <input type="reset" value="RESET" />
            <input type="submit" value="SUBMIT" />
        </fieldset>
    </form>
    </div>
    <!-- <div class="footer">
        <div class="foot_top">
            <div class="footer2">
                <input type='text' name='t1' placeholder='Name'><br>
                <input type='text' name='t1' placeholder='Email'><br>
                <input type='text' name='t1' placeholder='Telephone'><br>
                <input type='text' name='t1' placeholder='Comment'><br>
                <input type='submit' value='submit'>
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
    <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4> -->
    <div id="includeFooter"></div>
</body>

</html>