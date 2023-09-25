<?php include('conn.php');  date_default_timezone_set("Asia/Kolkata");
$cur_dt_dmy=date("d-m-Y"); $cur_time=date("H:i:s");
$cur_dt_ymd=date("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN PANNEL</title>
    <!-- Favicon and touch icons -->
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <link href="<?php echo $dp_fcn ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <!--Dont Movable start-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
    <!--Dont Movable END-->
    <!--------Please Do not touch this code End---------------->
    <script src="../jQuery/jqueryfile.js"></script>
    
</head>

<body class="hold-transition sidebar-mini">
    <?php include 'admin_header.php'; ?>
    <?php include 'admin_menu.php'; ?>
    <div class="admindetails">
    <center>
        <h1>ADMIN DETAILS</h1>
    </center>
    <div class="container">

        <table class="table table-bordered table-striped table-hover" border="1">
            <thead>
                <tr class="info">
                    <th>SR. NO.</th>
                    <th>ADMIN ID</th>
                    <th>ADMIN NAME</th>
                    <th>PASSWORD</th>
                    <th>MOBILE NUMBER</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $admin_data = "SELECT * FROM `admin` WHERE id > 0";
                    $result=$conn->query($admin_data);

                ?>
                <?php $counter=1;
                    while ($row = mysqli_fetch_array($result)){
                        $adminData[] = array(
                            'Login_ID' =>$row['Login_ID'],
                            'Admin_Name' => $row['Admin_Name'],
                            'Admin_Pwd' => $row['Admin_Pwd'],
                            'Admin_Phone' => $row['Admin_Phone']
                        );
                    }
                ?>
                <?php foreach ($adminData as $admin){ ?>
                <tr class="datainfo">
                    <td class="admintablesrn">
                        <?php echo $counter++;?>
                    </td>
                    <td class="admintable">
                        <?php echo $admin['Login_ID']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $admin['Admin_Name']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $admin['Admin_Pwd']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $admin['Admin_Phone']; ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    <?php include 'admin_footer.php'; ?>
    <!-- jQuery -->
    <script src="<?php	echo	$dsh_cs_jq_mn_js?>" type="text/javascript"></script>
    <!-- jquery-ui -->
    <script src="<?php echo $dsh_jq_mn_js?>" type="text/javascript"></script>
     <!--  Bootstrap -->
    <script src="<?php	echo	$dsh_btstp_mn_js?>" type="text/javascript"></script>
    <!-- lobipanel -->
    <script src="<?php echo $dsh_lbpnl_js?>" type="text/javascript"></script> 
    <!-- Pace js-->
    <script src="<?php echo $dsh_ps_mn_js?>" type="text/javascript"></script> 
    <!--SlimScroll -->
    <script src="<?php echo $dsh_slm_scrl?>" type="text/javascript"></script> 
    <!--FastClick -->
    <script src="<?php echo $dsh_fst_slk_js?>" type="text/javascript"></script>
    <script src="<?php echo $dsh_cstm_js?>" type="text/javascript"></script>
    <script src="<?php echo $dsh_dhs_js?>" type="text/javascript"></script>
    <script src="<?php echo $slct_tw_js?>"></script>
    <script>
        $( document ).ready(function() {
            $("#drid").select2();
            $("#includeHeader").load("../html/header.html");
            $("#includeFooter").load("../html/footer.html");
            console.log( "ready!" );
        });
    </script>
</body>
</html>