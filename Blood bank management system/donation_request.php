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
            <li><a href=".php"><span class=""></span>Donations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="patient_list.php"><span class=""></span>Patients</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="doner_list.php"><span class=""></span>Doners</a></li>
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
$j="select * from donation_request";
$rs=mysqli_query($con,$j);

echo"<h2><center>Donation Requests</cneter></h2>
<table class='table'>
<thead>
  <tr>
    <th>ID</th>
    <th>Donar Name</th>
    <th>Mobile No.</th>
    <th>Blood Group</th>
    <th>Units (in ml)</th>
    <th>Disease</th>
    <th>Stetus</th>
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
    <td>$row[doner_id]</td>
    <td>$row[doner_name]</td>
    <td>$row[mobile]</td>
    <td>$row[blood_group]</td>
    <td>$row[units]</td>
    <td>$row[disease]</td>
    <td>$row[stetus]</td>

    <td><a href='approve.php?doner_id=$row[doner_id]'>Approve </a>
    <a href='reject.php?doner_id=$row[doner_id]'>Reject</a></td>

  </tr>
</tbody>


";
}
echo "</table>"

?>