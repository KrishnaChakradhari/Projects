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
        <a class="navbar-brand" href="#">Registration</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li> -->
      </ul>
    </div>
  </nav>

  <div class="container">
    <!-- <form method="POST" enctype="multipart/form-data"> -->
    <form method="POST">

      <label for="fname">First Name</label> <br>
      <input type="text" name="finame"> <br>

      <label for="fname">Last Name</label> <br>
      <input type="text" name="lname"> <br>

      <label for="fname">Skills</label> <br>
      <input type="text" name="skills"> <br>

      <label for="fname">Experince</label> <br>
      <input type="text" name="experince"> <br>

      <label for="fname">Highest Qualification</label> <br>
      <input type="text" name="qualification"> <br>

      <label for="fname">Email</label> <br>
      <input type="text" name="email"> <br>

      <label for="fname">Phone</label> <br>
      <input type="text" name="phone"> <br>

      <label for="fname">Password</label> <br>
      <input type="text" name="password"> <br>

      <!-- <label for="fname">Resume</label> <br>
      <input type="file" name="file"> <br> -->

      <input type="submit" class="button" value="Register">

    </form>

  </div>
  

</body>
</html>


<?php
    if(isset($_POST['finame'])==true)
    {

        $finame=$_POST['finame'];
        $lname=$_POST['lname'];
        $skills=$_POST['skills'];
        $experince=$_POST['experince'];
        $qualification=$_POST['qualification'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        // $resumename=$_FILES['file']['tmp_name'];
        // $resume=$_FILES['file']['name'];
        
        // if(move_uploaded_file($resumename,$resume))
        // {
        $con=mysqli_connect("localhost","root","root","job","3306");
        $q="insert into candidates values('$finame','$lname','$skills','$experince','$qualification',$email','$phone','$password')";
        $rs=mysqli_query($con,$q);
    
    if($rs)
    {
        echo "<br><br>
        <div class='alert alert-success'>
        <strong>Success! </strong> Registration Successfully.
        </div>";
    }
    else
    {
        echo "Error";
    }
  }
  // else{
  //   echo "Error while file upload";
  // }
    
// }
    
    ?>