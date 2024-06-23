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
                    <h1 class="m-0 display-4 text-uppercase text-primary">शिवनाथ<span
                            class="text-secondary font-weight-normal">सम्वाद
                        </span></h1>
                </a>


            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span
                        class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <!-- <a href="category.html" class="nav-item nav-link">Category</a> -->
                    <a href="single.html" class="nav-item nav-link">Letest-News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">राजनिति</a>
                            <a href="#" class="dropdown-item">दुर्ग-भिलाई</a>
                            <a href="#" class="dropdown-item">रायपुर</a>
                            <a href="#" class="dropdown-item">खेल</a>
                            <a href="#" class="dropdown-item">मानोरंजन</a>
                            <a href="#" class="dropdown-item">देश-विदेश</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="contact.html" class="nav-item nav-link active" style="margin-left: 490px;">Edit</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Search News">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">

                    <?php

                    $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                    $q = "select * from slider_news";
                    $rs = mysqli_query($con, $q);

                    while ($row = mysqli_fetch_array($rs)) {
                        echo "

                    <div class='position-relative overflow-hidden' style='height: 500px;'>
                        <img class='img-fluid h-100' src='images/$row[img]' style='object-fit: cover;'>
                        <div class='overlay'>
                            <div class='mb-2'>
                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                    href=''>$row[category]</a>
                                <a class='text-white' href=''>$row[date]</a>
                            </div>
                            <a class='h2 m-0 text-white text-uppercase font-weight-bold' href=''>$row[title]</a>
                        </div>
                    </div>

                    ";
                    }

                    $table_name = "slider_news";

                    echo "

                </div>
                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                    style='width: 99%; margin-top: 5px;' href='admin_edit_list.php?table_name=$table_name'>
                    Edit News
                </a>
            </div>

                ";
                    ?>
                    <!-- Main News Slider End -->

                    <!-- News 2*4 Start -->


                    <div class='col-lg-5 px-0'>
                        <div class='row mx-0'>

                            <?php

                            $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                            $q = "select * from news4";
                            $rs = mysqli_query($con, $q);

                            while ($row = mysqli_fetch_array($rs)) {
                                echo "


                            <div class='col-md-6 px-0'>
                                <div class='position-relative overflow-hidden' style='height: 250px;'>
                                    <img class='img-fluid w-100 h-100' src='images/$row[img]' style='object-fit: cover;'>
                                    <div class='overlay'>
                                        <div class='mb-2'>
                                            <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                                href=''>$row[category]</a>
                                            <a class='text-white' href=''><small>$row[date]</small></a>
                                        </div>
                                        <a class='h6 m-0 text-white text-uppercase font-weight-semi-bold' href=''>$row[title]</a>
                                    </div>
                                </div>
                            </div>
                            ";
                            }

                            $table_name = "news4";
                            echo "
                        </div>

                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                            style='width: 98%; margin-top: 5px;' href='admin_edit_list.php?table_name=$table_name'>
                            Edit News
                        </a>
                    </div>
                    ";
                            ?>

                            <!-- News 2*4 End -->

                        </div>
                    </div>
                    <!-- Main News Slider End -->

                    <br>
                    <!-- Breaking News Start -->
                    <div class='container-fluid bg-dark py-3 mb-3'>
                        <div class='container'>
                            <div class='row align-items-center bg-dark'>
                                <div class='col-12'>
                                    <div class='d-flex justify-content-between'>

                                        <?php

                                        $table_name = "breaking_news";

                                        echo "
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                            style='width: 10%; margin-top: 5px;'
                                            href='admin_edit_list.php?table_name=$table_name'>
                                            Add or Edit
                                        </a>

                                        <div class='owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3'
                                            style='width: calc(100% - 170px); padding-right: 90px;'>
                                            ";

                                        $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                                        $q = "select * from breaking_news";
                                        $rs = mysqli_query($con, $q);

                                        while ($row = mysqli_fetch_array($rs)) {
                                            echo "
                                            <div class='text-truncate'><a
                                                    class='text-white text-uppercase font-weight-semi-bold'
                                                    href=''>$row[title]</a></div>
                                                    ";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Breaking News End -->



                <!-- Featured News Slider Start -->

                <div class='container-fluid pt-5 mb-3'>
                    <div class='container'>
                        <div class='section-title'>

                            <?php

                            $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                            $q = "select * from featured_news";
                            $rs = mysqli_query($con, $q);

                            $table_name = "featured_news";
                            echo "
                            <h4 class='m-0 text-uppercase font-weight-bold'>Featured News
                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                    style='margin-left: 720px; font-size: 14px;' href='admin_edit_list.php?table_name=$table_name'>Edit</a>
                            </h4>
                        </div>

                        <div class='owl-carousel news-carousel carousel-item-4 position-relative'>
                            <div class='position-relative overflow-hidden' style='height: 300px;'>
                            ";
                            while ($row = mysqli_fetch_array($rs)) {
                                echo "
                                <img class='img-fluid h-100' src='images/$row[img]' style='object-fit: cover;'>
                                <div class='overlay'>
                                    <div class='mb-2'>
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                            href=''>$row[category]</a>
                                        <a class='text-white' href=''><small>$row[date]</small></a>
                                    </div>
                                    <a class='h6 m-0 text-white text-uppercase font-weight-semi-bold' href=''>$row[title]</a>
                                </div>
                                ";
                            }
                            ?>

                        </div>

                    </div>

                </div>
            </div>



            <!-- Featured News Slider End -->



            <!-- News With Sidebar Start -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>

                                        <?php

                                        $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                                        $q = "select * from letest_news";
                                        $rs = mysqli_query($con, $q);

                                        $table_name = "letest_news";



                                        echo "
                                        <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                            href='admin_edit_list.php?table_name=$table_name'>Edit</a>
                                    </div>
                                </div>
                                ";


                                        while ($row = mysqli_fetch_array($rs)) {

                                            echo "
                                <div class='col-lg-6'>
                                    <div class='position-relative mb-3'>
                                        <img class='img-fluid w-100' src='images/$row[img]' style='object-fit: cover;'>
                                        <div class='bg-white border border-top-0 p-4'>
                                            <div class='mb-2'>
                                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2'
                                                    href=''>$row[category]</a>
                                                <a class='text-body' href=''><small>$row[date]</small></a>
                                            </div>
                                            <a class='h4 d-block mb-3 text-secondary text-uppercase font-weight-bold'
                                                href=''>$row[title]</a>
                                            <p class='m-0'>$row[content]</p>
                                        </div>
                                        <div class='d-flex justify-content-between bg-white border border-top-0 p-4'>
                                            <div class='d-flex align-items-center'>
                                                <img class='rounded-circle mr-2' src='img/user.jpg' width='25'
                                                    height='25' alt=''>
                                                <small>मनिश साहु</small>
                                            </div>
                                            <div class='d-flex align-items-center'>
                                                <small class='ml-3'><i class='far fa-eye mr-2'></i>12345</small>
                                                <small class='ml-3'><i class='far fa-comment mr-2'></i>123</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                                        }

                                        ?>




                                        <div class="col-lg-12 mb-3">
                                            <a href=""><img class="img-fluid w-100" src="img/ads.png" alt=""></a>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                style="width: 100%;" href="">Edit This Add</a>
                                        </div>


                                        <?php

                                        $con = mysqli_connect("localhost", "root", "root", "news", "3308");
                                        $q = "select * from small_news1";
                                        $rs = mysqli_query($con, $q);

                                        $table_name = "small_news1";

                                        while ($row = mysqli_fetch_array($rs)) {
                                            echo "

                                <div class='col-lg-6'>
                                    <div class='d-flex align-items-center bg-white mb-3' style='height: 110px;'>
                                        <img class='img-fluid' src='images/$row[img]' alt=''
                                            style='height: 110px; width: 110px;'>
                                        <div
                                            class='w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0'>
                                            <div class='mb-2'>
                                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2'
                                                    href=''>$row[category]</a>
                                                <a class='text-body' href=''><small>$row[date]</small></a>
                                            </div>
                                            <a class='h6 m-0 text-secondary text-uppercase font-weight-bold' href=''>
                                                $row[title]</a>
                                        </div>
                                    </div>
                                    </div>
                                    ";
                                        }


                                        echo "
                                
                                <a class='badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2'
                                    style='width: 100%; height: 25px; font-size: 14px; margin-left: 6px; margin-bottom: 6px;'
                                    href='admin_edit_list.php?table_name=$table_name'>Edit</a>
                                    ";

                                        ?>





                                        <div class="col-lg-12 mb-3" style="margin-top: 15px;">
                                            <a href=""><img class="img-fluid w-100" src="img/ads.png" alt=""></a>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                style="width: 100%;" href="">Edit This Add</a>
                                        </div>





                                        <div class="col-lg-12">
                                            <div class="row news-lg mx-0 mb-3">
                                                <div class="col-md-6 h-100 px-0">
                                                    <img class="img-fluid h-100" src="img/pprr.jpg"
                                                        style="object-fit: cover;">
                                                </div>
                                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                                    <div class="mt-auto p-4">
                                                        <div class="mb-2">
                                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                                href="">राजनिति</a>
                                                            <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                        </div>
                                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                                            href="">'मोदी खुद को बड़ा ईमानदार बताते हैं' : प्रियंका गांधी
                                                            बोलीं...</a>
                                                        <p class="m-0">प्रियंका गांधी ने कहा कि भूपेश बघेल ने प्रदेश को
                                                            आगे
                                                            बढ़ने की
                                                            काफी कोशिश की, इस वजह से उन पर काफी प्रहार हुआ। दिल्ली ने भी
                                                            सभी ने
                                                            छत्तीसगढ़ के बारे में देखा औऱ सुना। यह बात बीजेपी को पसंद
                                                            नहीं आई।
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded-circle mr-2" src="img/user.jpg"
                                                                width="25" height="25" alt="">
                                                            <small>शाम शर्मा</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="ml-3"><i
                                                                    class="far fa-eye mr-2"></i>12345</small>
                                                            <small class="ml-3"><i
                                                                    class="far fa-comment mr-2"></i>123</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            style="width: 100%; height: 25px; font-size: 14px; margin-left: 6px; margin-bottom: 6px;"
                                            href="">Edit</a>





                                            

                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/bord.jpg" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">बोर्ड
                                                        परीक्षा के रिजल्‍ट को लेकर बड़ा अपडेट...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/train22.avif" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">रेलवे ने
                                                        फिर बढ़ाई मुसीबतें, कैंसिल हुई MP-छत्तीसगढ़...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/saroj.avif" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">छत्तीसगढ़
                                                        की इस सीट पर दीदी VS भाभी का मुकाबला...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/po.webp" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">भाजपा ने
                                                        किया बुद्धिजीवी सम्मलेन का आयोजन...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            style="width: 100%; height: 25px; font-size: 14px; margin-left: 6px; margin-bottom: 6px;"
                                            href="">Edit</a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <!-- Social Follow Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Edit</a>
                                        </div>
                                        <div class="bg-white border border-top-0 p-3">
                                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                                style="background: #39569E;">
                                                <i class="fab fa-facebook-f text-center py-4 mr-3"
                                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                                <span class="font-weight-medium">12,345 Fans</span>
                                            </a>
                                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                                style="background: #52AAF4;">
                                                <i class="fab fa-twitter text-center py-4 mr-3"
                                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                                <span class="font-weight-medium">12,345 Followers</span>
                                            </a>
                                            <!-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a> -->
                                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                                style="background: #C8359D;">
                                                <i class="fab fa-instagram text-center py-4 mr-3"
                                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                                <span class="font-weight-medium">12,345 Followers</span>
                                            </a>
                                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                                style="background: #DC472E;">
                                                <i class="fab fa-youtube text-center py-4 mr-3"
                                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                                <span class="font-weight-medium">12,345 Subscribers</span>
                                            </a>
                                            <!-- <a href="" class="d-block w-100 text-white text-decoration-none"
                                style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a> -->
                                        </div>
                                    </div>
                                    <!-- Social Follow End -->

                                    <!-- Ads Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Upload</a>
                                        </div>
                                        <div class="bg-white text-center border border-top-0 p-3">
                                            <a href=""><img class="img-fluid" src="img/ads2.png" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- Ads End -->

                                    <!-- Popular News Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Edit</a>

                                        </div>
                                        <div class="bg-white border border-top-0 p-3">
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/t1.avif" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">छत्तीसगढ़
                                                        में 15 दिन में दूसरा बड़ा एंटी-नक्सल ऑपरेशन...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/t2.webp" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">बस्तर के इन
                                                        प्राकृतिक स्थानों की जरूर करें सैर...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/t3.jpg" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">छत्तीगढ़
                                                        में झुलसाने वाली गर्मी, आने वाले दिनों में बढ़ेगा तापमान...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/t4.webp" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">शराब
                                                        प्रेमियों के लिए बुरी खबर, छत्तीसगढ़ में 2 दिनों तक रहेगी...</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                                <img class="img-fluid" src="img/t5.webp" alt=""
                                                    style="height: 110px; width: 110px;">
                                                <div
                                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                                    <div class="mb-2">
                                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                            href="">Business</a>
                                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                                    </div>
                                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                                        href="">
                                                        छत्तीसगढ़
                                                        के नारायणपुर जिले स्थित छोटे डोंगर के प्रख्यात...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Popular News End -->

                                    <!-- Ads Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Upload</a>
                                        </div>
                                        <div class="bg-white text-center border border-top-0 p-3">
                                            <a href=""><img class="img-fluid" src="img/ads2.png" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- Ads End -->

                                    <!-- Newsletter Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Edit</a>
                                        </div>
                                        <div class="bg-white text-center border border-top-0 p-3">
                                            <p>छत्तीसगढ़ का सबसे भरोसेमंद न्यूज़ वेबसाइट शिवनाथ संवाद से जुड़ने के लिए अभी
                                                Sign-Up
                                                करें
                                            </p>
                                            <div class="input-group mb-2" style="width: 100%;">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Your Email">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary font-weight-bold px-3">Sign
                                                        Up</button>
                                                </div>
                                            </div>
                                            <small>इसी तरह के विशेष समाचारों के लिए हमसे जुड़े</small>
                                        </div>
                                    </div>
                                    <!-- Newsletter End -->

                                    <!-- Tags Start -->
                                    <div class="mb-3">
                                        <div class="section-title mb-0">
                                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="">Edit</a>
                                        </div>
                                        <div class="bg-white border border-top-0 p-3">
                                            <div class="d-flex flex-wrap m-n1">

                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">राजनिति</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">उद्योग</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">सेहत</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">मुख्य समाचार</a>
                                                <a href=""
                                                    class="btn btn-sm btn-outline-secondary m-1">अन्तर्राष्ट्रीय</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">रोजगार</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">विज्ञान</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">खेल</a>
                                                <a href="" class="btn btn-sm btn-outline-secondary m-1">मौसम</a>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tags End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News With Sidebar End -->


                    <!-- Footer Start -->
                    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
                        <div class="row py-4">
                            <div class="col-lg-3 col-md-6 mb-5">
                                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                        href="">Edit</a>
                                </h5>
                                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Bhilai,
                                    Chhattisgarh,
                                    India</p>
                                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>9589900704</p>
                                <p class="font-weight-medium"><i
                                        class="fa fa-envelope mr-2"></i>shivnathsamvad@gmail.com
                                </p>
                                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                        href="">Edit</a>
                                </h6>
                                <div class="d-flex justify-content-start">
                                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                        href="">Edit</a>
                                </h5>
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">राजनिति</a>
                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                    </div>
                                    <a class="small text-body text-uppercase font-weight-medium" href="">पीएम मोदी
                                        गुरुवार को
                                        गुजरात के
                                        जूनागढ़ और जामनगर में जनसभा करेंगे...</a>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">अन्तर्राष्ट्रीय</a>
                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                    </div>
                                    <a class="small text-body text-uppercase font-weight-medium" href="">अमेरिका के
                                        कॉलेजों में
                                        इजरायल
                                        के खिलाफ प्रदर्शन तेज, बाइडन को दी जा रही अपडेट...</a>
                                </div>
                                <div class="">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">क्राइम</a>
                                        <a class="text-body" href=""><small>Jan 01, 2024</small></a>
                                    </div>
                                    <a class="small text-body text-uppercase font-weight-medium" href="">दिल्ली स्कूल बम
                                        धमकी
                                        मामले में
                                        आए ईमेल में इस्लामिक स्टेट जैसी भाषा का इस्तेमाल...</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                        href="">Edit</a>
                                </h5>

                                <div class="m-n1">

                                    <a href="" class="btn btn-sm btn-secondary m-1">राजनिति</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">उद्योग</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">व्यापार</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">सेहत</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">मुख्य समाचार</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">अन्तर्राष्ट्रीय</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">रोजगार</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">विज्ञान</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">खेल</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">मौसम</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">मनोरंजन</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">देश-विदेश</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">अपराध समाचार</a>
                                    <a href="" class="btn btn-sm btn-secondary m-1">प्रादेशिक समाचार</a>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flickr Photos
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                        href="">Edit</a>
                                </h5>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-3.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-5.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
                        <p class="m-0 text-center">&copy; <a href="#"> GLISTARA </a> All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Design by <a href="https://htmlcodex.com">Krishna Chakrdahri</a>
                        </p>
                    </div>
                    <!-- Footer End -->


                    <!-- Back to Top -->
                    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>






                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script
                        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                    <script src="lib/easing/easing.min.js"></script>
                    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

                    <!-- Template Javascript -->
                    <script src="js/main.js"></script>

                    <script src="script.js"></script>
</body>