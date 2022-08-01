<?php 
    $site_url = 'http://localhost/truckjunction/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck Junction - <?php echo $title; ?></title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/csslib.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <header class="headerMain">
        <div class="headerMain-top">
            <div class="container-mid">
                <nav class="navbar navbar-expand-lg" id="main_navbar">

                    <a class="navbar-brand" href="<?php echo $site_url ?>">
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

                    <div class="nav-slider navbar-collapse" id="navbarSupportedContent">

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
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>             
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                </ul>
                                            </li>          
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto mobileBlockMenuSecondNav">
                            <li class="nav-item dropdown dropdown-nav webLangOption">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="webLangOptionSpan boldfont">English</span></a>
                                <div class="dropdown-menu dropdown-nav-menu" aria-labelledby="navbarDropdown">
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
                <a href="#" class="headerMain-bottomLinks">Sell Truck</a>
                <a href="#" class="headerMain-bottomLinks">Broker Dealer</a>
                <a href="#" class="headerMain-bottomLinks">News</a>
                <a href="#" class="headerMain-bottomLinks">Certified Dealers</a>
                <a href="#" class="headerMain-bottomLinks">Loan</a>
                <a href="#" class="headerMain-bottomLinks">Insurance</a>
                <a href="#" class="headerMain-bottomLinks">Review</a>
                <a href="#" class="headerMain-bottomLinks">Videos</a>
                <a href="#" class="headerMain-bottomLinks">Broker Dealer</a>
            </div>
        </div>
    </header>