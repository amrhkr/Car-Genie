<?php include("conn.php");
?>
<?php require_once("header.php"); ?>
<html>

<?php
    $query = "SELECT * FROM vehicle_info";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error retrieving data: " . mysqli_error($conn));
    }
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name  = $row['Vehicle_Name'] ;
        $category  = $row['Vehicle_Category'];
        $price  = $row['Vehicle_Price'];
        $description  = $row['Vehicle_Description'];
        $image  = base64_encode($row['Vehicle_image']);
        
        // Display the image (assuming the image is stored as binary data)
        #echo '<td><img src="data:image/jpeg;base64,' .  . '" width="100"></td>';
        
    
?>
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

<body><?php  ?>
    <div id="includeHeader"></div>
    <!-- <div id="commonMenu"></div> -->
    <?php require_once 'menu.php'; ?>
    <?php 
        if($counter == 0){
            echo '<div class="product-item">';
        }
        if($counter < 3){
            echo '<div class="item">';
            echo '<h1>'. $category .'</h1>';
            echo '<a href="payment.php"><img src="data:image/jpeg;base64,' . $image . '" title="Click to Buy" /></a><br/><br/>';
            echo '<h3>' . $name.' '.$category . '<br/> Price: &#8377 '. $price . '<br/>';
            echo '<input type="button" value="Buy Now" onclick="location.href="payment.php" />';
            echo '</h3></div>';
        }
        if($counter == 0){
            echo '</div>';
        }
        $counter++;
        if($counter == 3){
            $counter = 0;
        }
    }
    ?>
    <div id="includeFooter"></div>
</body>

</html>