<?php
    $title = "Home";
    include('layouts/header.php'); 
?>

<section class="sliderBlock">
    <div id="homeSlider" class="carousel slide d-none d-sm-none d-md-none d-lg-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sliderdummy.png" data-src="./assets/images/banners/slide7.jpg" class="img-fluid"
                    alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sliderdummy.png" data-src="./assets/images/banners/slide6.jpg" class="img-fluid"
                    alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="homeSlider" class="carousel slide d-block d-sm-block d-md-block d-lg-none" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sliderdummy-mobile.png" data-src="./assets/images/banners/slide1-mob.jpg"
                    class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sliderdummy-mobile.png" data-src="./assets/images/banners/slide2-mob.jpg"
                    class="img-fluid" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-mid container-mid-mobileFull">
        <div class="sliderBlock-filterHome">
            <div class="filterHome-inner">
                <h1>Search The Right Truck</h1>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-filter-new-truck" data-toggle="tab" href="#filter-new-truck"
                            role="tab" aria-controls="filter-new-truck" aria-selected="true">New Truck</a>
                        <a class="nav-link" id="nav-filter-used-truck" data-toggle="tab" href="#filter-used-truck"
                            role="tab" aria-controls="filter-used-truck" aria-selected="false">Used Truck</a>
                    </div>
                </nav>
                <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="filter-new-truck" role="tabpanel"
                        aria-labelledby="nav-filter-new-truck">
                        <form>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Select Brand</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Password ..">
                            </div>
                            <button type="submit" class="w-100 fillBtn mt-1">Search Truck</button>
                        </form>
                        <div class="viewall mt-3 text-right">
                            <a href="#" class="boldfont">View All <img src="assets/images/icons/linkarrow.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="filter-used-truck" role="tabpanel"
                        aria-labelledby="nav-filter-used-truck">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name ..">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Password ..">
                            </div>
                            <button type="submit" class="w-100 fillBtn mt-1">Search Truck</button>
                        </form>
                        <div class="viewall mt-3 text-right">
                            <a href="#" class="boldfont">View All <img src="assets/images/icons/linkarrow.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Backhoe Loader in 2022</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-truck-popular" data-toggle="tab" href="#truck-popular" role="tab"
                        aria-controls="truck-popular" aria-selected="true">Popular</a>
                    <a class="nav-link" id="nav-truck-latest" data-toggle="tab" href="#truck-latest" role="tab"
                        aria-controls="truck-latest" aria-selected="false">Latest</a>
                    <a class="nav-link" id="nav-truck-upcoming" data-toggle="tab" href="#truck-upcoming" role="tab"
                        aria-controls="truck-upcoming" aria-selected="false">Upcoming</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="truck-popular" role="tabpanel"
                    aria-labelledby="nav-truck-popular">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-2.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-3.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-4.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Popular <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="truck-latest" role="tabpanel" aria-labelledby="nav-truck-latest">
                <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-2.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-3.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-4.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Latest <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="truck-upcoming" role="tabpanel" aria-labelledby="nav-truck-upcoming">
                <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-2.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-3.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/backhoeloader-4.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Upcoming <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="mb-4">
    <div class="container-mid position-relative">
        <img src="assets/images/promotional/mahindra-scheduler-desktop1.jpg"
            class="d-none d-sm-none d-md-block img-fluid" alt="" />
        <img src="assets/images/promotional/mahindra-scheduler-mobile1.jpg"
            class="d-block d-sm-block d-md-none img-fluid mb-3" alt="" />
        <div class="timer__count">
            <h1 id="headline">Offers End In <span id="days"></span> &nbsp;Days</h1>
            <div id="countdown">
                <ul class="mb-0 timer__scheduler">
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                </ul>
            </div>
            <div id="content" class="timer__expire">
                <span>🎉</span>
                <span>🎉</span>
                <span>🎉</span>
            </div>
        </div>
    </div>
