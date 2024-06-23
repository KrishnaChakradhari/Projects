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
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
          </ul>       
          <ul class="nav navbar-nav navbar-right">
            <li><a href="certificate.php"><span class=""></span>Print Certificate</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="request.php"><span class=""></span>Requests</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="donete.php"><span class=""></span>Donet</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="doner_dashbord.php"><span class=""></span>Dashbord</a></li>
          </ul>
        </div>
      </nav>


<div class="container">
    <form method="POST">

      <!-- <label for="fname" name="blood_group">Blood Group:</label> <br>
        <select name="Blood Group">
          <option value="A">A</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B">B</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O</option>
          <option value="O-">O-</option>
        </select> <br> -->


      <label for="fname">Blood Group</label> <br>
      <input type="text" name="blood_group"> <br>

      <label for="fname">No of Units</label> <br>
      <input type="text" name="units"> <br>

      <label for="fname">Disease</label> <br>
      <input type="text" name="disease"> <br>

      <input type="submit" class="button" value="Submit">

    </form>

  </div>

  <?php
      session_start();
      $doner_id=$_SESSION['doner_id'];
      $doner_name=$_SESSION['doner_name'];
      $mobile=$_SESSION['mobile'];
  ?>

  <?php
    if(isset($_POST['blood_group'])==true)
    {

        $blood_group=$_POST['blood_group'];
        $units=$_POST['units'];
        $disease=$_POST['disease'];
        $stetus='Pending';

        $con=mysqli_connect("localhost","root","root","bbms","3306");
        $q="insert into donation_request values('$doner_id','$doner_name','$mobile','$blood_group','$units','$disease','$stetus')";
        $rs=mysqli_query($con,$q);
    
    if($rs)
    {
        echo "<br><br>
        <div class='alert alert-success'>
        <strong>Success! </strong> Send Request Successfully.
        </div>";
    }
    else
    {
        echo "Error";
    }
  }
  
  
    ?>

</body>
</html>