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
    <title>Menu</title>
</head>
<body>
    <div id="menu">
        <center>
        <a href="admin_home.php" title="Admin Home Page">HOME</a>
        <a href="Admin_payment_view.php" title="View Payment Information">VIEW PAYMENT</a>
        <a href="admin_feedback_view.php" title="Oder Details">VIEW FEED-BACKS</a>
        <a href="admin_cars_add.php" title="Add New Car Details">ADD CAR</a>
        <?php  if (isset($_SESSION['email'])){ ?> 
        <?php } ?>
        </center>
    </div>
</body>
</html>