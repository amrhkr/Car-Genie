<!DOCTYPE html>
<html>

<head>
    <title>CAR GENIE - Feedback</title>
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
    <div class="frame1">
        <form action="fed_bck_sts.php" method="post">
        <fieldset>
            <legend>FEEDBACK</legend>

            <label for="Name">Name:</label>
            <input type="text" name="cus_nme" id="Name" required>

            <label for="VehicleId">Vehicle ID:</label>
            <input type="text" name="vcli_id" id="VehicleId" required>

            <label for="FeedDetails">Feed Details:</label>
            <input type="text" name="detls" id="FeedDetails" required>

            <label for="Response">Response:</label>
            <input type="text" name="respns" id="Response">

            <label for="FeedbackStatus">Feedback Status:</label>
            <input type="text" name="sts" id="FeedbackStatus">
            <br/>
            <input type="reset" value="RESET" />
            <input type="submit" value="SUBMIT" />
        </fieldset>
    </form>
    </div>
    <div id="includeFooter"></div>
</body>

</html>