<?php
session_start();
$doner_id=$_SESSION['doner_id'];
$doner_name=$_SESSION['doner_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  float: left;
  margin-left: 2%;
  margin-top: 2%;
  height: 150px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>

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
            <a class="navbar-brand" href="#">Welcome to Doner Dashbord : <?php echo"$doner_name" ?></a>
          </div>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
          </ul>       
          <ul class="nav navbar-nav navbar-right">
            <li><a href="certificate.php"><span class=""></span>Print Certificate</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="doner_request.php"><span class=""></span>Requests</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="doner_donet.php"><span class=""></span>Donet</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="doner_dashbord.php"><span class=""></span>Dashbord</a></li>
          </ul>
        </div>
      </nav>

</body>
</html>

<?php



$con=mysqli_connect('localhost','root','root','bbms','3306');

$k="select sum(blood_doneted) as total from doner_dashbord";
$l="select sum(total_requests) as total from doner_dashbord";

$m="select sum(stetus) as total from donation_request where blood_group='Approved'";
// $k="select sum(stock) as total from stocks where blood_group='A'";

$n="select sum(request_accepted) as total from doner_dashbord";
$o="select sum(request_rejected) as total from doner_dashbord";

$rs1=mysqli_query($con,$k);
$rs2=mysqli_query($con,$l);
$rs3=mysqli_query($con,$m);
$rs4=mysqli_query($con,$n);
$rs5=mysqli_query($con,$o);

while($row=mysqli_fetch_array($rs1))
{
echo
"
<div class='card'>
  <div class='container'>
    <h3><b>Blood Donated</b></h3> 
    <p><b> Total : $row[total] Units</b></p> 
  </div>
</div> 

";
}

while($row=mysqli_fetch_array($rs2))
{
echo
"
<div class='card'>
  <div class='container'>
    <h3><b>Total Requests</b></h3> 
    <p><b> Total : $row[total] Units</b></p> 
  </div>
</div> 

";
}

while($row=mysqli_fetch_array($rs3))
{
echo
"
<div class='card'>
  <div class='container'>
    <h3><b>Request Pending</b></h3> 

    <p><b> Total : $row[total] Units</b></p> 

  </div>
</div> 

";
}

while($row=mysqli_fetch_array($rs4))
{
echo
"
<div class='card'>
  <div class='container'>
    <h3><b>Request Accepted</b></h3> 
    <p><b> Total : $row[total] Units</b></p> 
  </div>
</div> 

";
}

while($row=mysqli_fetch_array($rs5))
{
echo
"
<div class='card'>
  <div class='container'>
    <h3><b>Request Rejected</b></h3> 
    <p><b> Total : $row[total] Units</b></p> 
  </div>
</div> 

";
}

?>