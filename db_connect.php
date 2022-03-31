<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password,"carshop");
if (!$con) {
    echo "Error " . mysqli_connect_error();
} else {
    // echo "Successfully Work";
}

?>