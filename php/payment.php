<?php include("conn.php");
?>
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
    <center>
    <div class="payment">
            <form action="accept_payment.php" method="post" >
                <fieldset>
                    <legend>PAYMENT</legend>

                    <label for="vchl_id">VEHICLE ID:</label>
                    <input type="text" name="vchl_id" id="vchl_id" placeholder="Vehicle ID"><br><br>

                    <label for="purch_qunt">PURCHASE QUANTITY:</label>
                    <input type="number" name="purch_qunt" id="purch_qunt" placeholder="Quantity"><br><br>

                    <label for="vchl_nme">VEHICLE NAME:</label>
                    <input type="text" name="vchl_nme" id="vchl_nme" placeholder="Vehicle NAME"><br><br>

                    <label for="amt">TOTAL AMOUNT:</label>
                    <input type="text" name="amt" id="amt" placeholder="Amount"><br><br>

                    <label for="paymode">Payment Mode:</label>
                    <select name="paymode" id="paymode">
                        <option value="-1">--SELECT PAYMENT MODE--</option>
                        <option value="Credit Card">Credit card</option>
                        <option value="Debit Card">Debit card</option>
                        <option value="Paytm">Paytm</option>
                    </select><br><br>

                    <label for="crd_num">CARD NO:</label>
                    <input type="text" name="crd_num" id="crd_num" placeholder="Card Number"><br><br>
                    <label for="addrs">ADDRESS:</label>
                    <input type="text" name="addrs" id="addrs" placeholder="Address"><br><br>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Pay Now">
                    
                </fieldset>
            </form>
    </div>
    </center>
    <div id="includeFooter"></div>
</body>

</html>