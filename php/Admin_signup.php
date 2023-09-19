<html>

<head>
    <title>Admin Registration</title>
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
            <h1><img src="image/logo.jpg" width="40px" height="35px" /> CAR GENIE</h1>
        </div>
        <div class="right">
            <p><img src="image/phone.png" width="16px" height="16px" /> Order or call us :(+91)9968853896</p>
        </div>
    </div> -->

    <div id="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="#" onclick="alert('Please Login First...!!!')">All CARS</a>
        <select onclick="alert('Please Login First...!!!')">
            <option>Cars Category</option>
            <option value="car_catgy_one.php">Kia Forte</option>
            <option value=" car_catgy_two.php ">Scorpio Car</option>
            <option value=" car_catgy_three.php ">GT Sport Car</option>
            <option value=" car_catgy_one.php ">Audi A1</option>
            <option value=" car_catgy_one.php ">Toyota Corolla</option>
            <option value=" car_catgy_one.php ">Nissan</option>
            <option value=" car_catgy_one.php ">BMW</option>
            <option value=" car_catgy_one.php ">Infiniti</option>
        </select>
        <a href="contact.php">Contact Us</a>
        <a href="feedback.php">FeedBack</a>
    </div>
    <div class="frame2">
        <center>
            <!-- <form name="login" method="post" action="admin_add_process.php">
                <h1>Login Here</h1>
                <h4>ADMIN ID : <input type="text" name="user" placeholder="User Id..."></h4>
                <h4>ADMIN NAME : <input type="text" name="user" placeholder="User Name..."></h4>
                <h4>PASSWORD : <input type="password" name="pass" placeholder="Password..."></h4>
                <h4>MOBILE: <input type="text" name="user" placeholder="Mobile..."></h4>
                <input type="submit" value="Log In" onclick="alert('Login successfull')">
                <input type="submit" value="Reset"><br><br>
            </form> -->
            <form name="signup" method="post" action="admin_insert.php">
                <fieldset>
                  <legend>ADMIN REGISTRATION</legend>
                  <label for="adminId">ADMIN ID:</label>
                  <input type="text" id="adminId" name="userid" placeholder="User Id..." required><br><br>

                  <label for="adminName1">ADMIN NAME:</label>
                  <input type="text" id="adminName1" name="username" placeholder="User Name..." required><br><br>

                  <label for="password">PASSWORD:</label>
                  <input type="password" id="password" name="password" placeholder="Password..." required><br><br>

                  <label for="mobile">MOBILE:</label>
                  <input type="text" id="mobile" name="mobile" placeholder="Mobile..."><br><br>

                  <input type="submit" value="SIGNUP">
                  <input type="reset" value="RESET">
                </fieldset>
            </form>
        </center>
    </div>
    <div>
        <a href="admin_login.php">LogIn</a>
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

                <h5>New Delhi <br>Kartar Nagar <br> Delhi Pin code : 110053</h5>

            </div>

        </div>
        <a href="home.php">HOME</a>
        <a href="about.php">About Us</a>
        <a href="Contact.php">CONTACT US</a>
        <a href="Login.php">PROFILE</a>
        <h4 id="middleIt">	&copy; 2023 CAR GENIE | All Rights Reserved | Design by <span id="adminName">Amar Choudhary</span></h4>
    </div> -->
    <div id="includeFooter"></div>
</body>

</html>