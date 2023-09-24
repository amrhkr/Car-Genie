<?php include("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE- Contact</title>
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
    <div class="frame center">
        <form id="contact" class="center-content">
            <h1>CONTACT US</h1>
            <h3>Name : Amar Choudhary<br><br>Phone No : 9968853896<br><br>Email Id : amar9t8@gmail.com<br><br>Address: Kartar Nagar, 3-1/2 Pusta, Delhi-110053</h3>
        </form>
    </div>
    
    <div id="includeFooter"></div>
</body>

</html>