</div>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Construction Brands</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-new-truck" data-toggle="tab" href="#new-truck" role="tab"
                        aria-controls="new-truck" aria-selected="true">New Brands</a>
                    <a class="nav-link" id="nav-used-truck" data-toggle="tab" href="#used-truck" role="tab"
                        aria-controls="used-truck" aria-selected="false">Used Brands</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="new-truck" role="tabpanel" aria-labelledby="nav-new-truck">

                    <div class="brandsBlock text-center tj-row">
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="" />
                                    <p>JCB</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="" />
                                    <p>Jhon Deere</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/eicher.png" class="img-fluid" alt="" />
                                    <p>Caterpiller</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="" />
                                    <p>CAT</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="" />
                                    <p>Hyundai</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/tata.png" class="img-fluid" alt="" />
                                    <p>volvo</p>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="" />
                                    <p>JCB</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="" />
                                    <p>Jhon Deere</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/eicher.png" class="img-fluid" alt="" />
                                    <p>Caterpiller</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="" />
                                    <p>CAT</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="" />
                                    <p>Hyundai</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/tata.png" class="img-fluid" alt="" />
                                    <p>volvo</p>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Brands <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="used-truck" role="tabpanel" aria-labelledby="nav-used-truck">

                    <div class="brandsBlock text-center tj-row">
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="" />
                                    <p>JCB</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="" />
                                    <p>Jhon Deere</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/eicher.png" class="img-fluid" alt="" />
                                    <p>Caterpiller</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="" />
                                    <p>CAT</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="" />
                                    <p>Hyundai</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/tata.png" class="img-fluid" alt="" />
                                    <p>volvo</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="" />
                                    <p>JCB</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="" />
                                    <p>Jhon Deere</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/eicher.png" class="img-fluid" alt="" />
                                    <p>Caterpiller</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="" />
                                    <p>CAT</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="" />
                                    <p>Hyundai</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/tata.png" class="img-fluid" alt="" />
                                    <p>Volvo</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Brands <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Latest Models by Category</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-cate-truck" data-toggle="tab" href="#cate-truck" role="tab"
                        aria-controls="cate-truck" aria-selected="true">Backhoe Loader</a>
                    <a class="nav-link" id="nav-cate-minitruck" data-toggle="tab" href="#cate-minitruck" role="tab"
                        aria-controls="cate-minitruck" aria-selected="false">Compactor</a>
                    <a class="nav-link" id="nav-cate-tipper" data-toggle="tab" href="#cate-tipper" role="tab"
                        aria-controls="cate-tipper" aria-selected="false">Excavator</a>
                    <a class="nav-link" id="nav-cate-tractor" data-toggle="tab" href="#cate-tractor" role="tab"
                        aria-controls="cate-tractor" aria-selected="false">Telescopic Handler</a>
                    <a class="nav-link" id="nav-cate-twheeler" data-toggle="tab" href="#cate-twheeler" role="tab"
                        aria-controls="cate-twheeler" aria-selected="false">Wheel Loader</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="cate-truck" role="tabpanel" aria-labelledby="nav-cate-truck">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/backhoeloader-1.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/backhoeloader-2.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/backhoeloader-3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/backhoeloader-4.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">CAT 924K</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Category <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-minitruck" role="tabpanel" aria-labelledby="nav-cate-minitruck">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/compactor.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Compactor</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/compactor2.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Compactor</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/compactor3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Compactor</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/compactor4.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Compactor</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Mini Trucks <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-tipper" role="tabpanel" aria-labelledby="nav-cate-tipper">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/excavator.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Excavator</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/excavator-1.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Excavator</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/excavator-2.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Excavator</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/excavator-3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Excavator</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Tippers <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-tractor" role="tabpanel" aria-labelledby="nav-cate-tractor">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/telescopichandler.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Telescopic Handler</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/telescopichandler1.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Telescopic Handler</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/telescopichandler2.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Telescopic Handler</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/telescopichandler3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Telescopic Handler</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Tractors <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-twheeler" role="tabpanel" aria-labelledby="nav-cate-twheeler">
                    <div class="newTruckBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/wheelloader1.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Wheel Loader</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/wheelloader2.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Wheel Loader</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/wheelloader3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Wheel Loader</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="#">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/wheelloader4.jpg" class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content text-center">
                                    <a href="#">
                                        <p class="newTruckBlock-title boldfont">Wheel Loader</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹ 10,00,000 - ₹ 15,00,000</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All 3 Wheeler <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="filterBlock greybg sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Find Perfect Construction</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-budget" data-toggle="tab" href="#budget" role="tab"
                        aria-controls="budget" aria-selected="true">Budget</a>
                    <a class="nav-link" id="nav-bodytype" data-toggle="tab" href="#bodytype" role="tab"
                        aria-controls="bodytype" aria-selected="false">Body Type</a>
                    <a class="nav-link" id="nav-fueltype" data-toggle="tab" href="#fueltype" role="tab"
                        aria-controls="fueltype" aria-selected="false">Fuel Type</a>
                </div>
            </nav>
            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="budget" role="tabpanel" aria-labelledby="nav-budget">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">up to 10
                                Lakh</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">10 Lakh - 20
                                Lakh</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">20 Lakh - 25
                                Lakh</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">25 Lakh - 30
                                Lakh</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">30 Lakh - 35
                                Lakh</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Above 35
                                Lakh</a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="bodytype" role="tabpanel" aria-labelledby="nav-bodytype">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Backhoe Loader</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Compactor</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Excavator</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Telescopic Handler</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Wheel Loader</a>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="fueltype" role="tabpanel" aria-labelledby="nav-fueltype">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">LPG</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Electric</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">CNG</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="filterBlock-chips sectionShadow boldfont text-center" href="#">Diesel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont">View All <img src="assets/images/icons/linkarrow.png" alt="" /></a>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Second Hand Construction Item</h2>
        </div>
        <div class="usedTrckBlock tj-row">

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="<?php echo $site_url; ?>old-truck-listing.php">
                        <div class="usedTrckBlock-img">
                            <img src="assets/images/used/compactor.jpg" class="img-fluid" alt="" />
                            <span class="premiumTag">Premium</span>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#">
                                <p class="usedTrckBlock-title boldfont">Compactor</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 2,00,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt="" />
                                80,000</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt="" />
                                Aligarh</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt="" />
                                2018</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#">
                        <div class="usedTrckBlock-img">
                            <img src="assets/images/used/wheelloader1.jpg" class="img-fluid" alt="" />
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#">
                                <p class="usedTrckBlock-title boldfont">Wheel Loader</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 2,00,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt="" />
                                80,000</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt="" />
                                Aligarh</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt="" />
                                2018</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#">
                        <div class="usedTrckBlock-img">
                            <img src="assets/images/used/wheelloader2.jpg" class="img-fluid" alt="" />
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#">
                                <p class="usedTrckBlock-title boldfont">Wheel Loader</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 2,00,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt="" />
                                80,000</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt="" />
                                Aligarh</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt="" />
                                2018</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="usedTrckBlock-main tj-col">
                <div class="usedTrckBlock-inner sectionShadow">
                    <a href="#">
                        <div class="usedTrckBlock-img">
                            <img src="assets/images/used/wheelloader3.jpg" class="img-fluid" alt="" />
                            <span class="premiumTag">Premium</span>
                        </div>
                    </a>
                    <div class="usedTrckBlock-content">
                        <div class="usedTrckBlock-contentTop">
                            <a href="#">
                                <p class="usedTrckBlock-title boldfont">Wheel Loader</p>
                            </a>
                            <p class="usedTrckBlock-price">Price - ₹ 2,00,000</p>
                        </div>
                        <div class="usedTrckBlock-info">
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/meter.svg" alt="" />
                                80,000</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/location.svg" alt="" />
                                Aligarh</p>
                            <p><img class="usedTrckBlock-infoIcon" src="assets/images/icons/calendar.svg" alt="" />
                                2018</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont">View All Used Item <img src="assets/images/icons/linkarrow.png" alt="" /></a>
        </div>
    </div>
