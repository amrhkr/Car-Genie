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
            $("#includeFooter").hide();
            }
        });
    </script>
</head>

<body>
    <?php include 'sport.php'; ?>
    <?php include 'super.php'; ?>
    <?php include 'roadster.php'; ?>
    <?php include 'sedan.php'; ?>
    <?php include 'campervan.php'; ?>
    <?php include 'pickup.php'; ?>
    <?php include 'suv.php'; ?>
    <?php include '../html/footer.html'; ?>
</body>
</html>
