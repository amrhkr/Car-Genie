<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <div id="menu">
        <center>
        <a href="admin_home.php" title="Admin Home Page">HOME</a>
        <a href="admin_order_view.php" title="Oder Details">ORDER DETAILS</a>
        <a href="admin_cars_add.php" title="Add New Car Details">ADD CAR</a>
        <a href="Admin_payment_view.php" title="View Payment Information">VIEW PAYMENT</a>
        <?php  if (isset($_SESSION['email'])){ ?> 
                    
        <?php } ?>
        </center>
    </div>
</body>
</html>

<!-- <script>

    $(document).ready(function(){
        $('#CarCat').on('change', function() {
          var host = window.location.host;
          window.location =$(this).find(":selected").val()
});
    })
</script> -->