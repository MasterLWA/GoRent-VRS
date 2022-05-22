<?php
session_start();

if(isset($_SESSION['username'])) {
    $ownerID = $_SESSION['username'];
    }
?>
   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GoRent|Vehicle Registation</title>
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
        <link rel="stylesheet" href="src/css/vehicleRegistration.css" />
        <script src="./js/vehicleRegistration.js" defer></script>
        <!--LInk boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <div class="topnav container-fluid">
        <a class="active" href="index.php" style="margin-left:400px">Home</a>
        <a href="card.php">Check Card</a>
        <a href="contact.php">Contacts</a>
        <a href="SelectUserTypeLog.php" style="margin-left:800px">Log in</a>
        <a href="SelectUserTypeReg.php">Sign Up</a>
    </div>


        <header></header>
        <div id="vehicle-reg-form">
            <div id="vehicle-reg-form-container">
                <div id="title">Registration Form</div>
                 <form method="post" >
                    <div class="vehicle-details">
                        <div id="vehicle-image-box">
                            <div id="vehicle-image">
                                <label
                                    for="vehicle-image-input"
                                    id="default-vehicle-image-label"
                                >
                                    <img
                                        src="./img/car.jpg"
                                        id="default-vehicle-image"
                                    />
                                </label>
                                <input
                                    type="file"
                                    id="vehicle-image-input"
                                    accept="image"
                                    onchange="loadFile(event)"
                                />
                            </div>
                            <label
                                id="vehicle-image-label"
                                for="vehicle-image-input"
                                >Add an Image of Your Vehicle</label
                            >
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-brand"
                                >Vehicle Brand:
                            </label>
                            <input
                                type="text"
                                id="vehicle-brand"
                                name="vehicle-brand"
                                placeholder="Enter your Vehicle Brand"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-type"
                                >Vehicle Type :
                            </label>
                            <select
                                id="vehicle-type"
                                name="vehicle-type"
                                class="select"
                            >
                                <option
                                    value=""
                                    disabled
                                    class="placeholder"
                                    selected
                                >
                                    -- Select your Vehicle Type --
                                </option>
                                <option value="Car">Car</option>
                                <option value="Van">Van</option>
                                <option value="Bus">Bus</option>
                                <option value="Bike">Bike</option>
                                <option value="Three-Wheel">Three-Wheel</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-year"
                                >Year:
                            </label>
                            <input
                                type="number"
                                id="vehicle-year"
                                name="vehicle-year"
                                placeholder="Enter Year"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-seats"
                                >Seats:
                            </label>
                            <input
                                type="number"
                                id="vehicle-seats"
                                name="vehicle-seats"
                                placeholder="Number of Seats"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-color"
                                >Color:
                            </label>
                            <input
                                type="text"
                                id="vehicle-color"
                                name="vehicle-color"
                                placeholder="Vehicle Color"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-number"
                                >Vehicle Number:
                            </label>
                            <input
                                type="text"
                                id="vehicle-number"
                                name="vehicle-number"
                                placeholder="Vehicle Number"
                                required
                            />
                        </div>
                    
                       
              
                        <div class="input-box">
                            <label class="labels" for="vehicle-gear-type"
                                >Gear Type:
                            </label>
                            <input
                                type="text"
                                id="vehicle-gear-type"
                                name="vehicle-gear-type"
                                placeholder="Auto/Manual"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-model"
                                >Model:
                            </label>
                            <input
                                type="text"
                                id="vehicle-model"
                                name="vehicle-model"
                                placeholder="Enter your Vehicle Model"
                                required
                            />
                        </div>
                    </div>
                    <div id="vehicle-reg-button">
                        <input type="submit" id="vehicle-reg-submit" name="submit" value="Register"> 
                    </div>
                </form>
            </div>
                <center> <form method="POST" action="Vehicleowner.php" style="padding-top: 20px;">
            <input id="btn" value="Back to Profile" type="submit"/>
             </form></center>
     

        </div>
        <footer>
        
        </footer>
    </body>



<?php
session_start();
if(isset($_SESSION['userName'])) {
$ownerID = $_SESSION['userName'];
}

require 'src/php/config.php';

//variables
$vname = $_POST["vehicle-brand"];
$type = $_POST["vehicle-type"];
$year = $_POST["vehicle-year"];
$seats = $_POST["vehicle-seats"];
$color = $_POST["vehicle-color"];
$rNumber = $_POST["vehicle-number"];
$gear = $_POST["vehicle-gear-type"];
$model = $_POST["vehicle-model"];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vehicles (Brand, Type, Year, Seats, Color, regNumber, Gear, Model, ownerID)
VALUES ('$vname', '$type', '$year','$seats','$color', '$rNumber ', '$gear','$model','$ownerID')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

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

</html>