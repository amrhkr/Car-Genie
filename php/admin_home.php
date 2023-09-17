
<?php
session_start(); include('conn.php');  date_default_timezone_set("Asia/Kolkata");
$cur_dt_dmy=date("d-m-Y"); $cur_time=date("H:i:s");
$cur_dt_ymd=date("Y-m-d");

//Please Do not touch this code End
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN PANNEL</title>
<!-- Favicon and touch icons -->
<link rel="stylesheet" href="../css/home.css" type="text/css"/>
<link	href="<?php	echo $dp_fcn?>"	sizes="128x128" rel="shortcut icon"
 type="image/x-icon"/>
<!--Dont Movable start-->
<link	href="assets/font-awesome/css/font-awesome.min.css"	rel="stylesheet"  type="text/css"/>
<link	href="assets/themify-icons/themify-icons.css"	rel="stylesheet"  type="text/css"/>

<link	href="assets/bootstrap/css/bootstrap.min.css"	rel="stylesheet"  type="text/css"/> <!--Dont Movable END-->
<!--------Please Do not touch this code End---------------->
</head>

<body class="hold-transition sidebar-mini">
<div class="top">
<div class="left"> <h2>Admin panel</h2></div>
<div class="right">
<h5>
<a href="Login.php">Logout</a></h5>
</div>
</div>
<div class="logo">
<div class="left">
<h1>CAR GENIE</h1>
</div>
<div class="right">

</div>
</div>

<div id="menu">
<center>
<a href="admin_home.php">Home</a>
<a href="admin_order.php">Order Details</a>
<a href="admin_product.php">Add Cars</a>
<a href="admin_payment.php">View Payment</a>
<!-- <a href="Invoice.php">Invoice</a> -->

</center>
</div>
<div id="preloader">
<div id="status"></div>
</div>
<!-- Site wrapper -->
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="header-icon">
<i class="fa fa-hospital-o"></i>
</div>
<div class="header-title">
<center>
<h1	style="font-weight:900;font-size:35px;color:red">USERS DETAILS</h1>

</center>
<br>
<div class="btn-group" id="buttonlist">
</div>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
</div>

<?php
//Collect Normal Data Code Start
$clt_dta ="select * from customer where Cus_id!='' ";

$result=$conn->query($clt_dta);

?>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" >
<thead>
<table border="1">
<tr class="info">
<th>S. No.</th>
<th>CUSTOMER ID</th>
<th>CISTOMER NAME</th>
<th>EMAIL ID</th>
<th>PASSWORD</th>
<th>ADDRESS</th>
<th>STATE</th>
<th>MOBILE NUMBER</th>


</tr>
</thead>
<tbody>
<?php $a=1;
while ($row = mysqli_fetch_array($result))
{

$pmt_id=$row['Cus_id'];

$crd_no=$row['Cus_Name'];
$add=$row['Email_ID'];
$cus_id=$row['Cus_Pwd'];
$purch_pric=$row['Cus_Add'];
$pur_dte=$row['Cus_State'];
$purch_tme=$row['Cus_Phone'];
?>
<tr>
<td style="font-weight:900; color: red; font-size : 25px;"><?php echo $a;?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $pmt_id?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $crd_no?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $add;?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $cus_id?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $purch_pric?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $pur_dte?></td>
<td style="font-weight:900; color: blue; font-size : 25px;"><?php echo $purch_tme?></td>
<?php
$a++;
?>
<?php  if($cus_id!='');
?>
</tr>
</tbody>
</table>

<!-- Start Core Plugins

================================================================
=====-->
<!-- jQuery -->
<script	src="<?php	echo	$dsh_cs_jq_mn_js?>" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="<?php echo $dsh_jq_mn_js?>" type="text/javascript"></script> <!--  Bootstrap -->
<script	src="<?php	echo	$dsh_btstp_mn_js?>" type="text/javascript"></script>
<!-- lobipanel -->
<script src="<?php echo $dsh_lbpnl_js?>" type="text/javascript"></script> <!-- Pace js
-->
<script src="<?php echo $dsh_ps_mn_js?>" type="text/javascript"></script> <!--
SlimScroll -->
<script src="<?php echo $dsh_slm_scrl?>" type="text/javascript"></script> <!--
FastClick -->
<script src="<?php echo $dsh_fst_slk_js?>" type="text/javascript"></script> <!--
CRMadmin frame -->
<script src="<?php echo $dsh_cstm_js?>" type="text/javascript"></script> <!-- End
Core Plugins
================================================================
=====-->
<!-- Start Theme label Script
================================================================
=====-->
<!-- Dashboard js -->
<script src="<?php echo $dsh_dhs_js?>" type="text/javascript"></script>
<!-- End Theme label Script
================================================================
=====-->
<!--
<link rel="stylesheet"
href="htpts://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.c ss"/>-->
<script src="<?php echo $slct_tw_js?>"></script>
<script>
$(document).ready(function() { $("#drid").select2(); });
</script>
</body>
</html>
