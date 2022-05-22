<!doctype html>
<html>
  <head>
  <title>GoRent</title>
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/Home.CSS">
    <!--LInk boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="src/css/payment.css" class="css" />
  </head>
	  
  <body>

  <div class="topnav container-fluid">
        <a class="active" href="index.php" style="margin-left:400px">Home</a>
        <a href="card.php">Check Card</a>
        <a href="contact.php">Contacts</a>
        <a href="SelectUserTypeLog.php" style="margin-left:800px">Log in</a>
        <a href="SelectUserTypeReg.php">Sign Up</a>
    </div>
<center><h2><b>Payment Information</b></h2></center>

<center><img src="car.jpeg" width="350" height="263" alt="car"></center>
<div class = "top">Vehicle model : Toyoto CHR <br><br>
Reference No : V16543<br><br>
Date : 2022/05/16
	  </div>
  </head>
  
    <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
			<img src="payment methods.jpeg" width="200" height="50">
			<form action = "payment.php" method = "post">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter the card name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="january">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2023">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
				<input type="submit" value="Continue to payment" class="btn">
            </div>
          </div>
  </body>
 <!-- Footer -->
 <footer class="bg-white mt-auto footer"  id="footer" style="background: linear-gradient(to bottom, #6600cc 0%, #cc00ff 100%);">
    <div class="container py-5">
      <div class="row py-4" >
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="src/images/logo1.png" alt="" width="auto" height="80px" class="mb-3">
        
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a  href="#" target="_blank" title="twitter"><i class="fa fa-twitter" style="color:lavender;"></i></a></li>
            <li class="list-inline-item"><a style="text-decoration: none;" href="#" target="_blank" title="facebook"><i class="fa fa-facebook" style="color:lavender;"></i></a></li>
            <li class="list-inline-item"><a  style="text-decoration: none;"href="#" target="_blank" title="instagram"><i class="fa fa-instagram" style="color:lavender;"></i></a></li>
            <li class="list-inline-item"><a style="text-decoration: none;" href="#" target="_blank" title="pinterest"><i class="fa fa-linkedin" style="color:lavender;"></i></a></li>
            
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Quick Links</h6>
          <ul class="list-unstyled mb-0">
            
            <li class="mb-2"><a style="text-decoration: none;color:aliceblue;" href="userLogin.php" class="flinks">Login Customer</a></li>
            <li class="mb-2"><a style="text-decoration: none;color:aliceblue;" href="VOwnerLogin.php" class="flinks">Log in Vehicle Owners</a></li>
            <li class="mb-2"><a  style="text-decoration: none;color:aliceblue;" href="SelectUserTypeReg.php" class="flinks">Register</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a style="text-decoration: none;color:aliceblue;" href="ManagerLogin.php" class="flinks">Manager Login</a></li>
            <li class="mb-2"><a style="text-decoration: none;color:aliceblue;" href="contact.php" class="flinks">Contacts</a></li>
           
            
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">All rights reserved by GoRent pvt(lmt)</p>
      </div>
    </div>
  </footer>
  <!-- End -->

 <?php
  
  require "src/php/config.php";
  // get the post records
$card_name = $_POST['cardname'];
$card_number = $_POST['cardnumber'];
$exp_month = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

// database insert SQL code
$sql = "INSERT INTO `payment`(`p_id`, `name_on_card`, `credit_card_number`, `exp_month`, `exp_year`, `cvv`) VALUES ( '','$card_name','$card_number','$exp_month','$expyear','$cvv')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "payment Successfully";
}

?>
</html>
