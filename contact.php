<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent | Contact</title>
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/contact.css">
     <!--LInk boostrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
</head>
<body>


   
    <div class="container-fluid" style="background-color: black;">
       <center> <img id="logoimgs" src="src/images/go rent.png"></center>
    </div>

    <div class="topnav container-fluid">
        <a class="active" href="index.php" style="margin-left:400px">Home</a>
        <a href="card.php">Check Card</a>
        <a href="contact.php">Contacts</a>
        <a href="SelectUserTypeLog.php" style="margin-left:800px">Log in</a>
        <a href="SelectUserTypeReg.php">Sign Up</a>
    </div>

  

    <div class="topbody cotainer-fluid">
      <div id="ContactUsTxt">
        Contacts
      </div>
    </div>
    


<div class="container">
  <!--Section heading-->
  <h2  style="padding-left: 20px; font-size:x-large;">Contact Us</h2>
  <!--Section description-->


  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form"  method="POST">

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" placeholder="e-mail">
                          
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                         
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">

                  <!--Grid column-->
                  <div class="col-md-12" >

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                      </div>

                  </div>
              </div>
              <!--Grid row-->
              <div class="text-center text-md-left" style="margin-top: 20px;" >
              <input #button id="inputbutton" name="reg" type="submit" value="Send"/>
          </div>

          </form>

          
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x" style="padding-top: 10px;"></i>
                <h3><Address>Address</h3>
                  <p>12, Malabe<br>Sri Lanka</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x" style="padding-top: 10px;"></i>
                <h3>TelePhone</h3>
                <a href="tel:(+94) 76 911 4371" style=" text-decoration: none;">(+94) 76 911 4371</a>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x" style="padding-top: 10px;"></i>
                <h3>e-mail</h3>
                <a href="mailto:hello@lwatechnologies.com" style=" text-decoration: none;">hello@gorent.lk</a>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</div>

<?php
        require "src/php/config.php";

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"]; 

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
  
        $sql = "INSERT INTO messages (Name, email,subject,message)
        VALUES ('$name', '$email', '$subject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Submited Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
        
  

  $conn->close();
?>
<!--Section: Contact v.2-->
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
      <!-- Latest compiled JavaScript Boostrap-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 




