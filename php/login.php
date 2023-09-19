<html>
    <head>
        <title>CAR GENIE - Home</title>
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
            <div class="left"> <p>SALE UPTO 70% OFF. USE CODE "SALES 70%.
                    SHOP
                    NOW</p></div>
            <div class="right">
                <h5>
                    <a href="registration.php">CreateAccount</a>
                    <a href="login.php">Login</a>
                </h5>
            </div>
        </div>

        <div class="logo">
            <div class="left">
                <h1><img src="image/logo.jpg" width="40px" height="35px" />CAR
                    GENIE</h1>
            </div>
            <div class="right">
                <p><img src="image/phone.png" width="16px" height="16px/">
                    Order or call us
                    :(+91)9968853896</p>
            </div>
        </div> -->

        <div id="menu">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="#" onclick="alert('Please Login First...!!!')">All CARS</a>
            <select onclick="alert('Please Login First...!!!')"><option>Cars
                    Category</option>
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
        <div class="frame2">
            <center>
                <form name="login" method="post" action="login_select.php">
                    <!-- <h1>Login here</h1>
                    <h4>User ID : <input type="text" name="user"
                            placeholder="User id"></h4>
                    <h4>Password : <input type="password" name="pass"
                            placeholder="Password"></h4>
                    <input type="submit" value="Log In"
                        onclick="alert('Login successfull')">
                    <input type="submit" value="Reset"><br><br>
                    <a href="Registration.php">Click here To New User</a> -->
                    <fieldset>
                        <legend>Login</legend>
                        <label for="Name">User ID:</label>
                        <input type="text" name="cus_email" id="Name" required>
                        <label for="Password">Password:</label>
                        <input type="password" name="cus_pwd" id="Password" required>
                        <br/>
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit">
                    </fieldset>
                </form>
            </center>
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
                <a href="index.php">HOME</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">CONTACT US</a>
                <a href="login.php">PROFILE</a>
            </div>
            <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4> -->
            <div id="includeFooter"></div>
        </body>
    </html>
