<html>
    <head>
        <title> CAR GENIE - Admin</title>
        <link rel="stylesheet" href="../css/home.css" type="text/css" />
        <script src="../jQuery/jqueryfile.js"></script>
        <script>
            $( document ).ready(function() {
                $("#includeHeader").load("../html/header.html");
                $("#includeFooter").load("../html/footer.html");
                console.log( "ready!" );
            });
        </script>
    </head>

<body>
    <div class="top">
        <div class="left">
            <h2 style="text-align:center;">Admin Panel</h2>
        </div>
        <div class="right">
            <h5>
                <a href="login.php">Logout</a>
            </h5>
        </div>
    </div>
    <div id="includeHeader"></div>
    </div>


    <div id="menu">
        <center>
            <a href="admin_home.php">Home</a>
            <a href="admin_order_view.php">Order Details</a>
            <a href="admin_cars_add.php">Add Cars</a>
            <a href="admin_payment_view.php">View Payment</a>
            <!-- <a href="Invoice.php">Invoice</a> -->

        </center>
    </div>
    <div class="pick">
        <div class="frame2">
            <center>
                <form name="login" method="post" action="admin_cars_add_insert.php">
                    <h1>ADD CARS CATEGORY</h1>
                    <h4>CAR ID: &nbsp; <input type="text" name="car_id" placeholder="User id"></h4>
                    <h4>CAR NAME : &nbsp; <input type="text" name="car_nme" placeholder="User  id"></h4>
                    <h4>CATEGORY : <input type="text" name="catgy" placeholder="Password"></h4>
                    <h4>CAR PRICES: &nbsp; <input type="text" name="pric" placeholder="User id"></h4>
                    <h4>CAR IMAGE: &nbsp; <input type="file" style="width:	auto;height:
                    40px" class="form-control" name="img_car" accept="image/png, image/jpeg" autocomplete="off"></h4>
                    <input type="submit" value="Submit" onclick="alert('successfull submited')">
                </form>
            </center>
        </div>
    </div>
    <div id="includeFooter"></div>

</body>

</html>