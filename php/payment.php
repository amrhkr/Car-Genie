<?php include("conn.php");  session_start();
?>

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
    <div class="payment">
        <form action="accept_payment.php" method="post">
            <h1>Payment</h1>
            VEHICLE ID:<input type="text" name="vchl_id" placeholder="Vehicle ID"><br><br> 
            PURCHASE QUENTITY :<input type="number" name="purch_qunt" placeholder="Quentity"><br><br>
            VEHICLE NAME:<input type="text" name="vchl_nme" placeholder="Vehicle NAME"><br><br>
            TOTAL AMOUNT: <input type="text" name="amt" placeholder="amount"><br><br> Payment Mode
            <select>
                <option>Select card</option>
                <option value="Credit Card" name="pay">Credit card</option>
                <option value="Debit Card" name="pay">Debit card</option>
                <option value="Paytm" name="pay">Paytm</option>
            </select><br><br>
            CARD NO:<input type="text" name="crd_num" placeholder="Card Number"><br><br> ADDRESS:<input type="text"
                name="addrs" placeholder="address"><br><br>

            <input type="submit" value="PayNow">
            <input type="submit" value="Reset">
        </form>
    </div>
    <div id="includeFooter"></div>
</body>

</html>