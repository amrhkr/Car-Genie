<?php include("conn.php");
?>
<?php include("header.php"); ?>

<html>

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
            // When the user clicks the button, open the modal 
            var btn = $("#mbtn");
    btn.on('click', function() {
        modal.show();
    });
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.fadeOut();
    });
        });

        //---------------------
        // Get the modal
var modal = $('#modalDialog');

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = $(".close");

// When the user clicks anywhere outside of the modal, close it
$('body').bind('click', function(e){
    if($(e.target).hasClass("modal")){
        modal.fadeOut();
    }
});
        //---------------------

    </script>
</head>

<body>
    <div id="modalDialog" class="modal">
        <div class="modal-content animate-top">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Woohoo, you're reading this text in a modal!</p>
                <p>Modal body content goes here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>

    <div id="includeHeader"></div>
    <div id="commonMenu"></div>
    <?php include 'menu.php'; ?>
    <div class="product-item">
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan1.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
                <input type='button' id="mbtn" value='More Details' onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan2.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan3.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan4.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan5.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan6.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    <div class="product-item">
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan7.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan8.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
        <div class="item">
            <h1>Sedan</h1>
            <a href="payment.php"><img src="../image/cars/sedan/sedan9.png" onmouseover="this.style.cursor='pointer';" title="Click to Buy" /></a><br><br>
            <h3>Sedan 2023 Model<br> Price: &#8377 900000<br>
                <input type='button' value='Buy Now' onclick="location.href='payment.php'" onmouseover="this.style.cursor='pointer';" />
            </h3>
        </div>
    </div>
    
    
    <div id="includeFooter"></div>
</body>

</html>