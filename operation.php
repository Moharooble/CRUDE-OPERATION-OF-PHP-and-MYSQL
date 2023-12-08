<?php


include 'conn.php';

//  when we need register

// POST
// GET

if(isset($_POST["insert"])){

  $studentId = $_POST['student_id'];
  $studentName = $_POST['student_name'];
  $studentClass = $_POST['student_class'];

  //preparing the quert
  $query = "INSERT INTO student(id,name,class) VALUE('$studentId','$studentName','$studentClass')";

  //excecute the query
  $result = $conn->query($query);

  // if there success or failed
  if($result){
    echo "successfully Registred";
    header("location:list.php");
  }else
  {
   echo $conn->error;
  }

}else if(isset ($_POST['update'])){

  $studentId = $_POST['student_id'];
  $studentName = $_POST['student_name'];
  $studentClass = $_POST['student_class'];

  //preparing the quert
  $query = "UPDATE student set name = '$studentName', class = '$studentClass' WHERE id = '$studentId'";

  //excecute the query
  $result = $conn->query($query);

  // if there success or failed
  if($result){
    echo "successfully Updated";
    header("location:list.php");
  }else
  {
   echo $conn->error;
  }

}

if(isset($_GET['id'])){

  $studentId = $_GET['id'];

  //preparing the quert
  $query = "DELETE FROM student WHERE id = '$studentId'";

  //excecute the query
  $result = $conn->query($query);

  // if there success or failed
  if($result){
    echo "successfully Updated";
    header("location:list.php");
  }else
  {
   echo $conn->error;
  }


}





?>