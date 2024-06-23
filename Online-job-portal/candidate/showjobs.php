<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-size: 20px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Letest Jobs</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li> -->
      </ul>
    </div>
  </nav>
  
<br>
<?php

$con=mysqli_connect('localhost','root','root','job','3306');
$j="select * from addjob";

$rs=mysqli_query($con,$j);

session_start();
$id=$_SESSION['id'];
$logo=$_SESSION['logo'];

while($row=mysqli_fetch_array($rs))

{
echo"
<div class='col-md-4'>
  <div class='card' style='width:200px'>
    <img class='card-img-top' src='$logo' alt='Card image'>
    <div class='card-body'>
    <h3 class='card-title'>Company Name: $row[title]</h3>
    <h3 class='card-title'>Company Id: $id</h3>
    <h4 class='card-title'>Work as: $row[work]</h4>
      <h4 class='card-title'>Posts: $row[po]</h4>
      
      <a href='#' class='btn btn-primary'>View Details</a>
      <a href='apply.php' class='btn btn-primary'>Apply</a>
    </div>
  </div>

</div>";

}
echo"</table>";

?>
  


</body>
</html>


