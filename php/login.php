<html>
    <head>
        <title>CAR GENIE - Home</title>
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
                <form name="login" method="post" action="login_select.php"
                    class="feedback-form">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <label for="Name">User ID:</label>
                        <input type="text" name="cus_email" id="Name" required>
                        <label for="Password">Password:</label>
                        <input type="password" name="cus_pwd" id="Password" required><br />
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </center>
        <div id="includeFooter"></div>
    </body>
</html>
