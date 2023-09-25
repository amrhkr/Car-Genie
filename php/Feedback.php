<?php include("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE - Feedback</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <link rel="stylesheet" href="../css/feedback.css" type="text/css" /> <!-- Add a new CSS file for feedback styling -->
    <script src="../jQuery/jqueryfile.js"></script>
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
                        <label for="Name">Name:</label>
                        <input type="text" name="cus_nme" id="Name" placeholder="Enter Your Name..." required>
                    </div>
        
                    <div class="form-group">
                        <label for="VehicleId">Vehicle ID:</label>
                        <input type="text" name="vcli_id" id="VehicleId" placeholder="Enter Vehile Id..." required>
                    </div>
        
                    <div class="form-group">
                        <label for="FeedDetails">Feed Details:</label>
                        <input type="text" name="detls" id="FeedDetails" placeholder="Enter Details..." required>
                    </div>
        
                    <div class="form-group">
                        <label for="Response">Response:</label>
                        <input type="text" name="respns" placeholder="Enter Your Response..." id="Response">
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
