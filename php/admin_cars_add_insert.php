<?php  session_start();  include("conn.php");
date_default_timezone_set("Asia/Kolkata");
$cur_dt_dmy=date("d-m-Y");
$cur_tm=date("H:i:s");
$cur_dt_ymd=date("Y-m-d");  include("conn.php");
$vcl_nme=$_POST["car_nme"];
$vch_catg=$_POST["catgy"];
$vchl_prci=$_POST["pric"];
$car_id=$_POST["car_id"];
$vchl_img=$_POST["img_car"];


$ad_quz="insert into vechicle_info set

Vechicle_Name='$vcl_nme',  Vechicle_Category='$vch_catg',  Vechicle_Price='$vchl_prci',  Car_id='$car_id',  Vechicle_image='$vchl_img'
";
$quz_id=mysqli_query($conn,$ad_quz);
?>
<div class="modal-body">
<p	style="font-size:50px; font-weight:bold; color:#e70b3e; text-align:center;">YOUR FORM IS SUCESSFUL SUBMITTED</p>
<center><img src="image/sussfull.png"></center>
</div>
<div class="modal-footer">
<center><a href="car_dashboard.php" class="btn btn-primary" style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px;" target="_blank">VIWS CARS DASHBOARD</a></center>
</div>
