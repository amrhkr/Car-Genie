<?php  session_start(); ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
</head>
<body>
    <div class="top">
        <div class="left">
            <p>SALE UPTO 70% OFF. USE CODE "SALES 70%. <a href="all_cars.php" title="Shop Now">SHOP NOW</a></P>
        </div>
        <div class="right">
            <h5>
                <a href="registration.php" title="Create an account, it's Free!">CreateAccount</a>
                <?php  if (isset($_SESSION['email'])){
                    ?> <a href="logout.php" title="Log Out">Logout</a>;
                <?php }  else { ?>
                    <a href="login.php" title="Log In">Login</a>;
                <?php } ?>
            </h5>
        </div>
    </div>
    <div class="logo">
        <div class="left">
            <h1><a href="index.php" title="Go To Home Page"><img src="../image/logo.jpg" width="40px" height="35px"><span id="projectName">CAR GENIE</span></a></h1>
        </div>
        <div class="right">
            <p><img src="../image/phone.svg" width="16px" height="16px/"> Order or call us :(+91)9968853896</p>
        </div>
    </div>
</body>
</html>