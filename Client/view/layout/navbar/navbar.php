<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.webp">
    <title>Harosa</title>
    <link rel="stylesheet" href="../assets/css/theme.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="../assets/css2/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css2/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="../assets/css2/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/animate.min.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/easyzoom.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/nice-select.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/nivo-slider.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/slick.css">
    <link rel="stylesheet" href="../assets/css2/css-plugins/slick-theme.css"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="../assets/css2/bundle.css">
    <link rel="stylesheet" href="../assets/css2/main.css">
    <link rel="stylesheet" href="../assets/css2/responsive.css">
    <link rel="stylesheet" href="../assets/css2/colors.css"> -->


</head>


<body>
    <nav style="background-image: none; background-color: rgba(255, 255, 255, 0.85);z-index: 1;"
        class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
        data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a href="../../../../Client/view/client.php" class="navbar-brand d-inline-flex"
                href=""><img class="d-inline-block" src="../../../../Client/view/assets/img/logo.png" alt="logo" /><span
                    class="text-1000 fs-0 fw-bold ms-2">Harosa</span></a><button class="navbar-toggler collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
                            href="../../../../Client/view/products.php">Products</a></li>
                    <!-- <li class="nav-item px-2"><a class="nav-link fw-medium" >Women</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium">Men</a></li> -->
                    <li class="nav-item px-2"><a class="nav-link fw-medium">Collection</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium">Outlet</a></li>
                </ul>
                <form class="d-flex">
                    <a class="text-1000" href="">
                        <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg></a>
                    <a class="text-1000" href="/Client/view/cart.php"> <svg class="feather feather-shopping-cart me-3"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg></a>
                    <a class="text-1000" href=""> <svg class="feather feather-search me-3"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg></a>

                    <!-- <a class="text-1000" href="/Client/view/auth/login.php"> <svg class="feather feather-user me-3"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></a> -->
                    <div class="topbar-nav">
                        <!-- my account -->
                        <div class="dropdown menu-my-account-container">
                            <button data-bs-toggle="dropdown" type='button'>
                                <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><i class="ion-ios-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <?php if (isset($_SESSION['user'])) { ?>
                                <li><a class="dropdown-item" href="../../../../Client/view/my_account.php">Tài khoản của
                                        tôi</a></li>
                                <?php } ?>

                                <?php if (!isset($_SESSION['user'])) { ?>
                                <li><a class="dropdown-item" href="/Client/view/auth/login.php">Đăng nhập</a></li>
                                <?php } ?>

                                <?php if (isset($_SESSION['user'])) { ?>
                                <li><a class="dropdown-item" href="../../../../Client/controller/auth/logout.php">Đăng
                                        xuất</a></li>
                                <?php } ?>
                                <?php if (isset($_SESSION['user'])) {
                                        if ($_SESSION['user']['vai_tro'] == "admin") {
                                    ?>
                                <li><a class="dropdown-item" href="../../../../Admin/view/admin.php">
                                        Admin
                                    </a></li>
                                <?php }
                                    } ?>

                            </ul>

                        </div>
                    </div>
                    <a class="text-1000" href=""> <svg class="feather feather-heart me-3"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <script src='../../../assets/js/theme.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>