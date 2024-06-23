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
        <a class="navbar-brand" href="#">Candidate Login</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li> -->
      </ul>
    </div>
  </nav>

  <div class="container">
    <form method="post">

      <label for="fname">ID</label> <br>
      <input type="text" name="id"> <br>

      <label for="fname">Password</label> <br>
      <input type="text" name="password"> <br><br>

      <input type="submit" class="button" value="Login">

    </form>

    <br><br>
    <label>Don't have account ?</label>
    <a href="register.php"> Create Account</a>

  </div>
  <?php
    if(isset($_POST['id'])==true)
    {

        $id=$_POST['id'];
        $password=$_POST['password'];
        
        $con=mysqli_connect("localhost","root","root","job","3306");
        $q="select * from company where id='$id' and password='$password'";
        $rs=mysqli_query($con,$q);
    
    if($row=mysqli_fetch_array($rs))
{

  

    echo 
    "<script>
    window.location='dashbord.php'
    </script>";
}
else
{
    echo "<br><br>
    <div class='alert alert-danger'>
    <strong>Invalid!</strong> Invalid Email and Password.
  </div>";
}
    
}
    
    ?>

</body>

</html>