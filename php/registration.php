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
        <center>
        <div class="frame1 center">
            <form action="reg_insert.php" method="post" class="feedback-form">
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
    </center>
        <div id="includeFooter"></div>
    </body>
</html>
