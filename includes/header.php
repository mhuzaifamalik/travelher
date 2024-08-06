<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Travel Her | Text Here';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                        echo $pageTag;
                                    } else {
                                        echo 'desired tag';
                                    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                            echo $pageDesc;
                                        } else {
                                            echo 'desired description';
                                        } ?> />
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="fonts/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <script>
    window.scrollTo(0, 0);
    </script>
</head>

<body class="overflow-hidden">
    <header class="header-main">
        <div class="container-fluid ppx-70">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">TravelHer™<span></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TravelHim™</a>
                                </li>
                                <li class="nav-item mr-lg-2">
                                    <a class="nav-link" href="#">Shop</a>
                                </li>
                            </ul>

                        </div>

                    </nav>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-logo">
                        <a class="img-logo" href="index.php"><img class="img-fluid" src="images/logo.png"
                                alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-cart">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7622 1.15881C11.8371 0.928486 12.1629 0.928484 12.2378 1.15881L14.2054 7.21454C14.4397 7.93558 15.1116 8.42376 15.8697 8.42376H22.2371C22.4793 8.42376 22.58 8.73366 22.3841 8.87602L17.2327 12.6187C16.6194 13.0643 16.3627 13.8542 16.597 14.5752L18.5646 20.631C18.6395 20.8613 18.3759 21.0528 18.1799 20.9105L13.0286 17.1678C12.4153 16.7222 11.5847 16.7222 10.9714 17.1678L5.82006 20.9105C5.62414 21.0528 5.36052 20.8613 5.43536 20.631L7.40298 14.5752C7.63726 13.8542 7.38061 13.0643 6.76726 12.6187L1.61594 8.87601C1.42002 8.73367 1.52071 8.42376 1.76289 8.42376H8.13026C8.88841 8.42376 9.56033 7.93558 9.79461 7.21454L11.7622 1.15881Z"
                                            stroke="black" stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M20.5901 22C20.5901 18.13 16.7402 15 12.0002 15C7.26015 15 3.41016 18.13 3.41016 22"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.81141 2L5.19141 5.63" stroke="black" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.1914 2L18.8114 5.63" stroke="black" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2 7.84961C2 5.99961 2.99 5.84961 4.22 5.84961H19.78C21.01 5.84961 22 5.99961 22 7.84961C22 9.99961 21.01 9.84961 19.78 9.84961H4.22C2.99 9.84961 2 9.99961 2 7.84961Z"
                                            stroke="black" stroke-width="1.5" />
                                        <path d="M9.75977 14V17.55" stroke="black" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M14.3594 14V17.55" stroke="black" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M3.5 10L4.91 18.64C5.23 20.58 6 22 8.86 22H14.89C18 22 18.46 20.64 18.82 18.76L20.5 10"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <header class="mobile-main">
        <div class="container-fluid ppx-20">

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <img class="img-fluid toogleimg" src="images/toggle1.png" alt="image">
                </button>
                <div class="navbar-collapse justify-content-end collapse" id="navbarTogglerDemo03">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">Trevel<span class="bold-font">Her<sup>TM</sup></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Trevel<span class="bold-font">Him<sup>TM</sup></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">My <span class="bold-font">Favorites</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">My <span class="bold-font">Account</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Cart</a>
                        </li>
                    </ul>


                    <div class="header-socials">
                        <ul class="social-media">
                            <li>
                                <a href="#">
                                    <svg width="13" height="23" viewBox="0 0 13 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.39101 22.6456V12.893H11.636L12.2529 8.85868H8.39101V6.24082C8.39101 5.13713 8.93025 4.06135 10.6601 4.06135H12.4163V0.626925C12.4163 0.626925 10.8227 0.354492 9.29951 0.354492C6.11903 0.354492 4.03973 2.28649 4.03973 5.78407V8.85868H0.503906V12.893H4.03973V22.6456H8.39101Z"
                                            fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.94078 7.27137L15.7317 0.524414H14.3595L9.3312 6.38284L5.31548 0.524414H0.683594L6.75663 9.38328L0.683594 16.4585H2.05587L7.3662 10.2718L11.6076 16.4585H16.2395L9.94078 7.27137Z"
                                            fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.2723 3.64551C13.684 3.64551 13.207 4.12355 13.207 4.71321C13.207 5.30287 13.684 5.78092 14.2723 5.78092C14.8606 5.78092 15.3376 5.30287 15.3376 4.71321C15.3376 4.12355 14.8606 3.64551 14.2723 3.64551Z"
                                            fill="white" stroke="white" stroke-width="0.5" stroke-miterlimit="10">
                                        </path>
                                        <path
                                            d="M9.53759 5.01465C7.06998 5.01465 5.0625 7.02669 5.0625 9.49989C5.0625 11.9731 7.06998 13.9851 9.53759 13.9851C12.0052 13.9851 14.0127 11.9731 14.0127 9.49989C14.0127 7.02669 12.0052 5.01465 9.53759 5.01465ZM9.53759 12.3733C7.9565 12.3733 6.67069 11.0846 6.67069 9.49989C6.67069 7.91522 7.9565 6.62649 9.53759 6.62649C11.1187 6.62649 12.4045 7.91522 12.4045 9.49989C12.4045 11.0846 11.1187 12.3733 9.53759 12.3733Z"
                                            fill="white" stroke="white" stroke-width="0.5" stroke-miterlimit="10">
                                        </path>
                                        <path
                                            d="M13.0889 18.607H5.83334C2.82356 18.607 0.375 16.1528 0.375 13.1362V5.86425C0.375 2.84766 2.82356 0.393555 5.83334 0.393555H13.0889C16.0987 0.393555 18.5479 2.84766 18.5479 5.86425V13.1362C18.5479 16.1528 16.0987 18.607 13.0889 18.607ZM5.83334 2.10673C3.76577 2.10673 2.08431 3.792 2.08431 5.86425V13.1362C2.08431 15.2085 3.76577 16.8938 5.83334 16.8938H13.0889C15.1565 16.8938 16.8379 15.2085 16.8379 13.1362V5.86425C16.8379 3.792 15.1557 2.10673 13.0889 2.10673H5.83334Z"
                                            fill="white" stroke="white" stroke-width="0.5" stroke-miterlimit="10">
                                        </path>
                                    </svg>


                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.464675 5.40183H3.46639V15.067H0.464675V5.40183ZM1.96663 0.598633C2.92642 0.598633 3.7045 1.37922 3.7045 2.33898C3.7045 3.29874 2.92642 4.08226 1.96663 4.08226C1.00685 4.08226 0.226562 3.3002 0.226562 2.33898C0.226562 1.37775 1.00465 0.598633 1.96663 0.598633Z"
                                            fill="white"></path>
                                        <path
                                            d="M5.34766 5.4015H8.22262V6.72328H8.26218C8.66295 5.96252 9.64105 5.16211 11.1005 5.16211C14.1352 5.16211 14.695 7.1624 14.695 9.76558V15.0666H11.6998V10.3677C11.6998 9.24568 11.6778 7.80494 10.1422 7.80494C8.58162 7.80494 8.34424 9.02611 8.34424 10.2862V15.0666H5.34838L5.34766 5.4015Z"
                                            fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p class="header-developer">© 2024 TravelHer</p>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>