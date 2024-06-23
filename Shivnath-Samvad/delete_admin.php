<?php

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','root','news','3308');
$j="delete from admin_registration where id='$id'";
$rs=mysqli_query($con,$j);

if($rs)
{
    echo "

    <script>
    window.location='admin_list.php';
    </script>

    ";
    
}
else{
    echo "Error";
}

?>