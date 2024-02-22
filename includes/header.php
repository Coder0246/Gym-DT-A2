<?php 

    $app = new App;
    $app->startingSession();

    define("APPURL", "http://localhost/Gym-DT-A2");
    define("APPIMAGES", "http://localhost/Gym-DT-A2/admin-panel/foods-admins/foods-images");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <!-- Icon Font Stylesheet -->
    
    <!-- Libraries Stylesheet -->
   
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo APPURL; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo APPURL; ?>/css/style.css" rel="stylesheet">
</head>

<body>
   
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?php echo APPURL; ?>" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?php echo APPURL; ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo APPURL; ?>/about.php" class="nav-item nav-link">About</a>
                        <a href="<?php echo APPURL; ?>/service.php" class="nav-item nav-link">Service</a>
                        <a href="<?php echo APPURL; ?>/index2.php" class="nav-item nav-link">Pricing</a>
                        <?php if(isset($_SESSION['username'])) : ?>
                        <a href="<?php echo APPURL; ?>/booking.php" class="nav-item nav-link">Booking</a>
                        <a href="<?php echo APPURL; ?>/review2.php" class="nav-item nav-link">Reviews</a>
                        <a href="<?php echo APPURL; ?>/food/cart.php" class="nav-item nav-link"><i class="fa-sharp fa-solid fa-cart-shopping"></i>Cart</a>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <?php echo $_SESSION['username']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/users/bookings.php">Bookings</a></li>
                                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/users/orders.php">Orders</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                                </ul>
                        </li>
                        <?php else : ?>
                        <a href="<?php echo APPURL; ?>/auth/login.php" class="nav-item nav-link">Login</a>
                        <a href="<?php echo APPURL; ?>/auth/register.php" class="nav-item nav-link">Register</a>
                        <?php endif; ?>
                    </div>
                   
                </div>
            </nav>