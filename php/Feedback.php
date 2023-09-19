<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE</title>
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
            <table cellpadding="2" width="30%" height="500px" align="center" cellspacing="2">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="36px"><b>FEEDBACK</b></font>
                        </center>
                    </td>
                </tr>

                <tr>
                    <td> Name :</td>
                    <td><input type="text" name="cus_nme" id="Name" size="30"></td>
                <tr>
                    <td>Vehicle Id:</td>
                    <td><input type="text" name="vcli_id" id="password" size="30"></td>
                </tr>

                <tr>
                    <td>Feed Details:</td>
                    <td><input type="text" name="detls" id="Email" size="30"></td>
                </tr>

                <tr>
                    <td>Response: </td>
                    <td><input type="text" name="respns" id="Mobileno" size="30"></td>
                </tr>

                <tr>
                    <td>Feedback Status: </td>
                    <td><input type="text" name="sts" id="stt" size="30"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="reset"> <input type="submit" value="submit form" /></td>
                </tr>
            </table>

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