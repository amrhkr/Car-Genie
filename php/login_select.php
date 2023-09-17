<?php  session_start();  include("conn.php");

$cus_nm=$_POST["user"];


$cus_id="select * from customer where Cus_id='$cus_nm'";
$qst_cus_id=$conn->query($cus_id);
$clct_cus_id=$qst_cus_id->fetch_assoc();

$ad_eml=$clct_cus_id['Email_ID'];
$ad_mb=$clct_cus_id['Cus_Pwd'];
?>
<div class="modal-body">
<p	style="font-size:	50px;font-weight:bold;color:	#e70b3e;text-align:
center;">LOGIN IS SUCCESSFULLY</p>
<center><img src="image/success.png"></center>
</div>
<div class="modal-footer">
<center><a href="all_cars_ctgry.php" class="btn btn-primary" style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px;" target="_blank">VIWS  CARS</a></center>
</div>
