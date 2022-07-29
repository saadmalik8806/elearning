<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $title = $_POST['title'];
 $description = $_POST['description'];
 $q = " update course_table set id=$id, title='$title', description='$description' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 <br><br><br><br><br><br><br>
 <div class="card">
 <div class="card-header">
 <h1 class="text-black text-center">  Update Operation </h1>
 </div><br>
 <label> Title: </label>
 <input type="text" name="title" class="form-control" placeholder="Update You are tile"> <br>

 <label> Description: </label>
 <input type="text" name="description" class="form-control" placeholder="Update Description"> <br>

 <button class="btn btn-primary" type="submit" name="done"> Submit </button><br>

 </div>
 </form>



 </div>
</body>
</html>
