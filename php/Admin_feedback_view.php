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
        <h1 class="admintitle">FEED-BACK DETAILS</h1>
    </center>
        <table class="table table-bordered table-striped table-hover" border="1">
            <thead>
                <tr class="info">
                    <th>SR. NO.</th>
                    <th>CUSTOMER ID</th>
                    <th>VEHICLE ID</th>
                    <th>CUSTOMER NAME</th>
                    <th>FEED-BACK DETAILS</th>
                    <th>FEED-BACK RESPONSE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $feedback_data = "SELECT * FROM `feedback` WHERE Feed_ID > 0";
                    $result=$conn->query($feedback_data);
                ?>
                <?php $counter=1;
                    while ($row = mysqli_fetch_array($result)){
                        $feedbackData[] = array(
                            'Cus_Id' =>$row['Cus_Id'],
                            'Vehicle_Id' => $row['Vehicle_Id'],
                            'Feed_Details' => $row['Feed_Details'],
                            'customer_name' => $row['customer_name'],
                            'Feed_Response' => $row['Feed_Response']
                        );
                    }
                ?>
                <?php foreach ($feedbackData as $feedback){ ?>
                <tr class="datainfo">
                    <td class="admintablesrn">
                        <?php echo $counter++;?>
                    </td>
                    <td class="admintable">
                        <?php echo $feedback['Cus_Id']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $feedback['Vehicle_Id']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $feedback['customer_name']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $feedback['Feed_Details']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $feedback['Feed_Response']; ?>
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