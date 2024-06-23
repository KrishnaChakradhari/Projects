<?php
         session_start();
         $doner_id=$_SESSION['doner_id'];
         
         $blood_group=$_GET['blood_group'];
         $units=$_GET['units'];
         $disease=$_GET['disease'];

         $con=mysqli_connect('localhost','root','root','bbms','3306');
         $j="update donation_request set blood_group='$blood_group',units='$units',disease='$disease' where doner_id='$doner_id'";
         $rs=mysqli_query($con,$j);

         if($rs)
         {
            echo"<script>
            window.location='doner_request.php'
            </script>";
         }
         else
         {
            echo"Error";
         }

       



?>