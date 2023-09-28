<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php 
    include("conn.php");
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    $cur_dt_dmy=date("d-m-Y");
    $cur_tm=date("H:i:s");
    $cur_dt_ymd=date("Y-m-d");
    $Cus_Id = $_SESSION['Cus_id'];
    $customer_name=$_POST["customer_name"];
    $Vehicle_Id=$_POST["Vehicle_Id"];
    $Feed_Details=$_POST["Feed_Details"];
    $Feed_Response=$_POST["Feed_Response"];

    $ad_quz="INSERT INTO feedback SET Cus_Id ='$Cus_Id', Vehicle_Id='$Vehicle_Id',
        customer_name='$customer_name', Feed_Details='$Feed_Details', Feed_Response='$Feed_Response'";
    $quz_id=mysqli_query($conn,$ad_quz);
?>
<DOCTYPE html>
    <head>
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        function performRedirect() {
            setTimeout(function() {
                window.location.href = "all_cars.php";
            }, 3000);
        }
        window.onload = function() {
            performRedirect();
        };
    </script>
    </head>
    <body>
        <div class="modal-body">
            <p style="font-size:50px;font-weight:bold;color:#e70b3e;text-align:center;">FEED-BACK SUBMITTED SUCCESSFULLY</p>
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