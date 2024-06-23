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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
        function check()
        {
          var email=/^\S+@\S+\.\S+$/
          x=document.getElementById("email").value;

          if(email.test(x)==false)
          {
            document.getElementById('email1').innerHTML=" Please Enter a Valid Email.";
            document.getElementById('email1').style.color='red';
          }
          else
          {
            document.getElementById('email1').innerHTML= " <i class='fa fa-check-circle' style='font-size:25px;color:green'></i>";
            document.getElementById('email1').style.color='green';
          }


          var mob=/^[0]?[6789]\d{9}$/
          p=document.getElementById("phone").value;

          if(mob.test(p)==false)
          {
            document.getElementById('phone1').innerHTML=" Please Enter a Valid Phone Number.";
            document.getElementById('phone1').style.color='red';
          }
          else
          {
            document.getElementById('phone1').innerHTML= " <i class='fa fa-check-circle' style='font-size:25px;color:green'></i>";
            document.getElementById('phone1').style.color='green';
          }

          var name=/^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/
          n=document.getElementById("name").value;

          if(name.test(n)==false)
          {
            document.getElementById('name1').innerHTML=" Invalid";
            document.getElementById('name1').style.color='red';
          }
          else
          {
            document.getElementById('name1').innerHTML= " <i class='fa fa-check-circle' style='font-size:25px;color:green'></i>";
            document.getElementById('name1').style.color='green';
          }

          

      }
  </script>

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
        <a class="navbar-brand" href="#"> Admin Registration</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li> -->
      </ul>
    </div>
  </nav>

  <div class="container">
    <form method="POST">

      <label for="fname">Full Name</label> <br>
      <input type="text" name="name" id="name" onblur="check()"><span id="name1"></span><br>

      <label for="fname">Email</label> <br>
      <input type="text" name="email" id="email" onblur="check()"><span id="email1"></span><br>

      <label for="fname">Password</label> <br>
      <input type="text" name="password" id="password" onblur="check()"><span id="password1"></span><br>

      <label for="fname">Phone</label> <br>
      <input type="text" name="phone" id="phone" onblur="check()"><span id="phone1"></span><br>

      <input type="submit" class="button" value="Register">

    </form>

  </div>
  <?php
    if(isset($_POST['name'])==true)
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];

        $con=mysqli_connect("localhost","root","root","bbms","3306");
        $q="insert into admin values('$name','$email','$password','$phone')";
        $rs=mysqli_query($con,$q);
    
    if($rs)
    {
        echo "<br><br>
        <div class='alert alert-success'>
        <strong>Success! </strong> Registration Successfully.
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