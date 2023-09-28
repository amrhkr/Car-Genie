<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php  include("conn.php");
    $Name=$_POST["Name"];
    $Email_ID=$_POST["Email_ID"];
    $Telephone=$_POST["Telephone"];
    $Comment=$_POST["Comment"];

    $query = "INSERT INTO `comments` SET `Name` ='$Name',
    `Email_ID`='$Email_ID',
    `Telephone`='$Telephone',
    `Comment`='$Comment'";
    $insertAdmin=mysqli_query($conn,$query);
?>
<script>
    var answer = confirm("Your Comment Noted Successfully..!");
    if (answer) {
        history.back();
        setTimeout(function() {
            location.reload();
        }, 100); 
    }
</script>