<?php
session_start(); include("conn.php"); date_default_timezone_set("Asia/Kolkata");
$cur_dt_dmy=date("d-m-Y"); $cur_tm=date("H:i:s"); $cur_dt_ymd=date("Y-m-d");
include("conn.php");

$cus_id="select * from customer where Cus_id='$cus_nm'";
$qst_cus_id=$conn->query($cus_id);
$clct_cus_id=$qst_cus_id->fetch_assoc();

$cstm_id=$clct_cus_id['Cus_id'];
$crd_no=$_POST["crd_num"];
$adrs=$_POST["addrs"];
$puchse_pric=$_POST["amt"];
$vchle_id=$_POST["vchl_id"];
$cus_mbl=$_POST["pay"];
$vchle_nme=$_POST["vchl_nme"];
$purchse_qunty=$_POST["purch_qunt"];
$ad_quz="insert into payment_info set card_no ='$crd_no', address='$adrs',
cus_id='$cstm_id', purchase_price='$puchse_pric', purchase_date='$cur_dt_ymd',
purchase_Quantity='$purchse_qunty',
vehicle_id='$vchle_id', vehicle_Name='$vchle_nme', purchase_time='$cur_tm'";
$quz_id=mysqli_query($conn,$ad_quz);
?>

<div class="modal-body">
    <p
        style="font-size: 50px;font-weight: bold;color: #e70b3e;text-align: center;">YOUR
        PAYMENT IS SUCCESSFULL</p> <center><img src="image/sussfull.png"></center>
</div>
<div class="modal-footer">
    <center><a href="all_cars_ctgry.php" class="btn btn-primary"
            style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px;"
            target="_blank">VIWS RECEIPT</a></center>
</div>
