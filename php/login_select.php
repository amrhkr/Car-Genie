<?php
    include("conn.php");
    $cus_email=$_POST["cus_email"];
    $cus_id = "select * from customer where Email_ID='$cus_email'";
    $qst_cus_id=$conn->query($cus_id);
    if ($qst_cus_id->num_rows>0) {
    $clct_cus_id=$qst_cus_id->fetch_assoc();
    $ad_eml=$clct_cus_id['Email_ID'];
    $ad_mb=$clct_cus_id['Cus_Pwd'];
     $_SESSION['email'] = $ad_eml;
     $_SESSION['c_id']=$ad_mb;
    
?>
<DOCTYPE html>
    <head>
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        function performRedirect() {
            setTimeout(function() {
                window.location.href = "all_cars.php";
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
            <center><a href="all_cars.php" class="btn btn-primary"
            style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px; text-decoration: none;" target="_blank">VIEW CARS</a>
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
