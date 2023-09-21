<html>

<head>
    <title>Admin Login</title>
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
    <div class="frame2">
        <center>
            <form name="login" method="post" action="admin_login_process.php">
                <fieldset>
                  <legend>ADMIN LOGIN</legend>
                  <label for="adminId">ADMIN ID:</label>
                  <input type="text" id="adminId" name="userid" placeholder="User Id..." required><br><br>

                  <label for="password">PASSWORD:</label>
                  <input type="password" id="password" name="password" placeholder="Password..." required><br><br>

                  <input type="submit" value="Log In" onclick="alert('Login successful')">
                  <input type="reset" value="Reset">
                </fieldset>
            </form>
        </center>
    </div>
    <div id="includeFooter"></div>
</body>

</html>