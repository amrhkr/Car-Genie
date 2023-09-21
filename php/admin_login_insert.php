<?php
    session_start();
    include("conn.php");
    $admin="SELECT * FROM admin";
    $adminData=$conn->query($admin);
    $adminCollection=$adminData->fetch_assoc();
    
    $Login_ID=$adminCollection['Login_ID'];
    $Admin_Name=$adminCollection['Admin_Name'];
    $Admin_pwd=$adminCollection['Admin_pwd'];
    $Admin_phone=$adminCollection['Admin_phone']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <title>Welcome <?php echo $Admin_Name ?></title>
</head>
<body>
    <div class="modal-body">
        <p style="font-size: 50px;font-weight: bold;color: #e70b3e;text-align: center;">
            LOGGED-IN SUCCESSFULLY</p>
        <h1 align="center"><img src="../image/success.svg" width="70px" height="120px" /></h1>
    </div>
    <div class="modal-footer">
        <center><a href="admin_home.php" class="btn btn-primary" style="width: 100%; height: 100px;font-weight: bold;font-size: 50px; text-decoration: none;" target="_blank">GO TO ADMIN
            PANNEL</a></center>
    </div>
</body>
</html>