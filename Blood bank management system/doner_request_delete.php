<?php

$doner_id=$_GET['doner_id'];

$con=mysqli_connect('localhost','root','root','bbms','3306');
$j="delete from donation_request where doner_id='$doner_id'";
$rs=mysqli_query($con,$j);

if($rs)
{
    echo "
    <h2><strong><center>
    Deleted Successfully <br><br>

    <script>
    window.location='doner_request.php'
    </script>";
    
}
else{
    echo "Error";
}

?>