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
</head>


<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Search Jobs</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </nav>
  <center>
  <div class="search-container">
    <form method='post'>
      <input type="text" placeholder="Search.." name="keyword">
      <button type="submit"><i class="fa fa-search"></i>Search</button>
      <br><br> <br>
    </form>
  </div>
</center>
</body>
</html>

<?php

if(isset($_POST['keyword'])==true)
{
$keyword=$_POST['keyword'];

$con=mysqli_connect('localhost','root','root','job','3306');
$j="select * from candidates where skills like '%$keyword%'";
$rs=mysqli_query($con,$j);

while($row=mysqli_fetch_array($rs))
{

echo "<center>
<table border='2'>
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Skills</td>
<td>Experince</td>
<td>Qualification</td>
<td>Email</td>
<td>Resume</td>
</tr>

<tr>
<td>$row[fname]</td>
<td>$row[lname]</td>
<td>$row[skills]</td>
<td>$row[experince]</td>
<td>$row[qualification]</td>
<td>$row[email]</td>
<td>$row[resume]</td>
</tr>

</center>
";
}

}
?>