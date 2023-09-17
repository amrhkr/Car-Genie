<?php  include("conn.php");

$cus_nm=$_POST["cus_nme"];
$cus_eml_id=$_POST["cus_emil"];
$cus_psw=$_POST["cus_pwd"];
$cus_add=$_POST["cus_addr"];
$cus_sta=$_POST["cus_stae"];
$cus_mbl=$_POST["cus_mbl"];


$ad_quz="insert into customer set  Cus_Name ='$cus_nm',  Email_ID='$cus_eml_id',  Cus_Pwd='$cus_psw',  Cus_Add='$cus_add',  Cus_State='$cus_sta',  Cus_Phone='$cus_mbl'
";
$quz_id=mysqli_query($conn,$ad_quz);
?> <script>
var answer = confirm("You are Successfull Registration..! ");  if(answer){
window.location="login.php";
}
</script>