<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="google-site-verification" content="S2LYQ-9TnFfx-w6QnPk7HRIQHsC2u5FcUrqBTOVb5ao" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Edit The description of your site in the next meta -->
    <meta name="description" content="ThemeForest Exclusive Responsive Personal Template">
    <meta name="author" content="Yahya Essam - VisionsCode">
    <title><?php echo App\Libraries\SembadaLib::get_site_name(); ?></title>
    <!-- Icon link: replace image directly in folder: control/images/favicon.ico -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('favicon-16x16.png') ?>">
    <link rel="manifest" href="/site.webmanifest">
    <!-- ========== [1.1] CSS Links ========== -->
    <link href="<?php echo base_url('control/css/animate.css') ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <!-- ========== [1.2] Custmize Style ========== -->
    <link href="<?php echo base_url('control/css/style.css') ?>" rel="stylesheet">
    <!-- Colors -->
    <link href="<?php echo base_url('control/css/color.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- ========== [2.1] Loading animation ========== -->
    <div class="loading">
        <div class="table-cell">
            <div class="sk-fading-circle">
                <div class="sk-circle1 sk-circle"></div>
                <div class="sk-circle2 sk-circle"></div>
                <div class="sk-circle3 sk-circle"></div>
                <div class="sk-circle4 sk-circle"></div>
                <div class="sk-circle5 sk-circle"></div>
                <div class="sk-circle6 sk-circle"></div>
                <div class="sk-circle7 sk-circle"></div>
                <div class="sk-circle8 sk-circle"></div>
                <div class="sk-circle9 sk-circle"></div>
                <div class="sk-circle10 sk-circle"></div>
                <div class="sk-circle11 sk-circle"></div>
                <div class="sk-circle12 sk-circle"></div>
            </div> <!-- loading Animation -->
        </div>
    </div>
    <!-- ========== End Of Loading Animation ==========-->

    <!-- ========== [2.2] Nav Bar ========== -->
    <nav id="nav" class="navbar navbar-expand-lg custom-navbar fixed-top">
        <div class="container">
            <!-- NAVBAR HEADER -->
            <a href="<?php echo base_url('') ?>" class="navbar-brand">
                <?php $name = App\Libraries\SembadaLib::get_profile_name();
                $split = explode(" ", $name);
                for ($i = 0; $i < count($split); $i++) {
                    if ($i == 0) { ?>
                        <span class="special"><?php echo $split[0] ?></span>
                <?php } else {
                        echo $split[$i] . " ";
                    }
                }
                ?>
            </a>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="btnToggle" xmlns="http://www.w3.org/2000/svg" height="23px" viewBox="191 -64 30 437" width="29px">
                        <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                        <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                        <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                    </svg>
                </button>
                <!-- lOGO TEXT HERE -->

            </div>
            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#home" class="smoothScroll nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="smoothScroll nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="smoothScroll nav-link">Services</a></li>
                    <li class="nav-item"><a href="#portfolio" class="smoothScroll nav-link">Portfolio</a></li>
                    <li class="nav-item"><a href="https://blog.azizsembada.my.id/" target="_blank" class="smoothScroll nav-link">blog</a></li>
                    <li class="nav-item"><a href="#contact" class="smoothScroll nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ========== End Of Nav Bar ========== -->

    <!-- ========== [2.3] Header ========== -->
    <div id="home" class="demo-1">
        <div id="large-header" class="large-header rip jarallax" style="background-image:url(' <?php echo App\Libraries\SembadaLib::getImgHero() ?>');">
            <!-- Edit Header Background Image ex url('control/img/image-name.jpg') -->
            <canvas id="demo-canvas"></canvas>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <h1 class="wow fadeIn">
                            <?php $name = App\Libraries\SembadaLib::getSubtitleHero();
                            $split = explode(" ", $name);
                            if (count($split) <= 3) {
                                for ($i = 0; $i < count($split); $i++) {
                                    if ($i == 0) { ?>
                                        <span class="special"><?php echo $split[0] ?></span>
                            <?php } else {
                                        echo $split[$i] . " ";
                                    }
                                }
                            } else {
                                for ($i = 0; $i < count($split); $i++) {
                                    if ($i == 2) {
                                        echo $split[$i] . '<br>';
                                    } elseif ($i == 3) {
                                        echo '<span><strong>' . $split[$i] . '</span></strong>';
                                    } else {
                                        echo $split[$i] . " ";
                                    }
                                }
                            }
                            ?>
                        </h1>
                        <!-- Edit  -->
                        <p class="wow fadeIn">
                            <strong><?php echo App\Libraries\SembadaLib::get_profile_name(); ?></strong> - <?php echo App\Libraries\SembadaLib::get_profile_profession(); ?>
                            <!-- Edit -->
                        </p>
                        <a href="#portfolio" class="btn-about smoothScroll wow fadeIn"><span>See
                                My Work</span></a>
                        <!-- Edit -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Header ========= -->

    <!-- ========== [2.4] About ========== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInLeft" data-wow-delay=".4s">
                    <div class="profile-img">
                        <img class="img-fluid" alt="profile picture" src="<?php echo App\Libraries\SembadaLib::get_profile_picture(); ?>" />
                    </div>
                    <!-- Profile Image -->
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay=".6s">
                    <h2><span>Hello I'm </span><?php echo App\Libraries\SembadaLib::get_profile_name(); ?></h2> <!-- Edit -->
                    <p class="strong-p">
                        <?php echo App\Libraries\SembadaLib::getSubtitleBio(); ?>
                    </p>
                    <p>
                        <!-- Edit -->
                        <?php echo App\Libraries\SembadaLib::getSubtitleDescBio(); ?>
                    </p>
                    <div class="buttons-wrapper">
                        <?php echo checkPDF(App\Libraries\SembadaLib::get_profile_cv()); ?>
                        <a href="<?php echo App\Libraries\SembadaLib::get_profile_telegram(); ?>" target="_blank" class="smoothScroll btn btn-about"><span>Hire Me</span></a>
                    </div>
                    <!-- Hire Me button -->
                </div>
            </div>
        </div>
    </section>
    <section class="exp-skills">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title "> <span>Main</span> Skills </h2>
                    <br>
                    <p class="sub-title">
                        <?php echo App\Libraries\SembadaLib::getSubtitleMainSkills(); ?>
                        <!-- Edit -->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 dark-half">
                    <?php
                    for ($i = 0; $i < count($mainSkills); $i++) {
                        if ($mainSkills[$i]['ord'] % 2 != 0) {
                    ?>
                            <div class="progress-bar skill">
                                <span class="label">
                                    <?php echo $mainSkills[$i]['skills'] ?>
                                </span>
                                <span class="progress-percentage skill-bar wow slideInLeft animated" style="width:<?php echo $mainSkills[$i]['percentage'] ?>%">

                                </span>
                                <span class="progress-percent"><?php echo $mainSkills[$i]['percentage'] ?></span>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="col-md-6 dark-half">
                    <?php
                    for ($i = 0; $i < count($mainSkills); $i++) {
                        if ($mainSkills[$i]['ord'] % 2 == 0) {
                    ?>
                            <div class="progress-bar skill">
                                <span class="label"><?php echo $mainSkills[$i]['skills'] ?></span>
                                <span class="progress-percentage skill-bar wow slideInLeft animated" style="width:<?php echo $mainSkills[$i]['percentage'] ?>%">

                                </span>
                                <span class="progress-percent"><?php echo $mainSkills[$i]['percentage'] ?></span>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End About ========== -->

    <!-- ========== [2.5] Services ========== -->
    <section id="services">
        <div class="container text-center">
            <h2 class="section-title">Services</h2> <!-- Edit Section Title -->
            <br>
            <p class="sub-title">
                <?php echo App\Libraries\SembadaLib::getSubtitleServices(); ?>
                <!-- Edit -->
            </p>
            <div class="row wow fadeInUp" data-wow-delay=".5s">
                <?php
                for ($i = 0; $i < count($service); $i++) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature">
                            <i class="<?php echo $service[$i]['icon'] ?> fa-5x" aria-hidden="true"></i>
                            <h3><?php echo $service[$i]['name'] ?></h3> <!-- Edit Title -->
                            <p><?php echo $service[$i]['description'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- ========== End Services ========== -->

    <!-- ========== [2.6] Portfolio ========== -->
    <section id="portfolio">
        <div class="container text-center">
            <h2 class="section-title">Portfolio</h2>
            <br>
            <p class="sub-title">
                <?php echo App\Libraries\SembadaLib::getSubtitlePortfolio(); ?>
                <!-- Edit -->
            </p>
            <div class="row wow fadeInUp" data-wow-delay=".5s">
                <!-- Single Portfolio Item -->
                <?php
                for ($i = 0; $i < count($portfolio); $i++) {
                ?><div class="col-lg-4 col-md-6">
                        <figure class="effect">
                            <img class="img-fluid" src="<?php echo base_url($portfolio[$i]['image']) ?>" alt="img18" /> <!-- Edit Image -->
                            <figcaption>
                                <h2>
                                    <?php
                                    $split = explode(" ", $portfolio[$i]['name']);
                                    for ($j = 0; $j < count($split); $j++) {
                                        if ($j + 1 != count($split)) {
                                            echo $split[$j] . " ";
                                    ?>
                                        <?php } else { ?>
                                            <span><?php echo $split[$j] ?></span>
                                    <?php }
                                    }
                                    ?>
                                </h2>
                                <p>
                                    <?php echo $portfolio[$i]['description']; ?>
                                </p>
                                <a href="<?php echo $portfolio[$i]['link']; ?>" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- ========== End Portfolio ========== -->
    <!-- ===== Start Testimonials Section ===== -->
    <!--
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="section-title">My Clients</h2>
                        <br>
                        <p class="sub-title">It is a long established fact that a reader will be of a page when
                            established .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-center testi_boxes mx-auto">
                                    <div class="mt-2">
                                        <div>
                                            <img src=" https://via.placeholder.com/100x100" alt="user" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                        </div>
                                        <p class="client_review font-italic mt-4 text-center text-muted">" The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                            to using
                                            'Content here."</p>
                                        <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center testi_boxes mx-auto">
                                    <div class="mt-2">
                                        <div>
                                            <img src=" https://via.placeholder.com/100x100" alt="user" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                        </div>
                                        <p class="client_review font-italic mt-4 text-center text-muted">" The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                            to using
                                            'Content here."</p>
                                        <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center testi_boxes mx-auto">
                                    <div class="mt-2">
                                        <div>
                                            <img src=" https://via.placeholder.com/100x100" alt="user" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                        </div>
                                        <p class="client_review font-italic mt-4 text-center text-muted">" The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                            to using
                                            'Content here."</p>
                                        <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ===== End Testimonials Section ===== -->
    <!-- ========== [2.7] Hire Me Section =========== -->
    <section id="hire-me">
        <div class="container text-center">
            <p>
                <?php echo App\Libraries\SembadaLib::getSubtitleDescHireMe(); ?>
                <!-- Edit -->
            </p>
            <h3><?php echo App\Libraries\SembadaLib::getSubtitleHireMe(); ?></h3> <!-- Edit -->
            <a href="<?php echo App\Libraries\SembadaLib::get_profile_telegram(); ?>" target="_blank" class="smoothScroll btn btn-about"><span>Hire Me</span></a>
        </div>
    </section>
    <!-- =========== End Hire Me ============== -->
    <!-- =========== [2.8]  Contact ============ -->
    <div id="contact" style="background:url(' <?php echo App\Libraries\SembadaLib::getImgHero() ?>') no-repeat center center fixed; background-size:cover;">
        <!-- Edit Background image ex: url('control/img/imagename.jpg') -->
        <div class="overlay">
            <div class="container text-center">
                <h2 class="section-title"><?php echo App\Libraries\SembadaLib::getSubtitleContact(); ?></h2> <!-- Edit -->
                <br>
                <p class="sub-title">
                    <?php echo App\Libraries\SembadaLib::getSubtitleDescContact(); ?>
                    <!-- Edit -->
                </p>
                <div class="info text-center">
                    <a href="mailto:<?php echo App\Libraries\SembadaLib::get_profile_email(); ?>" target="_blank">
                        <p class="email">
                            <strong>Email:</strong> <?php echo App\Libraries\SembadaLib::get_profile_email(); ?>
                            <!-- Edit -->
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Contact ========== -->
    <a class="persone_totop" href="#"></a>
    <!-- ========== [2.9] Footer ========== -->
    <section id="footer">
        <div class="container text-center">
            <div class="social-media">
                <!-- Edit facebook Link Insteed of href="#" ex href="http://facebook.com/youraccount"-->
                <a href="<?php echo App\Libraries\SembadaLib::get_profile_github(); ?>" target="_blank"><i class="fa-brands fa-github text-white" aria-hidden="true"></i></a>
                <!-- Edit twitter Link Insteed of href="#" ex href="http://twitter.com/youraccount"-->
                <a href="<?php echo App\Libraries\SembadaLib::get_profile_telegram(); ?>" target="_blank"><i class="fa-brands fa-telegram text-white" aria-hidden="true"></i></a>
                <!-- Edit google-plus Link Insteed of href="#" ex href="http://google.com/youraccount"-->
                <a href="mailto:<?php echo App\Libraries\SembadaLib::get_profile_email(); ?>" target="_blank"><i class="fa-solid fa-at text-white" data-wow-delay="2.0s" aria-hidden="true"></i></a>
                <!-- Edit linkedIn Link Insteed of href="#" ex href="http://linkedin.com/youraccount"-->
                <a href="<?php echo App\Libraries\SembadaLib::get_profile_linkedin(); ?>" target="_blank"><i class="fa-brands fa-linkedin-in text-white" aria-hidden="true"></i></a>
            </div>
            <h5>
                All rights reserved &copy; <?php echo date("Y") ?> <a href="https://azizsembada.my.id"><span class="name">Aziz</span></a>Sembada.
            </h5>
        </div>
    </section>
    <!-- ========== End Footer ========== -->

    <!-- ========== Java Script ========== -->
    <script src="<?php echo base_url('control/js/jquery-3.4.1.min.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/wow.min.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/TweenLite.min.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/EasePack.min.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/rAF.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/header.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/jquery.easing.min.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/SmoothScrollm.js') ?>"></script>
    <script defer src="<?php echo base_url('control/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- ========== End Java Script ========== -->
</body>

</html>