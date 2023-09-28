<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include 'admin_header.php'; ?>
<?php 
    include('conn.php');
    date_default_timezone_set("Asia/Kolkata");
    $cur_dt_dmy=date("d-m-Y"); 
    $cur_time=date("H:i:s");
    $cur_dt_ymd=date("Y");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAR GENIE : ADMIN PANNEL</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    
    <?php include 'admin_menu.php'; ?>
    <div class="admindetails">
    <div class="container">
    <center>
        <h1 class="admintitle">ADMIN DETAILS</h1>
    </center>
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
</body>
</html>