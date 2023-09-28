<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php 
    include("conn.php"); session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
</head>
<body>
    <div class="top">
        <div class="left">
            <h3>WELCOME TO ADMIN PANEL - <?php echo  strtoupper($_SESSION['admin_name']); ?></h3>
        </div>
        <div class="right">
            <h5>
                <?php  if (isset($_SESSION['admin_id'])){
                    ?> <a href="logout.php" title="Log Out">Logout</a>;
                <?php }  else { ?>

                <?php } ?>
            </h5>
        </div>
    </div>
    <div class="logo">
        <div class="left">
            <h1><a href="admin_home.php" title="Go To Home Page"><img src="../image/logo.jpg" width="40px" height="35px"><span id="projectName">CAR GENIE</span></a></h1>
        </div>
    </div>
</body>
</html>