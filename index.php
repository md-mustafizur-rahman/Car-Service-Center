<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />

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
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_hsabbeks.json" background="transparent" speed="1" style="width: 100%; height: 100%" loop autoplay></lottie-player>
          </div>
          <div class="leftbottom">
            <h1>Protect Your car</h1>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_lypr58vs.json" background="transparent" speed="1" style="width: 100%; height: 70%" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="right">
          <div class="righttop">
            <h1>Welcome To Car's center</h1>
          </div>
          <div class="rigthbottom">
            <div class="from">
              <form action="index.php" method="POST">
                <input type="text" class="inputfrom" id="name" name="name" placeholder="Enter Name" />

                <input type="email" class="inputfrom" id="name" name="name" placeholder="Enter Email address" />

                <input type="text" class="inputfrom" id="name" name="name" placeholder="Enter Phone number" />

                <input type="text" class="inputfrom" id="name" name="name" placeholder="address" />
                <label for="carnumber"> Have You more than one car ?</label>
                <div class="gender" id="carnumber">

                  &nbsp YES &nbsp
                  <input type="radio" name="carnumber" id="yes" value="yes" name="yes" />
                  &nbsp NO &nbsp
                  <input type="radio" name="carnumber" id="no" value="no" name="no" />
                </div>
                <label for="carnumber"> Gender</label>
                <div class="gender" id="gender1">
                  &nbsp Male &nbsp
                  <input type="radio" name="gender" id="male" value="male" name="female" />
                  &nbsp Female &nbsp
                  <input type="radio" name="gender" id="female" value="female" name="female" />
                </div>
                <label for="City">City</label>
                <select name="city" id="city">
                  <option value="Dhaka">Dhaka</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Chattigram">Chattigram</option>
                  <option value="Barishal">Barishal</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Mymenesing">Mymenesing</option>
                </select>

                <label for="City">Work type</label>
                <select name="worktype" id="city">
                  <option value="Maintenance">Maintenance</option>
                  <option value="Maintenance">Wash</option>
                </select>
                <label for="City">Designation</label>
                <select name="Designation" id="city">
                  <option value="Business">Business</option>
                  <option value="Government Job Holder">Government Job Holder</option>
                  <option value="Private Job Holder">Private Job Holder</option>
                  <option value="Student">Student</option>


                </select>

                <div class="botton1">
                  <input type="submit" value="Next" id="btn1" name="next" onclick="myFunction()" />
                </div>

                <script>
                  function myFunction() {
                    let check = confirm("I am an alert box!");
                    if (check == true) {

                    }
                  }
                </script>
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
$next = $_POST('next');
if (isset($next)) {
  
  header("location:carfrom.php");
}

?>