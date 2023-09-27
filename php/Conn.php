<?php
    $conn=mysqli_connect("localhost","root","","Car_Genie");       
    if(mysqli_connect_error()){
        echo "failed to connect to mysql".mysqli_connect-error();
    }
?>