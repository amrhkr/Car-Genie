<!DOCTYPE html>

<html>

<head>
    <title>Car Genie - Home</title>
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
    <div id="includeHeader"></div>

    <div id="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="#" onclick="alert('Please Login First...!!!')">All CARS</a>
        <select onclick="alert('Please Login First...!!!')">
            <option>Cars Category</option>
            <option value="car_catgy_one.php">Kia Forte</option>
            <option value="car_catgy_two.php">Scorpio Car</option>
            <option value="car_catgy_one.php">GT Sport Car</option>
            <option value="car_catgy_one.php">Audi A1</option>
            <option value="car_catgy_one.php">Toyota Corolla</option>
            <option value="car_catgy_one.php">Nissan</option>
            <option value="car_catgy_one.php">BMW</option>
            <option value="car_catgy_one.php">Tata</option>
        </select>

        <a href="contact.php">Contact Us</a>
        <a href="feedback.php">FeedBack</a>
    </div>
    <center>
        <h1>WHAT'S POPULAR IN CARS</h1>
    </center>
    <div class="image">
        
        <img src="../image/cars/infinity.jpg" style=" width: 49%; float: left; height: 500px; margin-left:  10px;">
        <img src="../image/cars/nissan3.jpg" style=" width: 49%; float: right; height: 500px; margin-right:  10px; ">

        <h3 class="description">Performance cars aren't all about engine noise, exhaust fumes,
            and squealing tires.
        </h3>
        <h3 class="description"> Engine Tweaks Pump Up Horsepower </h3>
    </div>
    <div id="includeFooter"></div>
    </body>
</html>