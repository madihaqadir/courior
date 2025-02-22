<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a> -->
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <!-- <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>Faster</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="City.php" class="nav-item nav-link">City</a>
                    

                    <!-- <a href="service.php" class="nav-item nav-link">Service</a> -->

                    <a href="form.php" class="nav-item nav-link">Booking</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <?php
                            if(!isset($_SESSION['img'])){?>
                                <a href="sign.php" class="nav-item nav-link">Login</a>
                            <a href="signuplogin.php" class="nav-item nav-link">Register</a> 
                            <?php
                            } else {?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['img'] ?>" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">
                                    <?php echo $_SESSION['name'] ?>
                                </span>
                                </a>
                               
                                <div class="dropdown-menu rounded-0 m-0">
                                
                                <a href="showprofile.php" class="dropdown-item">my profile</a>
                                <!-- <a href="updateprofile.php" class="dropdown-item">edit profile</a> -->
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                                </div>

                                <?php } ?>
                </div>
                <!-- <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    

