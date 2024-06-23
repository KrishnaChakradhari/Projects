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
                            <a class="nav-link text-body small" href="admin_registration.php">Registarion</a>
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


    <!-- Comment Form Start -->
    <div class="mb-3" style="width: 40%; margin-left: 30%; padding-top:3%">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold"> Admin Login</h4>
        </div>
        <div class="bg-white border border-top-0 p-4">


            <form method="post" style="width: 40%; margin-left: 30%;">

                <div class="form-group">
                    <label for="website">ID *</label>
                    <input type="text" class="form-control" id="" name="id">
                </div>

                <div class="form-group">
                    <label for="website">Password *</label>
                    <input type="password" class="form-control" id="" name="password">
                </div>

                <div class="form-group mb-0">
                    <center>
                        <input type="submit" value="Login" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Comment Form End -->
    </div>



    <script src="script.js"></script>
</body>

<?php

if (isset($_POST['id']) == true) {

    $id = $_POST['id'];
    $entered_password = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "root", "news", "3308");
    $q = "select * from admin_registration where id='$id'";
    $rs = mysqli_query($con, $q);

    if ($row = mysqli_fetch_array($rs)) {

        session_start();
        $_SESSION['id'] = $id;

        $mobile = $row['mobile'];
        $password = $row['password'];

        if ($entered_password == $password and $password == $mobile) {
            echo
                "<script>
    window.location='admin_change_password.php'
    </script>";
        } elseif ($entered_password == $password) {
            echo
                "<script>
    window.location='admin_dashbord.html'
    </script>";
        }

    } else {
        echo "<br><br>
    <strong>Invalid!</strong> Invalid Email and Password.
    ";
    }

}
?>