</section>

<section class="sectionpadding25 b-t-1">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Truck Comparison</h2>
        </div>
        <div class="compareBlock tj-row">

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/backhoeloader-3.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <img src="assets/images/backhoeloader-1.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#"> JCB Hydraulic Excavator MK1 vs
                        JCB Si-Draulic</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/compactor2.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <img src="assets/images/compactor4.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">JCB Hydraulic Excavator MK1 vs
                        JCB Si-Draulic</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/telescopichandler1.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <img src="assets/images/telescopichandler2.jpg" class="comparisonImg img-fluid" alt="" />
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">JCB Hydraulic Excavator MK1 vs
                        JCB Si-Draulic</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont">View All Item Comparison <img src="assets/images/icons/linkarrow.png"
                    alt="" /></a>
        </div>
    </div>
</section>

<section class="greybg newsBlock sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Latest Construction Updates</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-truck-news" data-toggle="tab" href="#truck-news" role="tab"
                        aria-controls="truck-news" aria-selected="true"> Construction News</a>
                    <a class="nav-link" id="nav-truck-videos" data-toggle="tab" href="#truck-videos" role="tab"
                        aria-controls="truck-videos" aria-selected="false">Construction Videos</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="truck-news" role="tabpanel" aria-labelledby="nav-truck-news">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <div class="newsBlock-img">
                                    <a href="#">
                                        <img src="assets/images/telescopichandler.jpg" class="img-fluid" alt="news" />
                                    </a>
                                </div>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <div class="newsBlock-img">
                                    <a href="#">
                                        <img src="assets/images/excavator-2.jpg" class="img-fluid" alt="news" />
                                    </a>
                                </div>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <div class="newsBlock-img">
                                    <a href="#">
                                        <img src="assets/images/compactor2.jpg" class="img-fluid" alt="news" />
                                    </a>
                                </div>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <div class="newsBlock-img">
                                    <a href="#">
                                        <img src="assets/images/compactor3.jpg" class="img-fluid" alt="news" />
                                    </a>
                                </div>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Construction News <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="truck-videos" role="tabpanel" aria-labelledby="nav-truck-videos">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <a href="#">
                                    <div class="newsBlock-img vdoImg">
                                        <img src="assets/images/telescopichandler.jpg" class="img-fluid" alt="news" />
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <a href="#">
                                    <div class="newsBlock-img vdoImg">
                                        <img src="assets/images/excavator-2.jpg" class="img-fluid" alt="news" />
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <a href="#">
                                    <div class="newsBlock-img vdoImg">
                                        <img src="assets/images/compactor2.jpg" class="img-fluid" alt="news" />
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="newsBlock-inner m-t-16 sectionShadow">
                                <a href="#">
                                    <div class="newsBlock-img vdoImg">
                                        <img src="assets/images/compactor3.jpg" class="img-fluid" alt="news" />
                                    </div>
                                </a>
                                <div class="newsBlock-content">
                                    <p class="newsBlock-info">
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/calendar.svg"
                                                alt="" /> 27 Mar 2020</span>
                                        <span><img class="newsBlock-infoIcon" src="assets/images/icons/clock.svg"
                                                alt="" /> 5.34</span>
                                    </p>
                                    <a href="#">
                                        <p class="newsBlock-title boldfont headingfont">JCB Master Loader:
                                            Key Highlights ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" class="boldfont">View All Construction Videos <img src="assets/images/icons/linkarrow.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding20">
    <div class="container-mid">
        <div class="ckeditorBlock">
            <div class="sectionHeading">
                <h2>Popular construction Searches</h2>
            </div>
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="bottomDetailBlock ckeditorBlock">
            <h3>Popular New construction</h3>
            <ul>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
            </ul>

            <h3>Popular Used construction</h3>
            <ul>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
                <li>
                    <a href="#">2020 RAM 1500 For Sale</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="sectionpadding25 b-t-1">
    <div class="container-mid">
        <div class="sectionHeading text-center">
            <h2>Tools For Help</h2>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="toolsBlock text-center tj-row">
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="https://trkcdn.tractorjunction.com/images/tools/about-us.svg" class="img-fluid"
                            alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="https://trkcdn.tractorjunction.com/images/tools/compare.svg" class="img-fluid"
                            alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="https://trkcdn.tractorjunction.com/images/tools/dealer.svg" class="img-fluid"
                            alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="https://trkcdn.tractorjunction.com/images/tools/loan.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="https://trkcdn.tractorjunction.com/images/tools/call-service.svg" class="img-fluid"
                            alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/sapre-parts.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/body-makers.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- newsletter -->
