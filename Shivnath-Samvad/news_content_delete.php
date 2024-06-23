<?php

$id=$_GET['id'];
$table_name=$_GET['table_name'];

session_start();
$_SESSION['table_name']=$table_name;

$con=mysqli_connect('localhost','root','root','news','3308');
echo $j="delete from $table_name where id='$id'";
$rs=mysqli_query($con,$j);

if($rs)
{
    echo "

    <script>
    window.location='admin_edit_list.php' 
    </script>

    ";
    
}
else{
    echo "Error";
}

?>