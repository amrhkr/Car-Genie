<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php include("conn.php"); ?>
<?php include("header.php"); ?>

<html>
<head>
    <title>CAR GENIE</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        $( document ).ready(function() {
            $("#includeHeader").load("../html/header.html");
            $("#includeFooter").load("../html/footer.html");
            $("#commonMenu").load("../html/menu.html");
            console.log( "ready!" );
        });
    </script>
</head>
<body>
    <div id="includeHeader"></div>
    <div id="commonMenu"></div>
    <?php include 'menu.php'; ?>
    <center class="pbgi">
    <div class="payment">
            <form action="accept_payment.php" method="post" >
                <fieldset>
                    <legend>PAYMENT</legend>

                    <label for="Vehicle_Id">VEHICLE ID:</label>
                    <input type="text" name="Vehicle_Id" id="Vehicle_Id" placeholder="Vehicle ID" required><br><br>

                    <label for="Purchase_Quantity">PURCHASE QUANTITY:</label>
                    <input type="number" name="Purchase_Quantity" id="Purchase_Quantity" placeholder="Quantity"><br><br>

                    <label for="PurVehicle_Name">VEHICLE NAME:</label>
                    <input type="text" name="PurVehicle_Name" id="PurVehicle_Name" placeholder="Vehicle NAME"><br><br>

                    <label for="Purchase_Price">TOTAL AMOUNT:</label>
                    <input type="text" name="Purchase_Price" id="Purchase_Price" placeholder="Purchase Price"><br><br>

                    <label for="paymode">Payment Mode:</label>
                    <select name="paymode" id="paymode">
                        <option value="-1">--SELECT PAYMENT MODE--</option>
                        <option value="Credit Card">Credit card</option>
                        <option value="Debit Card">Debit card</option>
                        <option value="Paytm">PayTM</option>
                    </select><br><br>
                    <label for="card_no">CARD NO:</label>
                    <input type="text" name="card_no" id="card_no" placeholder="Card Number"><br><br>
                    <label for="Delivery_Add">ADDRESS:</label>
                    <input type="text" name="Delivery_Add" id="Delivery_Add" placeholder="Address"><br><br>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Pay Now">
                </fieldset>
            </form>
    </div>
    </center>
    <div id="includeFooter"></div>
</body>
</html>