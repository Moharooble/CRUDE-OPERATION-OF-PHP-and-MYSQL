<?php 

//obect oriented
//procedural


//host 
//user
//password
//database

// $servername = "localhost";
// $username = "root";
// $password = '';
// $databs = "mydbs";


$conn = new mysqli("localhost","root","","studentdb");

if($conn->connect_error){
  echo $conn->error;
}else {
  echo "success";
}




?>