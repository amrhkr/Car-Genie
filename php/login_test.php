<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        $( document ).ready(function() {
            $("#includeFooter").load("../html/footer.html");
            $("#commonMenu").load("../html/menu.html");
            console.log( "ready!" );
        });
    </script>
    <title>Please Login First</title>
</head>
<body>
    <div id="commonMenu"></div>
    <?php include 'menu.php'; ?>
    
    <div class="login center">
        <form id="contact" class="login-content">
            <h1><a href="login.php" title="Login Now">PLEASE LOGIN FIRST</a></h1>
        </form>
    </div>
    <div id="includeFooter"></div>
</body>
</html>