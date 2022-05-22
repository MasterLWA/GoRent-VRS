<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent | Customer Login</title>
    <link rel="shortcut icon" href="src/images/go%20rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/login.css">
    <!--LInk boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container-fluid" style="background-color: black;">
    <img id="logoimgs" src="src/images/go%20rent.png">
</div>

<div class="topnav container-fluid">
    <a href="index.php" style="margin-left:400px">Home</a>
    <a href="../card.php">Check Card</a>
    <a href="contact.php">Contacts</a>
    <a href="SelectUserTypeLog.php" style="margin-left:800px">Log in</a>
        <a href="SelectUserTypeReg.php">Sign Up</a>
</div>


<div class="container" id="boxarouninputs">
    <div class="form Loginform container" style="padding-top: 50px;text-align: center; ">
        <form method="POST">
            <input type="email" id="email" name="email" placeholder="Enter email" class="inputs"><br>

            <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="inputs"><br>

            <input id="inputbutton" type="submit" value="Log in"/>
        </form>

    </div>


    

    <p style="margin-top: 10px;">Not registered?<a href="userRegistation.php">Register</a></p>
</div>
<!-- Latest compiled JavaScript Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
      require 'src/php/config.php';

      $username = $_POST["email"];
      $password = $_POST["pwd"];

        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from users where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
    
        if($count == 1){  
           
            header("Location: customer.php");
           


        }  
        else{  
           
            //echo "Login failed. Invalid username or password :(";
        }


        /*session_start();*/

      //  $_SESSION["userName"] = $_POST["email"];
        $_SESSION['username'] = $username;
   $conn -> close();
?>
 <!-- Footer -->
 <footer class="bg-white mt-auto footer"  id="footer" style="background: linear-gradient(to bottom, #6600cc 0%, #cc00ff 100%); margin-top:50px;">
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


</html>