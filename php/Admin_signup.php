<?php include("header.php"); ?>
<html>

<head>
    <title>Admin Registration</title>
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
    <div class="frame1 center">
        <center>
            <form name="signup" method="post" action="admin_insert.php" class="feedback-form">
                <fieldset>
                  <legend>ADMIN REGISTRATION</legend>
                  <label for="adminId">ADMIN ID:</label>
                  <input type="text" id="adminId" name="userid" placeholder="User Id..." required>

                  <label for="adminName1">ADMIN NAME:</label>
                  <input type="text" id="adminName1" name="username" placeholder="User Name..." required>

                  <label for="password">PASSWORD:</label>
                  <input type="password" id="password" name="password" placeholder="Password..." required>

                  <label for="mobile">MOBILE:</label>
                  <input type="text" id="mobile" name="mobile" placeholder="Mobile..."><br/>
                  <input type="reset" value="Reset">
                  <input type="submit" value="Signup">
                  
                </fieldset>
            </form>
        </center>
    </div>
    <div>
        <a href="admin_login.php">LogIn</a>
    </div>
    <div id="includeFooter"></div>
</body>

</html>