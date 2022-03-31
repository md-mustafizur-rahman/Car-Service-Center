<?php
include "db_connect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/carfrom.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet" />

  <title>Car Service Center</title>
</head>

<body>
  <section class="total">
    <section class="main">
      <section class="content">
        <div class="left">
          <div class="lefttop">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_dehufm3f.json" background="transparent" speed="1" style="width: 100%; height: 100%" loop autoplay></lottie-player>
          </div>
          <div class="leftbottom">
            <h1>Protect Your car</h1>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_h03qgmzg.json" background="transparent" speed="1" style="width: 100%; height: 70%" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="right">
          <div class="righttop">
            <h1>Enter Your car Details</h1>
          </div>
          <div class="rigthbottom">
            <div class="from">
              <form action="carfrom.php" method="POST">
                <div class="inneritem">
                  <div class="category">
                    <label for="brand">Brand</label>
                    <select id="brand" name="brand">
                      <option value="Honda">Honda</option>
                      <option value="TATA">TATA</option>
                      <option value="BAJAJ">BAJAJ</option>
                      <option value="Toyota">Toyota</option>
                      <option value="Mazda">Mazda</option>
                      <option value="Audi">Audi</option>
                      <option value="Ford">Ford</option>
                      <option value="BMW">BMW</option>
                      <option value="Mitsubishi">Mitsubishi</option>
                    </select>
                  </div>
                  <div class="category">
                    <label for="brand">Model</label>
                    <input name="model" type="text" class="inputfrom" placeholder="Enter car model name">
                  </div>
                  <div class="category">
                    <label for="caretype">Car type</label>
                    <select id="caretype" name="caretype">
                      <option value="Van">Van</option>
                      <option value="MICRO">MICRO</option>
                      <option value="SEDAN">SEDAN</option>
                      <option value="CUV">CUV</option>
                      <option value="SUV">SUV</option>
                      <option value="PICKUP">PICKUP</option>
                      <option value="COUPE">COUPE</option>

                    </select>
                  </div>
                  <div class="category">
                    <label for="cc">CC</label>
                    <select id="cc" name="cc">
                      <option value="Up to 1000 cc">Up to 1000 cc</option>
                      <option value="1001 to 1300 cc">1001 to 1300 cc</option>
                      <option value="1301 to 2000 cc">1301 to 2000 cc</option>
                      <option value="avobe 2001 cc">avobe 2001 cc</option>

                    </select>
                  </div>


                </div>
                <div class="inneritem">
                  <div class="category1">
                    <label for="dualfuel">Dual Fuel System </label>
                    <select id="dualfuel" name="dualfuel">
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                  <div class="category2">



                    <label for="date"> Booking date</label>
                    <input type="date" name="date1" value="<?php echo date('Y'); ?>-<?php echo date('m'); ?>-<?php echo date('d'); ?>" id="date1" class="date">

                    <!-- <script>
                      var date = new Date();
                      var year = date.getFullYear();
                      var mounth = date.getMonth() + 1;
                      var todayDate = String(date.getDate()).padStart(2, '0');
                      var datevalue = year + '-' + mounth + '-' + todayDate;
                      console.log (datevalue)
                      document.getElementById("date1").nodeValue = datevalue;
                      
                      
                    </script> -->

                  </div>

                  <div class="category1">
                    <label for="carproblem">Problem of car</label>
                    <select id="carproblem" name="carproblem">
                      <option value="Only For Wash">Only For Wash</option>
                      <option value="AC Problem">AC Problem</option>
                      <option value="Start Problem">Start Problem</option>
                      <option value="CNG  Conversation">CNG Conversation</option>
                      <option value="Light Problem">Light Problem</option>
                      <option value="Tire Change">Tire Change</option>


                    </select>
                  </div>


                </div>

                <div class="inneritem">
                  <div class="category1">
                    <label for="ServiceTakeTimeCount">How many time taken services before</label>
                    <select id="ServiceTakeTimeCount" name="ServiceTakeTimeCount">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>

                    </select>
                  </div>

                  <div class="category1">
                    <label for="enginetype">Engine Type</label>
                    <select id="enginetype" name="enginetype">
                      <option value="diesel">Diesel</option>
                      <option value="petrol">Petrol</option>
                      <option value="CNG">CNG </option>

                    </select>

                  </div>
                </div>
                <div class="inneritem">
                  <input type="submit" name="submit" value="Submit" class="botton1" id="btn2">
                </div>
            </div>
            </form>
          </div>
        </div>
        </div>
      </section>
    </section>
  </section>
</body>

</html>

<?php

$brand = $_POST['brand'];
$model = $_POST['model'];
$caretype = $_POST['caretype'];
$cc = $_POST['cc'];
$dualfuel = $_POST['dualfuel'];
$date1 = $_POST['date1'];
$carproblem = $_POST['carproblem'];
$ServiceTakeTimeCount  = $_POST['ServiceTakeTimeCount'];
$enginetype  = $_POST['enginetype'];


if (isset($_POST['submit'])) {


  if ($ServiceTakeTimeCount == 0) {
    $discount = 0;
  } else if ($ServiceTakeTimeCount == 1) {
    $discount = 100;
  } else if ($ServiceTakeTimeCount == 2) {
    $discount = 200;
  } else if ($ServiceTakeTimeCount == 3) {
    $discount = 300;
  } else if ($ServiceTakeTimeCount == 4) {
    $discount = 400;
  } else if ($ServiceTakeTimeCount == 5) {
    $discount = 500;
  } else if ($ServiceTakeTimeCount == 5) {
    $discount = 500;
  } else if ($ServiceTakeTimeCount == 6) {
    $discount = 600;
  } else if ($ServiceTakeTimeCount == 7) {
    $discount = 700;
  } else if ($ServiceTakeTimeCount == 8) {
    $discount = 800;
  } else {
    $discount = 1000;
  }














  $sqlcar = "INSERT INTO `cardetail`(`Brand`, `Model`, `CarType`, `CC`, `Dual Fuel System`, `Booking date`, `Problem of car`, `ServiceTakeTimeCount`, `EngineType`, `Discount`) VALUES ('$brand','$model ','$caretype','$cc','$dualfuel','$date1','$carproblem','$ServiceTakeTimeCount','$enginetype ','$discount')";

  if ($con->query($sqlcar) === TRUE) {
    echo "<script>
    window.location.href='carfrom.php';</script>";
    echo "Work successfully";
  } else {
    echo "Error: " . $sqlcar . "<br>" . $con->error;
  }

  $con->close();
}
?>