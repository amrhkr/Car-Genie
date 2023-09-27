<?php include("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE - Feedback</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" /><script src="../jQuery/jqueryfile.js"></script>
    <script>
        $(document).ready(function () {
            $("#includeHeader").load("../html/header.html");
            $("#includeFooter").load("../html/footer.html");
            $("#commonMenu").load("../html/menu.html");
            console.log("ready!");
        });
    </script>
</head>

<body>
    <!-- <div id="includeHeader"></div> -->
    <!-- <div id="commonMenu"></div> -->
    <?php include 'menu.php'; ?>
    <center>
        <div class="frame1 center">
            <form action="fed_bck_sts.php" method="post" class="feedback-form">
                <fieldset>
                    <legend>FEED BACK</legend>
        
                    <div class="form-group">
                        <label for="customer_name">Name:</label>
                        <input type="text" name="customer_name" id="customer_name" placeholder="Enter Your Name..." required value="<?php echo $_SESSION['cus_name']; ?>">
                    </div>
        
                    <div class="form-group">
                        <label for="Vehicle_Id">Vehicle ID:</label>
                        <input type="text" name="Vehicle_Id" id="Vehicle_Id" placeholder="Enter Vehile Id...">
                    </div>
        
                    <div class="form-group">
                        <label for="Feed_Details">Feed Details:</label>
                        <input type="text" name="Feed_Details" id="Feed_Details" placeholder="Enter Details..." required>
                    </div>
        
                    <div class="form-group">
                        <label for="Feed_Response">Response:</label>
                        <input type="text" name="Feed_Response" placeholder="Enter Your Response..." id="Feed_Response">
                    </div>
                    <input type="reset" value="RESET" class="btn-reset">
                    <input type="submit" value="SUBMIT" class="btn-submit">
                </fieldset>
            </form>
        </div>
    </center>
    
    <div id="includeFooter"></div>
</body>

</html>
