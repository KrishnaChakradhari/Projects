<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    input[type=text],
    select {
      width: 30%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 15px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #04AA6D;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }

    .button:hover {
      background-color: #3e8e41
    }

    .button:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Blood Management System</a>
          </div>
    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="patient/login.php"><span class=""></span>Requests</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="patient/login.php"><span class=""></span>Donations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="doner/login.php"><span class=""></span>Patients</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="doner.php"><span class=""></span>Doners</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><span class=""></span>Dashbord</a></li>
          </ul>
        </div>
      </nav>

      <div class='container'>
  <form action='patient_update.php'>

  
</body>
</html>
<?php

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','root','bbms','3306');
$j="select * from patient where id='$id'";
$rs=mysqli_query($con,$j);

while($row=mysqli_fetch_array($rs))
{
  echo"
  

    <label for='fname'>ID</label> <br>
    <input type='text' name='id' value='$row[id]'> <br>

    <label for='fname'>Name</label> <br>
    <input type='text' name='name' value='$row[name]'> <br>

    <label for='fname'>Email</label> <br>
    <input type='text' name='email' value='$row[email]'> <br>

    <label for='fname'>Mobile</label> <br>
    <input type='text' name='mobile' value='$row[mobile]'> <br>

   ";
}


echo "<input type='submit' class='button' value='Update'>

</form>

</div>"
?>


