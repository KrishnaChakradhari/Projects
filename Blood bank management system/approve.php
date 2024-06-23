<?php
         $doner_id=$_GET['doner_id'];

         $con=mysqli_connect('localhost','root','root','bbms','3306');

         $j="select * from donation_request where doner_id='$doner_id'";

         
         $rs1=mysqli_query($con,$j);

         $row=mysqli_fetch_array($rs1);
         {

         $blood_group=$row['blood_group'];
         $stock=$row['units'];

         }

         $q="insert into stocks values('$blood_group','$stock')";

         $rs=mysqli_query($con,$q);
         
            
            $k="update donation_request set stetus='Approved' where doner_id='$doner_id'";
            $rs5=mysqli_query($con,$k);

            if($rs5)
            {
                echo "
                <script>
                window.location='donation_request.php'
                </script>";

            }
            else{
                echo "Error";
            }

        

       



?>