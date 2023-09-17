<?php
session_start(); include("conn.php");  date_default_timezone_set("Asia/Kolkata");
$cur_dt_dmy=date("d-m-Y");	$cur_tm=date("H:i:s"); $cur_dt_ymd=date("Y-m-d");
include("conn.php");
$cus_id=$_POST["cus_nme"]; $vcl_id=$_POST["vcli_id"];
$feed_detls=$_POST["detls"];
$feed_respn=$_POST["respns"];
$fed_sts=$_POST["sts"];
$ad_quz="insert into feed_back set  Cus_ID ='$cus_id',  Vechicle_ID='$vcl_id',  Feed_Details='$feed_detls',  Feed_Response='$feed_respn',  Feed_Status='$fed_sts'
";
$quz_id=mysqli_query($conn,$ad_quz);
?>

<div class="modal-body">
    <p style="font-size:	50px;font-weight:	bold;color:	#e70b3e;text-align:  center;">THANK YOU <br>YOUR FEEDBACK IS
        SUCESSFUL SUBMITTED</p>
    <center><img src="../image/success.png"></center>
</div>