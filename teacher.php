<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "contact";

$conn = mysqli_connect($host,$user,$pass,$db);

$str = "select * from teacher ";
$obj = mysqli_query($conn,$str);

?>

<div class="card text-center" style="padding:15px;">
  <h4>Employees System</h4>
</div><br>

<div class="container">
  <h4>PHP : Select Data
    <a href="#" class="btn btn-primary" style="float:right;">Add New Record</a>
    </h4><br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php
        while($result = mysqli_fetch_array($obj)){
    ?>

        <tr>
          <td>????</td>
          <td><?=$result['fname']; ?></td>
          <td><?php echo $result['lname']; ?></td>
          <td>????</td>
          <td>
            <a href="#" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="#" style="color:red" onclick="return confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>

    <?php
        }
    ?>



    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
