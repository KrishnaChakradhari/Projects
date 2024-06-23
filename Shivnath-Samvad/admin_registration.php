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
                            <a class="nav-link text-body small" href="admin_login.php">Login</a>
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
    <div class="mb-3" style="width: 60%; margin-left: 20%;">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Admin Registration</h4>
        </div>
        <div class="bg-white border border-top-0 p-4">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" class="form-control" name="full_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">ID *</label>
                            <input type="text" class="form-control" name="id">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="name">Mobile *</label>
                            <input type="text" class="form-control" name="mobile">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Photo *</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>

                </div>

                <div class="form-group mb-0">
                    <center>
                        <input type="submit" value="Register" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Registation Form End -->
    </div>


    <script src="script.js"></script>

</body>

<?php
if (isset($_POST['full_name']) == true) {

    $full_name = $_POST['full_name'];
    $id = $_POST['id'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['mobile'];

    $img1 = $_FILES['file']['tmp_name'];
    $img2 = $_FILES['file']['name'];


    if (move_uploaded_file($img1, "images/$img2")) {
        $con = mysqli_connect('localhost', 'root', 'root', 'news', 3308);
        $q = "insert into admin_registration values('$id','$full_name','$mobile','$email','$password','$img2')";
        $rs = mysqli_query($con, $q);

        if ($rs) {
            echo "<br><br>
        <center>
        <div class='alert alert-success' style='width:60%'>
        <strong>Success! </strong> Registration Successfully.
        </div>
        </center>
        ";
        } else {
            echo "Error";
        }
    }


}

?>