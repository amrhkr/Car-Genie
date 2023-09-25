<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Footer</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
</head>
<body>
    <div>
    <form name="comments" action="addComment.php" method="post">
            <div class="footer">
                <?php include 'admin_menu.php'; ?>
<!--                 
                <div>
                    <a href="index.php" title="Visit our Homepage">HOME</a>
                    <a href="about.php" title="Learn About Us">ABOUT US</a>
                    <a href="contact.php" title="Contact Us">CONTACT US</a>
                    <?php  #if (isset($_SESSION['email'])){
                    ?> <a href="login.php" title="User Profile">PROFILE</a>;
                    <?php #}  else { ?>
                        <a href="login.php" title="Sign-In">PROFILE</a>;
                    <?php #} ?>
                    <a href="admin_signup.php" title="Are you an Admin?">ADMIN</a>
                </div> -->
            </div>
        </form>
        <h4 id="middleIt">	&copy; 2020-2023 CAR GENIE | All Rights Reserved | Designed & Developed with &#129505; by <a href="https://github.com/amrhkr" title="Developer's GitHub" target="_blank"><span id="adminName">Amar Choudhary</span></a></h4>
    </div>
</body>
</html>