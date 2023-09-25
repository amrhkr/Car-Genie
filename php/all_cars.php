<html>
<head>
    <title>CAR GENIE - All Cars</title>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <script src="../jQuery/jqueryfile.js"></script>
    <script>
        $( document ).ready(function() {
            // $("#includeHeader").load("../html/header.html");
            // $("#includeFooter").load("../html/footer.html");
            // $("#commonMenu").load("../html/menu.html");
            console.log( "ready!" );
            console.log(window.location.pathname.indexOf('campervan.php'));
            console.log(window.location.pathname);
            if (window.location.pathname.indexOf('campervan.php') === -1 && window.location.pathname.indexOf('pickup.php') === -1) {
            // Hide the header and footer here using JavaScript
            // $("#includeHeader").hide();
            $("#includeFooter").hide();
            }
        });
    </script>
</head>

<body>
    <!-- <div id="includeHeader"></div>
    
    <div id="commonMenu"></div> -->
    <?php include 'menu.php'; ?>

    <?php include 'campervan.php'; ?>
    <?php include 'pickup.php'; ?>
    <?php include 'roadster.php'; ?>
    <?php include 'sedan.php'; ?>
    <?php include 'sport.php'; ?>
    <?php include 'super.php'; ?>
    <?php include 'suv.php'; ?>
    <?php include '../html/footer.html'; ?>
</body>
</html>
