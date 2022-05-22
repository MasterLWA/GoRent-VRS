<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/manager.css">
        <!--LInk boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>DashBoard</title>
</head>
<body>
    <center><h1>DashBoard</h1></center>

   
    <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM messages LIMIT 5";

        $result = $conn->query($sql);

        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
              echo "<center><th>Messages</th></center>";
                  echo "<tr>";
                      echo "<th>Name</th>";
                      echo "<th>email</th>";
                      echo "<th>Subject</th>";
                      echo "<th>Message</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Name'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['subject'] . "</td>";
                      echo "<td>" . $row['message'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }} else 
          {
            echo "0 results";
          }
    ?>
 <br>
 <br>
    <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Name,email,pNumber,BirthDay,Adress FROM Users LIMIT 10";

        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                   echo "<tr>";
                      echo "<center><th>Users</th></center>";
                  echo "</tr>";
                  echo "<tr>";
                      echo "<th>Name</th>";
                      echo "<th>email</th>";
                      echo "<th>Number</th>";
                      echo "<th>BirthDay</th>";
                      echo "<th>Address</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Name'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['pNumber'] . "</td>";
                      echo "<td>" . $row['BirthDay'] . "</td>";
                      echo "<td>" . $row['Adress'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }} else 
          {
            echo "0 results";
          }
    ?>
  
 <br>
 <br>

 <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM vehicles";

        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                   echo "<tr>";
                      echo "<center><th>Vehicles</th></center>";
                  echo "</tr>";
                  echo "<tr>";
                      echo "<th>Brand</th>";
                      echo "<th>Model</th>";
                      echo "<th>Year</th>";
                      echo "<th>Type</th>";
                      echo "<th>Seats</th>";
                      echo "<th>Gear</th>";
                      echo "<th>Registation Number</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Brand'] . "</td>";
                      echo "<td>" . $row['Model'] . "</td>";
                      echo "<td>" . $row['Year'] . "</td>";
                      echo "<td>" . $row['Type'] . "</td>";
                      echo "<td>" . $row['Seats'] . "</td>";
                      echo "<td>" . $row['Gear'] . "</td>";
                      echo "<td>" . $row['regNumber'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }} else 
          {
            echo "0 results";
          }
    ?>
<form action="POST" id="Form">
    <h2>Update Car Details<h2>
     <input name="RegNumber" placeholder="Registation Number">
     <input name="Brand" placeholder="Brand">
     <input name="Model" placeholder="Model">
     <input name="year" placeholder="Year">
     <input name="Type" placeholder="Type">
     <input name="Seats" placeholder="Seats">
     <input name="Gear" placeholder="Gear">

     <input  type="submit">
</form>

<?php
     require "src/php/config.php";
     $rNum = $_POST["RegNumber"]; 
     $brand = $_POST["Brand"]; 
     $model = $_POST["Model"]; 
     $year = $_POST["year"]; 
     $type = $_POST["Type"]; 
     $seats = $_POST["Seats"]; 
     $gear = $_POST["Gear"]; 

     $sql = "UPDATE vehicles SET Brand='$brand' ";
?>

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
    <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>