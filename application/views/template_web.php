<!doctype html>
<html lang="en">

<head>
    <title>NFTOcean - NFT Marketplace Website Template + Light & Dark</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="<?= base_url() ?>template/web/assets/images/favicon.png" type="image/gif" sizes="20x20">

    <!-- fancybox -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/jquery.fancybox.min.css">
    <!-- bootstarp icon -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/dropzone.min.css">
    <!-- bootstarp icon -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/bootstrap-icons.css">
    <!-- animate Css -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/animate.css">
    <!-- Swiper bundle Css -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/responsive.css">
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/custom.css">
</head>


<body class="theme-dark-active">


    <!-- mobil__searchbar style -->
    <div class="mobil__searchbar" id="mobilSearch">
        <div class="input__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pb-3 d-flex align-items-center justify-content-between">
                            <h5>What are you looking for?</h5> <span class="close__search" id="closeSearch">Close
                                Popup</span>
                        </div>
                        <form action="#">
                            <div class="d-flex">
                                <input type="text" placeholder="Search Item, Creators, Collections etc.">
                                <button class="submit-v1 ml-2">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  header area start =============== -->
    <header>
        <div class="header-area header-defult header_style__one bg-body">
            <div class="nav-container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-2 align-items-center d-flex">
                        <div class="nav-logo logo-switch d-flex justify-content-between align-items-center">
                            <a class="logo-dark" href="index.html"><img src="<?= base_url() ?>template/web/assets/images/logo.png" alt="logo"></a>
                            <a class="logo-light" href="index.html"><img src="<?= base_url() ?>template/web/assets/images/logo-v2.png" alt="logo"></a>
                        </div>
                        <div class="nav-search-style-one w-100 d-xl-block d-none">
                            <span class="search__icon">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.26847 16.0378C12.2827 16.0378 15.5369 12.7834 15.5369 8.7689C15.5369 4.7544 12.2827 1.5 8.26847 1.5C4.2542 1.5 1 4.7544 1 8.7689C1 12.7834 4.2542 16.0378 8.26847 16.0378Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M17.0002 17.5L13.4023 13.9025" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <input type="text" placeholder="Cari Novel">
                        </div>
                    </div>
                    <div class="col-xxl-8 col-lg-8 col-10  d-flex justify-content-end">
                        <nav class="main-nav mr-2">
                            <div class="inner-logo d-xl-none text-center pt-4">
                                <a href="#" class="for-dark"><img src="<?= base_url() ?>template/web/assets/images/logo.png" alt=""></a>
                                <a href="#" class="for-light"><img src="<?= base_url() ?>template/web/assets/images/logo-v2.png" alt=""></a>
                            </div>
                            <ul>
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li><a href="<?= base_url() ?>web/apk">APK</a></li>
                                <li><a href="<?= base_url() ?>web/kontak">Kontak</a></li>
                                <li><a href="<?= base_url() ?>web/register">Daftar</a></li>
                                <li><a href="<?= base_url() ?>web/login">Login</a></li>
                                <!-- <li><a href="contact.html"> Logout</a></li> -->
                            </ul>
                        </nav>
                        <div class="nav-actions d-flex align-items-center">
                            <!-- <div class="profile-switch-one mr-2">
                                <div class="profile-switch-avater">
                                    <a href="author-profile.html"><img src="<?= base_url() ?>template/web/assets/images/profil-avater.png" alt=""></a>
                                </div>
                            </div> -->
                            <!-- switch -->
                            <label class="theme-switch-one style__one mr-2">
                                <input type="checkbox" id="slider" class="check-status">
                                <span class="slider round"></span>
                            </label>
                            <button type="button" class="nav_search__icon mr-2 d-block d-xl-none mr-2 style__two"
                                id="navSearch">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.26847 16.0378C12.2827 16.0378 15.5369 12.7834 15.5369 8.7689C15.5369 4.7544 12.2827 1.5 8.26847 1.5C4.2542 1.5 1 4.7544 1 8.7689C1 12.7834 4.2542 16.0378 8.26847 16.0378Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M17.0002 17.5L13.4023 13.9025" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>



                            <div class="d-flex align-items-center ml-2">
                                <div class="mobile-menu d-flex ">
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ===============  header area end =============== -->
	<?php echo $contents ?>
    <div class="footer_style__one varient-2 bg-body section_gap_y_top__1">
        <div class="container">
            <div class="row footer__copyright">
                <div class="col-lg-12">
                    <p class="text-center">Copyright©2022. Created with love by <a href="#">bacanovelbl.xyz</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery latest -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- latest bootstarp bundle -->
    <script src="<?= base_url() ?>template/web/assets/js/bootstrap.bundle.min.js"></script>
    <!-- swiper bundle -->
    <script src="<?= base_url() ?>template/web/assets/js/swiper-bundle.min.js"></script>
    <!-- wow js -->
    <script src="<?= base_url() ?>template/web/assets/js/wow.min.js"></script>
    <!-- nice select -->
    <script src="<?= base_url() ?>template/web/assets/js/jquery.nice-select.min.js"></script>
    <!-- jquery countdown -->
    <script src="<?= base_url() ?>template/web/assets/js/jquery.countdown.js"></script>
    <!-- dropzone js -->
    <script src="<?= base_url() ?>template/web/assets/js/dropzone.min.js"></script>
    <!-- fancybox -->
    <script src="<?= base_url() ?>template/web/assets/js/jquery.fancybox.min.js"></script>
    <!-- Custom JavaScript -->
    <script async src="<?= base_url() ?>template/web/assets/js/main.js"></script>
</body>

</html>
