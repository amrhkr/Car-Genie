<?php
    include("conn.php");
    $userid=$_POST["userid"];
    $admin_id = "select * from admin where Login_ID='$userid'";
    $qst_admin_id=$conn->query($admin_id);
    if ($qst_admin_id->num_rows>0) {
    $clct_admin_id=$qst_admin_id->fetch_assoc();
    $admin_login_id=$clct_admin_id['Login_ID'];
    $admin_pwd=$clct_admin_id['Admin_Pwd'];
    $Admin_Name=$clct_admin_id['Admin_Name'];
    $_SESSION['admin_id'] = $admin_login_id;
    $_SESSION['admin_pw'] = $admin_pwd;
    $_SESSION['admin_name'] = $Admin_Name;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Welcome <?php echo $Admin_Name ?></title>
    <script>
        function performRedirect() {
            setTimeout(function() {
                window.location.href = "admin_home.php";
            }, 2000);
        }
        window.onload = function() {
            performRedirect();
        };
    </script>
</head>
<body>
    <div class="modal-body">
        <p style="font-size:50px;font-weight:bold;color:#e70b3e;text-align:center;">LOGGED-IN SUCCESSFULLY</p>
        <h1 align="center"><img src="../image/success.svg" width="70px" height="120px" /></h1>
    </div>
    <div class="modal-footer">
        <center><a href="admin_home.php" class="btn btn-primary"
        style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px; text-decoration: none;" target="_blank">Admin Panel</a>
        </center>
    </div>
    <div class="modal-footer">
        <center>
            <h2><b>Redirecting... Please wait</b></h2>
        </center>
    </div>
</body>
</html>

<?php } else {  ?>
    <h1>User Details Not Found</h1>
    <p>We couldn't find the user details you requested.</p>
    <p>Please make sure the information is correct or contact support for assistance.</p>
<?php } ?>