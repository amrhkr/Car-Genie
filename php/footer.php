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
    <title>Common Footer</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
</head>
<body>
    <div>
        <form name="comments" action="addComment.php" method="post">
            <div class="footer">
                <div class="foot_top">
                    <div class="footer2">
                        <input type='text' name='Name' placeholder='Name'><br>
                        <input type='text' name='Email_ID' placeholder='Email'><br>
                        <input type='text' name='Telephone' placeholder='Telephone'><br>
                        <input type='text' name='Comment' placeholder='Comment' required><br>
                        <input type='submit' value='SUBMIT' />
                    </div>
                    <div class="Address">
                        <h3>Address</h3>
                        <h5>Kartar Nagar<br>3-1/2 Pusta<br> Delhi Pin code : 110053</h5>
                    </div>
                </div>
                <div>
                    <a href="index.php" title="Visit our Homepage">HOME</a>
                    <a href="about.php" title="Learn About Us">ABOUT US</a>
                    <a href="contact.php" title="Contact Us">CONTACT US</a>
                    <?php  if (isset($_SESSION['email'])){
                    ?> <a href="login.php" title="User Profile">PROFILE</a>;
                    <?php }  else { ?>
                        <a href="login.php" title="Sign-In">PROFILE</a>;
                    <?php } ?>
                    <a href="admin_signup.php" title="Are you an Admin?">ADMIN</a>
                </div>
            </div>
        </form>
        <h4 id="middleIt">	&copy; 2020-2023 CAR GENIE | All Rights Reserved | Designed & Developed with &#129505; by <a href="https://github.com/amrhkr" title="Developer's GitHub" target="_blank"><span id="adminName">Amar Choudhary</span></a></h4>
    </div>
</body>
</html>