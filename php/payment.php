<?php include("conn.php");  session_start();
?>

<html>
<head>
<title>CAR GENIE</title>
<link rel="stylesheet" href="../css/home.css" type="text/css"/>

</head>
<body>
<div class="top">
<div class="left"> <p>SALE UPTO 70% OFF. USE CODE "SALES 70%.  SHOP NOW</P></div>
<div class="righth">
<p style="color:#fff; padding-top: 20px;">Welcome
<a href='logout.php' style="color: #fff; text-decoration: none; fontfamily: sans-serif; word-  spacing: 60px; ">LogOut</a>
</div>

</div>

<div class="logo">
<div class="left">
<h1><img src="image/logo.jpg" width="40px" height="35px" />CAR GENIE</h1>
</div>
<div class="right">
<p><img src="image/phone.png" width="16px"   height="16px/"> Order or call us

:(+91)9968853896</p>
</div>
</div>
<div id="menu">
<a href="home.php">home</a>
<a href="about.php">About Us</a>
<a href="All Product.php">All Product</a>
<select onchange="location = this.value;"><option>Cars Category</option>
<option value="car_catgy_one.php">Kia Forte</option>
<option value="car_catgy_two.php">Scorpio Car</option>
<option value="car_catgy_one.php">GT Sport Car</option>
<option value="car_catgy_one.php">Audi A1</option>
<option value="car_catgy_one.php">Toyota Corolla</option>
<option value="car_catgy_one.php">Nissan</option>
<option value="car_catgy_one.php">BMW</option>
<option value="car_catgy_one.php">Infiniti</option>	
</select>

<a href="contact.php">Contact Us</a>
</div>

<div class="payment">
<form action="accept_payment.php" method="post">
<h1>Payment</h1>

VEHICLE ID:<input type="text" name="vchl_id" placeholder="Vehicle ID"><br><br>  PURCHASE	QUENTITY	:<input	type="number"	name="purch_qunt"  placeholder="Quentity"><br><br>
VEHICLE   NAME:<input type="text" name="vchl_nme"        placeholder="Vehicle NAME"><br><br>
TOTAL	AMOUNT:	<input type="text"	name="amt"
placeholder="amount"><br><br>  Payment Mode
<select><option>Select card</option>
<option value="Credit Card" name="pay">Credit card</option>
<option value="Debit Card" name="pay">Debit card</option>
<option value="Paytm" name="pay">Paytm</option>

</select><br><br>
CARD NO:<input type="text" name="crd_num" placeholder="Card Number"><br><br>  ADDRESS:<input type="text"	name="addrs" placeholder="address"><br><br>

<input type="submit" value="PayNow" >
<input type="submit" value="Reset" >


</form>
</div>

<div class="footer">
<div class="foot_top">
<div class="footer2">
<input type='text' name='t1' placeholder='Name'><br>
<input type='text' name='t1' placeholder='Email'><br>
<input type='text' name='t1' placeholder='Telephone'><br>
<input type='text' name='t1' placeholder='Comment'><br>
<input type='submit' value='submit'></div>
<div class="Address">
<h3>Address</h3>
<h5>Kartar Nagar<br>3-1/2 Pusta<br> Delhi Pin code : 110053</h5>
</div>

</div>
<a href="home.php">HOME</a>
<a href="about.php">CATEGORY</a>

<a href="all_cars_ctgry.php">CONTACT US</a>
<a href="#">PROFILE</a>

</div>
</body>
</html>
