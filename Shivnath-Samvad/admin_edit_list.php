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
            <h4 class="m-0 text-uppercase font-weight-bold">News List</h4>
        </div>
        <div class="bg-white border border-top-0 p-4">



            <?php
            // if ((isset($_SESSION['table_name']))) {
            //     $table_name = $_SESSION['table_name'];
            
            // } else {
            //     $table_name = $_GET['table_name'];
            // }

            $table_name=$_GET['table_name'];

            $con = mysqli_connect("localhost", "root", "root", "news", "3308");
            $q = "select * from $table_name";
            $rs = mysqli_query($con, $q);

            while ($row = mysqli_fetch_array($rs)) {
                
                echo "
            <div class='cards-container21'>
                <div class='card21'>
                    <div class='card-header21'>
                        <img src='images/$row[img]' alt='news-image' id='news-img'>
                    </div>

                    <div class='card-content21'>
                        <h3 id='news-title'>$row[title]</h3>

                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2' style='font-size:14px;'
                                                    href=''>$row[category]
                        </a>

                        <h6 class='news-source' id='news-source'>$row[date]</h6>
                        <p class='news-desc' id='news-desc'></p>
                    </div>
                    <div class='card-buttons21'>
                        
                    <a class='edit-button' style='padding: 6px 12px;' href='edit_news_content.php?id=$row[id]&table_name=$table_name'>
                        Edit
                    </a>

                    <a class='delete-button' style='padding: 6px 12px;' href='news_content_delete.php?table_name=$table_name&id=$row[id]'>
                        Delete
                    </a>
                    </div>
                </div>
            </div>


        ";
            }

            echo "
        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                    style='width: 100%; height:35px; font-size: 18px; margin-top: 5px;' href='add_newscontent.php?table_name=$table_name'>
                    Add New News
                </a>
        </div>
    </div>
    ";
            ?>
            <!-- Registation Form End -->




            <script src="script.js"></script>
</body>