<?php 
    $site_url = 'http://localhost/truckjunction/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructions Junction - <?php echo $title; ?></title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/csslib.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <header class="headerMain">
        <div class="headerMain-top">
            <div class="container-mid">
                <nav class="navbar navbar-expand-lg" id="main_navbar">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/trucklogo.png" alt="Truck Junction" />
                    </a>

                    <div class="mobileMenubarIcons">
                        <a class="d-lg-none searchTractorsbtn" href="javascript:void(0);"><span><img
                                    src="assets/images/icons/search.svg" /> Search</span></a>
                        <a class="d-lg-none webLangOptionMobile" id="langMobileBlockOpen"
                            href="javascript:void(0);">En</a>
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>

                    <div class="nav-slider navbar-collapse">
                        <div class="mobileBlockMenu-top d-block d-sm-block d-md-block d-lg-none">
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="assets/images/icons/profile.svg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-6">
                                    <p class="boldfont mb-0 mt-3">Login/Register</p>
                                </div>
                            </div>
                        </div>

                        <div class="mobileBlockMenu-bottom d-block d-sm-block d-md-block d-lg-none">
                            <div class="row no-margin">
                                <div class="col-6 no-padding">
                                    <ul class="mb-0">
                                        <li><a class="buytractormobile" href="#">Buy Old Truck</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 no-padding">
                                    <ul class="mb-0">
                                        <li><a class="selltractormobile" href="#">Sell Old Truck</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="brands.php">Brands</a></li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="new-truck-listing.php">New Products</a></li>
                                    <li><a class="dropdown-item" href="old-truck-listing.php">Used Products</a></li>
                                </ul>   
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Used Trucks
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="old-truck-listing.php">Buy Old Truck</a></li>
                                    <li><a class="dropdown-item" href="old-truck-listing.php">Sell Old Truck</a></li>
                                </ul>   
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="new-truck-single.php">Backhoe Loader</a></li>
                                    <li><a class="dropdown-item" href="new-truck-single.php">Compactor</a></li>
                                    <li><a class="dropdown-item" href="new-truck-single.php">Excavator</a></li>
                                    <li><a class="dropdown-item" href="new-truck-single.php">Telescopic Handler</a></li>
                                    <li><a class="dropdown-item" href="new-truck-single.php">Wheel Loader</a></li>
                                </ul>   
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="compare.php">Compare</a></li>
                            <!-- <li class="nav-item active"><a class="nav-link" href="loan.php">Loan</a></li> -->
                            
                        </ul>

                        <ul class="navbar-nav ml-auto mobileBlockMenuSecondNav">
                            <li class="nav-item dropdown dropdown-nav webLangOption">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="webLangOptionSpan boldfont">English</span></a>
                                <div class="dropdown-menu dropdown-nav-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">हिन्दी</a>
                                </div>
                            </li>
                            <li class="nav-item loginBtn webLangOption">
                                <a class="nav-link" href="#">
                                    <span class="boldfont">
                                        User Login
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-nav userOptionsTop">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="userOptions">GS</span></a>
                                <div class="dropdown-menu dropdown-nav-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Account</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>
                            <li class="nav-item searchTractorsbtn webLangOption">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="boldfont">
                                        <img src="assets/images/icons/search.svg" /> Search
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mobileBlockMenu-socialIcon text-center d-block d-sm-block d-md-block d-lg-none">
                            <p class="boldfont mt-3">Follow us on Social Media</p>
                            <ul class="socialMedia mt-2">
                                <li><img src="assets/images/icons/facebook.svg" alt="facebook" /></li>
                                <li><img src="assets/images/icons/twitter.svg" alt="twitter" /></li>
                                <li><img src="assets/images/icons/instagram.svg" alt="instagram" /></li>
                                <li><img src="assets/images/icons/youtube.svg" alt="youtube" /></li>
                                <li><img src="assets/images/icons/linkedin.svg" alt="linkedin" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-mask"></div>
                </nav>
            </div>
        </div>
        <div class="headerMain-bottom">
            <div class="container-mid">
                <!-- <a href="index.php" class="headerMain-bottomLinks itotyText">Home</a> -->
                <a href="index.php" class="headerMain-bottomLinks">Home</a>
                <a href="about.php" class="headerMain-bottomLinks">About</a>
                <a href="loan.php" class="headerMain-bottomLinks">Loan</a>
                <a href="career.php" class="headerMain-bottomLinks">career</a>
                <a href="contact.php" class="headerMain-bottomLinks">Contact</a>
                <!-- <a href="loan.php" class="headerMain-bottomLinks">Loan</a> -->
                <!-- <a href="#" class="headerMain-bottomLinks">Insurance</a> -->
                <!-- <a href="#" class="headerMain-bottomLinks">Review</a> -->
                <!-- <a href="#" class="headerMain-bottomLinks">Videos</a> -->
                <!-- <a href="#" class="headerMain-bottomLinks">Broker Dealer</a> -->
            </div>
        </div>
    </header>