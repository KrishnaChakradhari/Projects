<?php
session_start();
$cname=$_SESSION['cname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shopping</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a class="navbar-brand" href="#">Add New Job Post</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    
    <form method="post">

    <?php
    echo"<label for='fname'>Company Name</label> <br>
    <input type='text'  name='title' value=$cname> <br>";
      
      ?>

      <label for="fname">Work as</label> <br>
      <input type="text" name="work"> <br>

      <label for="fname">Number of Posts</label> <br>
      <input type="text" name="po"> <br>

      <label for="fname">Job Location</label> <br>
      <input type="text" name="location"> <br>

      <label for="fname">HR Email</label> <br>
      <input type="text" name="email"> <br>

      <label for="fname">Required Skills</label> <br>
      <input type="text" name="skills"> <br>

      <label for="fname">Required Experince</label> <br>
      <input type="text" name="experince"> <br>

      <label for="fname">Qualification</label> <br>
      <input type="text" name="qualification"> <br><br>

      <input type="submit" class="button" value="Save">

    </form>

  </div>

  <?php
    if(isset($_POST['title'])==true)
    {

        $title=$_POST['title'];
        $work=$_POST['work'];
        $po=$_POST['po'];
        $location=$_POST['location'];
        $email=$_POST['email'];
        $skills=$_POST['skills'];
        $experince=$_POST['experince'];
        $qualification=$_POST['qualification'];

        $con=mysqli_connect("localhost","root","root","job","3306");
        $q="insert into addjob values('$title','$work','$po','$location','$email','$skills','$experince','$qualification','$cname')";
        $rs=mysqli_query($con,$q);
    
    if($rs)
    {
        echo "<br><br>
        <div class='alert alert-success'>
        <strong>Success! </strong>Add Job Successfully.
        </div>
      ";
    }
    else
    {
        echo "Error";
    }
  }

    
    ?>

</body>

</html>