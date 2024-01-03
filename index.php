<?php
if (isset($_GET['tab'])) {
    $tab = $_GET['tab'];
}
else {
    $tab = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stroke Diagnosis on CT Imaging (Comprehensive)</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/logo-only.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/grid.css">
</head>

<body>
    <!-- header -->
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-120 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="../index.php" rel="home"><img class="d-block" src="images/logo.svg" alt="logo" style="height: 50px;"></a>
                        </div><!-- .site-branding -->

                        <!-- navigation bar -->
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="<?php if ($tab=="home") echo "current-menu-item";?>"><a href="index.php?tab=home"><i class="fa fa-home"></i> Home</a></li>

                                <li class="<?php if ($tab=="about") echo "current-menu-item";?>"><a href="index.php?tab=about"><i class="fa fa-info-circle"></i> About Us</a></li>

                            </ul>
                        </nav><!-- .site-navigation -->


                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header>

    <br><br><br>

    <div class="section" style="padding-bottom: 0px;">
        <div class="container">
            <img src="images/banner.jpg" style="width: 100%;">
        </div>
    </div>

    <?php
    if ($tab == "home") include("pages/home.php");
    if ($tab == "about") include("pages/about.php");
    ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>