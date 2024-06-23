<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shivnath Samvad</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .cards-container21 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            row-gap: 20px;
            align-items: start;
        }

        .card21 {
            display: flex;
            width: 100%;
            min-height: 200px;
            box-shadow: 0 0 4px #d4ecff;
            border-radius: 4px;
            cursor: pointer;
            background-color: #fff;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .card21:hover {
            box-shadow: 1px 1px 8px #d4ecff;
            background-color: #f9fdff;
            transform: translateY(-2px);
        }

        .card-header21 {
            flex: 1;
        }

        .card-header21 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-buttons21 {
            display: flex;
            flex-direction: row;
            justify-content: start;
            align-items: center;
            padding: 10px;
            gap: 10px;
        }

        .card-buttons21 a {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .card-buttons21 .edit-button {
            background-color: #4CAF50;
            color: white;
        }

        .card-buttons21 .edit-button:hover {
            background-color: #45a049;
        }

        .card-buttons21 .delete-button {
            background-color: #f44336;
            color: white;
        }


        .card-buttons21 .delete-button:hover {
            background-color: #e31e12;
        }

        .card-content21 {
            flex: 2;
            padding: 12px;
        }

        .news-source {
            margin-block: 12px;
        }
    </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <div class="nav-link text-body small" id="currentDate"></div>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary">शिवनाथ <span
                            class="text-secondary font-weight-normal">सम्वाद</span></h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <br>

    <!-- Registarion Form Start -->
    <div class="mb-3" style="width: 80%; margin-left: 10%;">
        <div class="section-title mb-0">
            <?php
            $full_name=$_GET['full_name'];
            echo"
            <h4 class='m-0 text-uppercase font-weight-bold'>Profile : $full_name</h4>";
            ?>
        </div>
        <div class="bg-white border border-top-0 p-4">



            <?php

            $id=$_GET['id'];

            $con = mysqli_connect("localhost", "root", "root", "news", "3308");
            $q = "select * from admin_registration where id=$id";
            $rs = mysqli_query($con, $q);

            while ($row = mysqli_fetch_array($rs)) {

                echo "

                
                <div class='container rounded bg-white mt-12 mb-12'>
                <div class='row'>
                    <div class='col-md-3 border-right'>
                        <div class='d-flex flex-column align-items-center text-center p-3 py-5'><img class='rounded-circle mt-5' width='100%' src='/images$row[photo]><span class='font-weight-bold'>$row[full_name]</span><span class='text-black-50'>$row[email]</span><span> </span></div>
                    </div>
                    <div class='col-md-5 border-right'>
                        <div class='p-3 py-5'>
                            <div class='d-flex justify-content-between align-items-center mb-3'>
                                <h4 class='text-right'>Profile Details</h4>
                            </div>
                            
                            <div class='row mt-3' style='color:black; font-size:18px;'>
                                <div class='col-md-12'><label class='labels'>Full Name : $row[full_name]</label></div>
                                <div class='col-md-12'><label class='labels'>Employee ID : $row[id]</label></div>
                                <div class='col-md-12'><label class='labels'>Email : $row[email]</label></div>
                                <div class='col-md-12'><label class='labels'>Mobile Number : $row[mobile]</label></div>
                            </div>
                            
                            <div class='mt-5 text-center'><button class='btn btn-primary profile-button' type='button'>Update Profile</button></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
            </div>
            


        ";
            }

            
            ?>
            <!-- Registation Form End -->




            <script src="script.js"></script>
</body>