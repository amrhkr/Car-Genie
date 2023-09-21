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
    <link rel="stylesheet" href="home.css" type="text/css" />
    <link href="<?php echo $dp_fcn?>" sizes="128x128" rel="shortcut icon" type="image/x-  icon" />

    <!--Dont Movable start-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <!--Dont Movable END-->
    <!--------Please Do not touch this code End---------------->
</head>

<body class="hold-transition sidebar-mini">
    <div class="top">
        <div class="left">
            <h2>Admin panel</h2>
        </div>
        <div class="right">
            <h5>
                <a href="Login.php">Logout</a>
            </h5>
        </div>
    </div>

    <div class="logo">
        <div class="left">
            <h1>CAR GENIE</h1>
        </div>
        <div class="right"></div>
    </div>
    <div id="menu">
        <center>
            <a href="admin_home.php">Home</a>
            <a href="admin_order_view.php">Order Details</a>
            <a href="admin_cars_add.php">Add Cars</a>
            <a href="admin_payment_view.php">View Payment</a>
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
                        <h1 style="font-weight:900;font-size:35px;color:red">PAYMENT DETAILS</h1>
                    </center><br>
                    <div class="btn-group" id="buttonlist"></div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row"></div>
                <?php
                    //Collect Normal Data Code Start
                    $clt_dta ="select * from payment_info where payment_id!='' ";
                    $result=$conn->query($clt_dta);
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <table border="1">
                                <tr class="info">
                                    <th>SR. No.</th>
                                    <th>PAYMENT ID</th>
                                    <th>CRAD NO</th>
                                    <th>ADDRESS</th>
                                    <th>CUSTOMER ID</th>
                                    <th>PURCHASE PRICE</th>
                                    <th>PURCHASE DATE </th>
                                    <th>PURCHASE TIME</th>
                                    <th>PURCHASE QUENTITY</th>
                                    <th>VECHILE ID</th>
                                    <th>VECHILE NAME</th>
                                </tr>
                            </table>
                        </thead>
                        <tbody>
                            <?php $a=1;
                                while ($row = mysqli_fetch_array($result)){
                                    $pmt_id=$row['payment_id'];
                                    $crd_no=$row['card_no'];
                                    $add=$row['address'];
                                    $cus_id=$row['cus_id'];
                                    $purch_pric=$row['purchase_price'];
                                    $pur_dte=$row['purchase_date'];
                                    $purch_tme=$row['purchase_time'];
                                    $purch_qunty=$row['purchase_Quantity'];
                                    $vchl_id=$row['vehicle_id'];
                                    $vchl_nme=$row['vehicle_Name'];
                            ?>
                            <tr>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $a; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $pmt_id ?>
                                </td>
                                <td>
                                    <?php if($vchl_id!=''){ ?>
                                    <?php } ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $crd_no ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $add; ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $cus_id ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $purch_pric ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $pur_dte ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $purch_tme ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $purch_qunty ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $vchl_id ?>
                                </td>
                                <td style="font-weight:900; color: red; font-size : 25px;">
                                    <?php echo $vchl_nme ?>
                                </td>
                            </tr>
                            <?php $a++; } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- Start Core Plugins=====================================================================-->
    <!-- jQuery -->
    <script src="<?php	echo	$dsh_cs_jq_mn_js?>" type="text/javascript"></script>
    <!-- jquery-ui -->
    <script src="<?php	echo	$dsh_jq_mn_js?>" type="text/javascript"></script> <!--  Bootstrap -->
    <script src="<?php	echo	$dsh_btstp_mn_js?>" type="text/javascript"></script>
    <!-- lobipanel -->
    <script src="<?php echo $dsh_lbpnl_js?>" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="<?php	echo	$dsh_ps_mn_js ?>" type="text/javascript"></script> <!--  SlimScroll -->
    <script src="<?php echo $dsh_slm_scrl ?>" type="text/javascript"></script> <!-- FastClick -->
    <script src="<?php	echo	$dsh_fst_slk_js?>" type="text/javascript"></script>  <!-- CRMadmin frame -->
    <script src="<?php echo $dsh_cstm_js?>" type="text/javascript"></script> <!-- End Core  Plugins
    =====================================================================-->
    <!-- Start Theme label Script=====================================================================-->
    <!-- Dashboard js -->
    <script src="<?php echo $dsh_dhs_js ?>" type="text/javascript"></script>
    <!-- End Theme label Script=====================================================================-->
    <!--<link	rel="stylesheet"  href="htpts://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.c ss"/>-->
    <script src="<?php echo $slct_tw_js?>"></script>
    <script>
        $(document).ready(function () {
            $("#drid").select2();
        });
    </script>
</body>
</html>