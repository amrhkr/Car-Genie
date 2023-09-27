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
        <h1 class="admintitle">PAYMENT DETAILS</h1>
    </center>
        <table class="table table-bordered table-striped table-hover" border="1">
            <thead>
                <tr class="info">
                    <th>SR. NO.</th>
                    <th>CUSTOMER ID</th>
                    <th>VEHICLE ID</th>
                    <th>VEHICLE NAME</th>
                    <th>PAID VIA</th>
                    <th>AMOUNT</th>
                    <th>PURCHASE DATE-TIME</th>
                    <th>QUANTITY</th>
                    <th>ADDRESS</th>
                    <th>CARD NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pay_data = "SELECT * FROM `payment_info` WHERE Purchase_ID > 0";
                    $result=$conn->query($pay_data);
                ?>
                <?php $counter=1;
                    while ($row = mysqli_fetch_array($result)){
                        $paymentData[] = array(
                            'Cus_Id' =>$row['Cus_Id'],
                            'card_no' => $row['card_no'],
                            'paymode' => $row['paymode'],
                            'Vehicle_Id' => $row['Vehicle_Id'],
                            'Delivery_Add' => $row['Delivery_Add'],
                            'Purchase_Date' => $row['Purchase_Date'],
                            'Purchase_Time' => $row['Purchase_Time'],
                            'Purchase_Price' => $row['Purchase_Price'],
                            'PurVehicle_Name' => $row['PurVehicle_Name'],
                            'Purchase_Quantity' => $row['Purchase_Quantity']
                        );
                    }
                ?>
                <?php foreach ($paymentData as $payment){ ?>
                <tr class="datainfo">
                    <td class="admintablesrn">
                        <?php echo $counter++;?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Cus_Id']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Vehicle_Id']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['PurVehicle_Name']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['paymode']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Purchase_Price']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Purchase_Date'].'/'.$payment['Purchase_Time']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Purchase_Quantity']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['Delivery_Add']; ?>
                    </td>
                    <td class="admintable">
                        <?php echo $payment['card_no']; ?>
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