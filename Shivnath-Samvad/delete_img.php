<?php

session_start();
$table_name=$_SESSION['table_name'];
$id=$_SESSION['id'];

$con=mysqli_connect('localhost','root','root','news','3308');
// $j="delete from $table_name where id='$id'";

$j= "UPDATE $table_name SET img = '' WHERE id=$id";

$rs=mysqli_query($con,$j);

if($rs)
{
    echo "

    <script>
    window.location='edit_news_content.php?id=$id';
    </script>
    ";
    
}
else{
    echo "Error";
}

?>