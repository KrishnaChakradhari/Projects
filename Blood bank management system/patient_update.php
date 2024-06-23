<?php
         $id=$_GET['id'];
         $name=$_GET['name'];
         $email=$_GET['email'];
         $mobile=$_GET['mobile'];

         $con=mysqli_connect('localhost','root','root','bbms','3306');
         $j="update patient set name='$name',email='$email',mobile='$mobile' where id='$id'";
         $rs=mysqli_query($con,$j);

         if($rs)
         {
            echo"<script>
            window.location='patient_list.php'
            </script>";
         }
         else
         {
            echo"Error";
         }

       



?>