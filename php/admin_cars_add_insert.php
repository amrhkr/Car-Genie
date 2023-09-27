<?php  session_start(); 
    include("conn.php");
    
?>

<?php 
if (isset($_FILES['Vehicle_image']) && $_FILES['Vehicle_image']['error'] === 0) {
    $imageData = file_get_contents($_FILES['Vehicle_image']['tmp_name']);
    $imageName = mysqli_real_escape_string($conn, $_FILES['Vehicle_image']['name']);

    // Insert the image data into the database
    $query = "INSERT INTO vehicle_info (Vehicle_Name, Vehicle_Category, Vehicle_Price, Vehicle_Description, Vehicle_image)
              VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ssdss', $_POST['Vehicle_Name'], $_POST['Vehicle_Category'], $_POST['Vehicle_Price'], $_POST['Vehicle_Description'], $imageData);

    if (mysqli_stmt_execute($stmt)) {
        echo "Car details and image uploaded successfully.";
    } else {
        echo "Error inserting car details and image into the database: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "No file was uploaded or an error occurred during the upload.";
}
?>





<div class="modal-body">
    <p style="font-size:50px; font-weight:bold; color:#e70b3e; text-align:center;">YOUR FORM IS SUCESSFUL SUBMITTED</p>
    <center><img src="image/sussfull.png"></center>
</div>
<div class="modal-footer">
    <center><a href="car_dashboard.php" class="btn btn-primary"
            style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px;" target="_blank">VIWS CARS
            DASHBOARD</a></center>
            <center><a href="admin_cars_add.php" class="btn btn-primary"
            style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px;" target="_blank">ADD MORE CARS</a></center>
</div>


<DOCTYPE html>
    <head>
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        function performRedirect() {
            setTimeout(function() {
                window.location.href = "test.php";
            }, 3000);
        }
        window.onload = function() {
            performRedirect();
        };
    </script>
    </head>
    <body>
        <div class="modal-body">
            <p style="font-size:50px;font-weight:bold;color:#e70b3e;text-align:center;">VEHICLE ADDED SUCCESSFULLY</p>
            <h1 align="center"><img src="../image/success.svg" width="70px" height="120px" /></h1>
        </div>
        <div class="modal-footer">
            <center><a href="admin_cars_add.php" class="btn btn-primary"
            style="width: 100%;  height: 100px;font-weight: bold;font-size: 50px; text-decoration: none;" target="_blank">ADD MORE CARS</a>
            </center>
        </div>
        <div class="modal-footer">
            <center>
                <h2><b>Redirecting... Please wait</b></h2>
            </center>
        </div>
    </body>
</html>