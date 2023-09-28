<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR GENIE : User Profile</title>
</head>
<body>
    <?php include 'header.php' ?>
    <?php include 'menu.php' ?>
<div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-hospital-o"></i>
                </div>
                <div class="header-title">
                    <center>
                        <h1 style="font-weight:900;font-size:35px;color:green">CUSTOMER DETAILS</h1>
                    </center>
                    <br>
                    <div class="btn-group" id="buttonlist"></div>
                </div>
            </section>
            <section class="content">
                <div class="row"></div>
                <?php
                    echo $_SESSION['email'];
                    $curr_user = $_SESSION['email'];
                    $customer_data = "SELECT * FROM `customer` WHERE Email_ID = $curr_user";
                    $result=$conn->query($customer_data);
                    if($result->num_rows>0) {
                    $customer=$result->fetch_assoc();
                    $Cus_id = $customer['Cus_id'];
                    $Cus_Name  = $customer['Cus_Name'];
                    $Email_ID  = $customer['Email_ID'];
                    $Cus_Sex = $customer['Cus_Sex'];
                    $Cus_Phone = $customer['Cus_Phone'];
                    $Cus_City  = $customer['Cus_City'];
                    $Cus_State = $customer['Cus_State'];
                    }
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" border="1">
                        <thead>
                                <tr class="info">
                                    <th>SR. NO.</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>GENDER</th>
                                    <th>MOBILE</th>
                                    <th>CITY</th>
                                    <th>STATE</th>
                                </tr>
                        </thead>
                        <tbody>                        
                            <tr>
                                <td style="font-weight: 900; color: red; font-size: 25px;">
                                    <?php echo $Cus_id ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Cus_Name ; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Email_ID; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Cus_Sex; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Cus_Phone; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Cus_City; ?>
                                </td>
                                <td style="font-weight:900; color: blue; font-size : 25px;">
                                    <?php echo $Cus_State; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>