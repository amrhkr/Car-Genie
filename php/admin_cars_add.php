<?php include 'admin_header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title> CAR GENIE - Admin</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
</head>
<body>
    <?php include 'admin_menu.php'; ?>
    <center>
        <div class="frame1 center">
            <form name="carsAdd" method="post" action="admin_cars_add_insert.php" enctype="multipart/form-data" class="feedback-form">
                <fieldset>
                    <legend>ADD CARS</legend>
        
                    <div class="form-group">
                        <label for="Vehicle_Name">VEHICLE NAME:</label>
                        <input type="text" name="Vehicle_Name" id="Vehicle_Name" placeholder="Enter Vehicle Name..." required>
                    </div>
        
                    <div class="form-group">
                        <label for="Vehicle_Category">VEHICLE CATEGORY:</label>
                        <select name="Vehicle_Category" id="Vehicle_Category">
                            <option value="-1">--SELECT VEHICLE CATEGORY--</option>
                            <option value="CAMPERVAN">CAMPERVAN</option>
                            <option value="PICK-UP">PICK-UP</option>
                            <option value="ROADSTER">ROADSTER</option>
                            <option value="SEDAN">SEDAN</option>
                            <option value="SPORTS">SPORTS</option>
                            <option value="SUPER">SUPER</option>
                            <option value="S-U-V">S-U-V</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Vehicle_Price">VEHICLE PRICE:</label>
                        <input type="text" name="Vehicle_Price" id="Vehicle_Price" placeholder="Enter Vehicle Price...">
                    </div>
                    <div class="form-group">
                        <label for="Vehicle_Description">VEHICLE DETAILS:</label>
                        <input type="text" name="Vehicle_Description" id="Vehicle_Description" placeholder="Enter Vehicle Description...">
                    </div>
                    <div class="form-group">
                        <label for="Vehicle_image">VEHICLE IMAGE:</label>
                        <input type="file" accept="image/png, image/jpeg" name="Vehicle_image" placeholder="Enter Your Response..." id="Vehicle_image">
                    </div>
                    
                    <input type="reset" value="RESET" class="btn-reset">
                    <input type="submit" value="SUBMIT" class="btn-submit">
                </fieldset>
            </form>
        </div>
    </center>
    <?php include 'admin_footer.php' ?>

</body>
</html>