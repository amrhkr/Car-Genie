<!-- 
    AUTHOR : AMAR CHOUDHARY
    MOBILE : 9968853896
    DATE : 28-07-2023
    IGNOU ENROLLMENT : 2001293674
-->
<?php  include("conn.php");
    $userid=$_POST["userid"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $mobile=$_POST["mobile"];
    $query = "INSERT INTO `admin` SET Login_ID ='$userid',
    Admin_Name='$username',
    Admin_Pwd='$password',
    Admin_Phone='$mobile'";
    $insertAdmin=mysqli_query($conn,$query);
?>
<script>
    var answer = confirm("Admin Registered Successfully..!");
    if (answer) {
        window.location = "admin_login.php";
    }
</script>