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
        .card-header21 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-buttons21 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
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

    <!-- Comment Form Start -->
    <div class='mb-3' style='width: 80%; margin-left: 10%; padding-top:3%'>
        <div class='section-title mb-0'>
            <h4 class='m-0 text-uppercase font-weight-bold'>Update News</h4>
        </div>
        <div class='bg-white border border-top-0 p-4'>

            <?php

            session_start();
            // $table_name = $_SESSION['table_name'];

            $id = $_GET['id'];
            $table_name=$_GET['table_name'];


            $con = mysqli_connect('localhost', 'root', 'root', 'news', '3308');
            $j = "select * from $table_name where id='$id'";
            $rs = mysqli_query($con, $j);

            while ($row = mysqli_fetch_array($rs)) {
                $_SESSION["id"] = $id;
                echo "
            <form method='POST' enctype='multipart/form-data'>
                <div class='form-group'>
                    <label for='website'>Title</label>
                    <input type='text' class='form-control' id='' name='title' value='$row[title]'>
                </div>

                <div class='form-group'>
                    <label for='website'>Category</label>
                    <input type='text' class='form-control' id='' name='category' value='$row[category]'>
                </div>

                <div class='form-group'>
                    <label for='website'>Content</label>
                    <input type='text' class='form-control' style='height:200px;' id='' name='content' value='$row[content]'>
                    
                </div>

                <div class='form-group'>
                    <label for='website'>Date</label>
                    <input type='date' id='birthday' name='date' value='$row[date]' class='form-control'>

                </div>

                <div class='form-group'>
                    <label for='website'>Image</label>
                </div>

                <div class='card-header21'>
                <img src='images/$row[img]' name='img'>
                <div class='card-buttons21'>
                        
                <div class='col-sm-3'>
                <div class='form-group'>
                    <input type='file' class='form-control' name='file'>
                </div>
            </div>

                    <a class='delete-button' style='padding: 6px 12px;' href='delete_img.php'>
                        Delete
                    </a>
                    </div>


                <div class='form-group mb-0'>
                    <center>
                        <input type='submit' value='Save' class='btn btn-primary font-weight-semi-bold py-2 px-3'>
                    </center>
                </div>
            </form>
        </div>
    </div>
";
            }
            ?>



            <?php

            if (isset($_POST['title']) == true) {

                $id = $_SESSION['id'];
                $table_name = $_SESSION['table_name'];

                $title = $_POST['title'];
                $category = $_POST['category'];
                $content = $_POST['content'];
                $date = $_POST['date'];

                $con = mysqli_connect('localhost', 'root', 'root', 'news', '3308');
                $j = "UPDATE $table_name SET title='$title', category='$category', content='$content', date='$date' WHERE id='$id'";

                $rs = mysqli_query($con, $j);

                if ($rs) {
                    echo "
            <br>
        <center>
        <div class='alert alert-success' style='width:100%'>
        <strong>Success! </strong> News Updated Successfully.
        </div>
        </center>
            ";
                } else {
                    echo "Error";
                }

            }


            ?>
            <!-- Comment Form End -->

            <script src="script.js"></script>
</body>