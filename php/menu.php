<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <div id="menu">
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <a href="is_logged_in.php" >All CARS</a>
        
        <?php  if (isset($_SESSION['cus_email'])){ ?> 
                    <select id="CarCat">
                        <option selected >CARS CATEGORY</option>
                        <option value="campervan.php">Campervan</option>
                        <option value="pickup.php">Pickup</option>
                        <option value="roadster.php">Roadster</option>
                        <option value="sedan.php">Sedan</option>
                        <option value="sport.php">Sport Car</option>
                        <option value="super.php">Super Car</option>
                        <option value="suv.php">SUV</option>
                    </select>;
                    <a href="feedback.php">FEED BACK</a>
            <?php } ?>

        <a href="contact.php">CONTACT US</a>
        
    </div>
</body>
</html>

<script>

    $(document).ready(function(){
        $('#CarCat').on('change', function() {
          var host = window.location.host;
          window.location =$(this).find(":selected").val()
});
    })
</script>