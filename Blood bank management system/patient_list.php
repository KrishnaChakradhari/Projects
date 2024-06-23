<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Blood Management System</a>
          </div>
    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href=".php"><span class=""></span>Requests</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="donation_request.php"><span class=""></span>Donations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="patient_list.php"><span class=""></span>Patients</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="doners_list.php"><span class=""></span>Doners</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_dashbord.php"><span class=""></span>Dashbord</a></li>
          </ul>
        </div>
      </nav>

</body>
</html>

<?php

$con=mysqli_connect('localhost','root','root','bbms','3306');
$j="select * from patient";
$rs=mysqli_query($con,$j);

echo"<h2><center>List of All Patients</cneter></h2>
<table class='table'>
<thead>
  <tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th colspan='2'>Action</th>
  </tr>
</thead>
";


while($row=mysqli_fetch_array($rs))
{
echo
"

<tbody>
  <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[mobile]</td>
    <td><a href='patient_edit.php?id=$row[id]'>Edit</a>
    <a href='patient_delete.php?id=$row[id]'>Delete</a></td>

  </tr>
</tbody>


";
}
echo "</table>"

?>