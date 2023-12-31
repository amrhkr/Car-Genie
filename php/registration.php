<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include("header.php"); ?>
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
            $("#commonMenu").load("../html/menu.html");
            console.log( "ready!" );
        });
    </script>
    </head>
    <body>
        <div id="includeHeader"></div>
        <div id="commonMenu"></div>
        <?php include 'menu.php'; ?>
        <center>
        <div class="frame1 center">
            <form action="reg_insert.php" method="post" class="feedback-form">
            <fieldset>
            <legend>CUSTOMER REGISTRATION</legend>
            <label for="Name">Name:</label>
            <input type="text" name="cus_nme" id="Name" placeholder="Enter Your Name..." required>

            <label for="Password">Password:</label>
            <input type="password" name="cus_pwd" id="Password" placeholder="Enter Password..." required>

            <label for="Email">Email:</label>
            <input type="email" name="cus_emil" id="Email" placeholder="Enter Your Email Id..." required>

            <label for="Address">Address:</label>
            <input type="text" name="cus_addr" placeholder="Enter Your Address..." id="Address">

            <label for="City">City:</label>
            <input type="text" name="cus_city" placeholder="Enter Your City..." id="City">

            <label for="State">State:</label>
            <input type="text" name="cus_stae" placeholder="Enter Your State..." id="State">

            <label>Gender:
                <input type="radio" name="cus_sex" id="Gender_Male" value="Male">Male
                <input type="radio" name="cus_sex" id="Gender_Female" value="Female">Female
            </label>

            <label for="MobileNo">Mobile No:</label>
            <input type="text" name="cus_mbl" placeholder="Enter Your Mobile..." id="MobileNo">
            <br/>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
            </fieldset>
            </form>
        </div>
    </center>
        <div id="includeFooter"></div>
    </body>
</html>
