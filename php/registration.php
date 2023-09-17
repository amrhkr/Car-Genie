<!DOCTYPE html>
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
        <!-- <div class="top">
            <div class="left">
                <p>SALE UPTO 70% OFF. USE CODE "SALES 70%. SHOP NOW</p>
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
                <h1><img src="../image/logo.jpg" width="40px" height="50px" />CAR
                    GENIE</h1>
            </div>
            <div class="right">
                <p><img src="../image/phone.svg" width="26px" height="36px">
                    Order or call us:(+91)9968853896</p>
            </div>
        </div> -->
        <div id="menu">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="#" onclick="alert('Please Login First...!!!')">All CARS</a>
            <select onclick="alert('Please Login First...!!!')"><option>Cars Category</option>
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

        <div class="frame1">
            <form action="reg_insert.php" method="post">
            <fieldset>
            <legend>Registration</legend>
            <label for="Name">Name:</label>
            <input type="text" name="cus_nme" id="Name" required>

            <label for="Password">Password:</label>
            <input type="password" name="cus_pwd" id="Password" required>

            <label for="Email">Email:</label>
            <input type="email" name="cus_emil" id="Email" required>

            <label for="Address">Address:</label>
            <input type="text" name="cus_addr" id="Address">

            <label for="City">City:</label>
            <input type="text" name="cus_city" id="City">

            <label for="State">State:</label>
            <input type="text" name="cus_stae" id="State">

            <label for="Gender">Gender:</label>
            <input type="text" name="cus_sex" id="Gender">

            <label for="MobileNo">Mobile No:</label>
            <input type="text" name="cus_mbl" id="MobileNo">
            <br/>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </fieldset>
                </form>
            </div>
        </div>
        <div>
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
        </div>
    </body>
</html>
