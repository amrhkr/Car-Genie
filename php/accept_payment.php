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
    $pur_time = date("H:i:s"); 
    $pur_date = date("Y-m-d");
    $cus_email = $_SESSION['cus_email'];
    $cus_name = $_SESSION['cus_name'];
    $customer = "SELECT * FROM customer WHERE Email_ID='$cus_email'";
    
    $customer=$conn->query($customer);
    $clct_customer=$customer->fetch_assoc();
    $Cus_id = $clct_customer['Cus_id'];
    $Vehicle_Id = $_POST["Vehicle_Id"];
    $PurVehicle_Name = $_POST["PurVehicle_Name"];
    $paymode = $_POST["paymode"];
    $Purchase_Price = $_POST["Purchase_Price"];
    $Purchase_Quantity = $_POST["Purchase_Quantity"];
    $Delivery_Add=$_POST["Delivery_Add"];
    $card_no = $_POST["card_no"];

    $insertPayment="INSERT INTO payment_info set `Cus_id` ='$Cus_id', 
            `Vehicle_Id` ='$Vehicle_Id', `Purchase_Price` ='$Purchase_Price',
            `Purchase_Date` ='$pur_date', `Purchase_Time` ='$pur_time', 
            `Purchase_Quantity` ='$Purchase_Quantity', `Delivery_Add` ='$Delivery_Add', 
            `card_no` ='$card_no'";
            echo $insertPayment;
    $quz_id=mysqli_query($conn, $insertPayment);
    if($quz_id->num_rows>0) {
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
        <p style="font-size:50px;font-weight:bold;color:#e70b3e;text-align:center;">YOUR PAYMENT IS SUCCESSFULL</p>
        <h1 align="center"><img src="../image/success.svg" width="70px" height="120px" /></h1>
    </div>
    <div class="modal-footer">
        <center><a href="all_cars.php" class="btn btn-primary"
        style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px; text-decoration: none;" target="_blank">VIEW MORE CARS</a>
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