<!-- <div class="modal fade customModal" id="newsletter" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close sectionShadow text-center" data-dismiss="modal"
                aria-label="Close">
                <img src="./assets/images/icons/close.svg" alt="" />
            </a>
            <div class="customModal-header">
                <p class="modalHeading mb-1 text-uppercase boldfont">For any assistance related to the Truck</p>
                <p>Provide your contact details to get quick detail from Truck Junction</p>
            </div>
            <div class="customModal-body mt-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" placeholder="Enter Number" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select State</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <button class="fillBtn w-100">Submit</button>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                            target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- success popup -->
<!-- <div class="modal fade customModal successpopup" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close sectionShadow text-center" data-dismiss="modal"
                aria-label="Close">
                <img src="./assets/images/icons/close.svg" alt="" />
            </a>
            <div class="customModal-body">
                <svg class="checkmarkAnimation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmarkAnimation-circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmarkAnimation-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
            <div class="customModal-header text-center mt-3">
                <p class="modalHeading modalHeading-success text-uppercase boldfont">Thank you !</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever.</p>
                    <p class="mt-4 text-uppercase boldfont">Follow Truck Junction</p>
                <ul class="socialMedia customModal-socialMedia mt-2">
                    <li><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                    <li><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                    <li><img src="assets/images/icons/instagram.svg" alt="instagram"></li>
                    <li><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
                    <li><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->


<?php include('layouts/footer.php'); ?>

<script type="text/javascript">
$(window).on('load', function() {
    $('#newsletter').modal('show');
});
$(window).on('load', function() {
    setTimeout(function() {
        $('.successpopup').modal('show');
    }, 100);
});
</script>