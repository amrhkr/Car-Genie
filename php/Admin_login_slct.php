<?php
session_start();
include("conn.php");
$cus_id="select * from admin ";
$qst_cus_id=$conn->query($cus_id);
$clct_cus_id=$qst_cus_id->fetch_assoc();
$ad_eml=$clct_cus_id['Login_ID'];
$ad_nme=$clct_cus_id['Admin_Name'];
$ad_pwd=$clct_cus_id['Admin_pwd'];
$ad_mb=$clct_cus_id['Admin_phone']; ?>
<div class="modal-body">
<p style="font-size: 50px;font-weight: bold;color: #e70b3e;text-align:
center;">LOGIN IS SUCCESSFULLY</p>
<center><img src="image/sussfull.png"></center>
</div>
<div class="modal-footer">
<center><a href="admin_home.php" class="btn btn-primary" style="width: 100%;
height: 100px;font-weight: bold;font-size: 50px;" target="_blank">GO TO ADMIN
PANNEL</a></center>
</div>