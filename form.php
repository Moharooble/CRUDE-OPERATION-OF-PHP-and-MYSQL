<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

  <?php

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $name = $_GET['name'];
      $class = $_GET['class'];
    }else {
      $id = "";
      $name = "";
      $class = "";

    }

  ?>

  <div class="container ">
    <div class="row justify-content-center mt-4">
      <div class="col-sm-8">
        <div class="card">
          <div class="card-body">
            <form action="operation.php" method="POST">
              <div class="form-group">
                <label for="id" class="form-label">student ID</label>
                <input type="text" name="student_id" id="" class="form-control"  placeholder="" value="<?php echo $id ?>">
              </div>
              <div class="form-group">
              <label for="name" class="form-label">student Name</label>
                <input type="text" name="student_name" id="" class="form-control" placeholder="" value="<?php echo $name ?>">
              </div>
              <div class="form-group">
              <label for="class" class="form-label">student Class</label>
                <input type="text" name="student_class" id="" class="form-control" placeholder="" value="<?php echo $class ?>">
              </div>
              <button class="btn btn-success mt-2" type="submit" name="insert" >Save info</button>
              <button class="btn btn-info mt-2" type="submit" name="update" >Update</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>