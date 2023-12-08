<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <table class="table">
        <a href="form.php" class="btn btn-danger">Add</a>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Class</th>
              <th>Action</th>
              
            </tr>
          </thead>

          <tbody>

            <?php

            $query = "SELECT * FROM student";
            $result = $conn->query($query);
            $htmlTable = "";

            if($result){

              $htmlTable .= "<tr>";
              while($row = $result->fetch_assoc()){
    
                // echo $row['id'];
                // echo $row['name'];
                // echo $row['class'];

                $htmlTable .= "<td>" . $row['id'] . "</td>";
                $htmlTable .= "<td>" . $row['name'] . "</td>";
                $htmlTable .= "<td>" . $row['class'] . "</td>";

                $update_link = "form.php?" . "id=" . $row['id'] . "&name=" . $row['name'] . "&class=" . $row['class'];

                $delete_link = "operation.php?" . "id=" . $row['id'];

                $htmlTable .= "<td>" . '<a href="'.$update_link.'" class="btn btn-success m-1">Update</a> 
                <a href="'.$delete_link.'" class="btn btn-danger m-1" >Delete</a>' . "</td>";

                $htmlTable .= "</tr>";

              }

              echo $htmlTable;
              

            }else {
              echo $conn->error;
            }

            ?>


          </tbody>

        </table>

      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>