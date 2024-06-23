<?php

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','root','bbms','3306');
$j="delete from doner where id='$id'";
$rs=mysqli_query($con,$j);

if($rs)
{
    echo "
    <h2><strong><center>
    Deleted Successfully <br><br>

    <script>
    window.location='doners_list.php'
    </script>";
    
}
else{
    echo "Error";
}

?>