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


    <!-- Comment Form Start -->
    <div class="mb-3" style="width: 80%; margin-left: 10%; padding-top:3%">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Add News</h4>
        </div>
        <div class="bg-white border border-top-0 p-4">


            <form method="post" enctype="multipart/form-data" style="width: 80%; margin-left: 10%;">

                <div class="form-group">
                    <label for="website">Title</label>
                    <input type="text" class="form-control" id="" name="title">
                </div>

                <div class="form-group">
                    <label for="website">Category</label>
                    <input type="text" class="form-control" id="" name="category">
                </div>

                <div class="form-group">
                    <label for="website">Content</label>
                    <textarea id="content" class="form-control" name="content" rows="5" cols="60" required></textarea>
                </div>

                <div class="form-group">
                    <label for="website">Date</label>
                    <input type="date" id="birthday" name="date" class="form-control">

                </div>

                <div class="form-group">
                    <label for="website">Upload Image</label>
                    <input type="file" class="form-control" id="myfile" name="file" multiple> <br><br>
                </div>

                <div class="form-group mb-0">
                    <center>
                        <input type="submit" value="Save" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Comment Form End -->

    <script src="script.js"></script>
</body>



<?php

if (isset($_POST['title']) && $_POST['title'] == true) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $table_name = $_GET['table_name'];

    $img1 = $_FILES['file']['tmp_name'];
    $img2 = $_FILES['file']['name'];

    if (move_uploaded_file($img1, "images/$img2")) {
        $con = mysqli_connect('localhost', 'root', 'root', 'news', 3308);

        // Check connection
        if (!$con) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Escape user inputs for security
        $title = mysqli_real_escape_string($con, $title);
        $category = mysqli_real_escape_string($con, $category);
        $content = mysqli_real_escape_string($con, $content);
        $date = mysqli_real_escape_string($con, $date);
        $img2 = mysqli_real_escape_string($con, $img2);

        $q = "INSERT INTO $table_name (title, category, content, date, img) VALUES ('$title', '$category', '$content', '$date', '$img2')";
        $rs = mysqli_query($con, $q);

        if ($rs) {
            echo '<center>
            <div class="alert alert-success" style="width:80%">
            <strong>Success! </strong> Saved News Successfully.
            </div>
            </center>';
        } else {
            echo 'error: ' . mysqli_error($con);
        }

        mysqli_close($con);
    } else {
        echo 'File upload failed';
    }
}
?>