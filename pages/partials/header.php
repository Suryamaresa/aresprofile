<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ares</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= BASE_PATH . 'assets/img/favicon.png' ?>" rel="icon">
    <link href="<?= BASE_PATH . 'assets/img/apple-touch-icon.png' ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= BASE_PATH . 'assets/css/style.css' ?>" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Personal
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <header id="header" class="<?= current_page() == '/' ? '' : 'header-top' ?>">
        <div class="container" x-data>

            <h1><a href="<?= BASE_PATH . '/' ?>" x-text="$store.profile.name"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span x-text="$store.profile.headline"></span></h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link <?= current_page() == '/' ? 'active' : '' ?>" href="<?= BASE_PATH . '/' ?>">Home</a></li>
                    <li><a class="nav-link <?= current_page() == '/about' ? 'active' : '' ?>" href="<?= BASE_PATH . '/about' ?>">About</a></li>
                    <li><a class="nav-link <?= current_page() == '/resume' ? 'active' : '' ?>" href="<?= BASE_PATH . '/resume' ?>">Resume</a></li>
                    <li><a class="nav-link <?= current_page() == '/portfolio' ? 'active' : '' ?>" href="<?= BASE_PATH . '/portfolio' ?>">Portfolio</a></li>
                    <li><a class="nav-link <?= current_page() == '/contact' ? 'active' : '' ?>" href="<?= BASE_PATH . '/contact' ?>">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a x-bind:href="$store.profile.social_media.linkedin ?? '#'" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a x-bind:href="$store.profile.social_media.instagram ?? '#'" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <a x-bind:href="$store.profile.social_media.twitter ?? '#'" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a x-bind:href="$store.profile.social_media.facebook ?? '#'" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            </div>

        </div>
    </header>