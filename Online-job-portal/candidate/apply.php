<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$email=
$cname=
$resume=

$con=mysqli_connect("localhost","root","root","job","3306");
$q="insert into applied values('$email','$cname','$resume')";
$rs=mysqli_query($con,$q);

if($rs)
{
    echo "<br><br>
    <div class='alert alert-success'>
    <strong>Success! </strong> Applied Successfully.
    </div>";
}
else
{
    echo "Error";
}

?>