<?php
    $title = "Loan";
    include('layouts/header.php'); 
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><span>Truck Loan</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding25 formBlock-bg">
    <div class="container-mid">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="sectionHeading text-center">
                    <h1>Get Exclusive Loan Offers</h1>
                    <p>The most comprehensive truck comparison tool in India.</p>
                </div>
                <form class="formBlock sectionShadow">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Name</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Number</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select State</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label class="mb-0 form-control-placeholder">State</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label class="mb-0 form-control-placeholder">City</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select Amount</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label class="mb-0 form-control-placeholder">Loan Amount</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="checkbox-custom">Loan for New Trucks
                                <input type="radio" name="loantype">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="checkbox-custom">Loan for Old Trucks
                                <input type="radio" name="loantype">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <a data-toggle="modal" data-target="#aadharconfirm" href="javascript:void(0);"
                        class="text-center fillBtn w-100">Submit Request</a>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                            target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
                </form>
            </div>
            <!-- <div class="col-lg-5">
                <img class="img-fluid" src="./assets/images/banners/loan.jpg" alt="">
            </div> -->
        </div>
    </div>
</section>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Truck Brands</h2>
        </div>
        <div class="row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="">
                        <p>Ashok Leyland</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="">
                        <p>Bharat Benz</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/eicher.png" class="img-fluid" alt="">
                        <p>Eicher</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="">
                        <p>Mahindra</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="">
                        <p>Piaggio</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/tata.png" class="img-fluid" alt="">
                        <p>TATA</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="">
                        <p>Ashok Leyland</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="">
                        <p>Bharat Benz</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/eicher.png" class="img-fluid" alt="">
                        <p>Eicher</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="">
                        <p>Mahindra</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="">
                        <p>Piaggio</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/tata.png" class="img-fluid" alt="">
                        <p>TATA</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="viewall mt-1">
            <a href="#" class="boldfont">View All Truck News <img src="assets/images/icons/linkarrow.png" alt=""></a>
        </div>
    </div>
</section>

<section class="sectionpadding20">
    <div class="container-mid">
        <div class="ckeditorBlock">
            <div class="sectionHeading">
                <h2>Popular Truck Searches</h2>
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
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
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
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
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
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
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
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- loan popup -->
<div class="modal fade customModal" id="aadharconfirm" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close sectionShadow text-center" data-dismiss="modal"
                aria-label="Close">
                <img src="./assets/images/icons/close.svg" alt="" />
            </a>
            <div class="customModal-header">
                <p class="modalHeading mb-1 text-uppercase boldfont">Thank you for contacting us !</p>
                <p>Your request has neen submitted successfully.</p>
            </div>
            <div class="customModal-body">
                <div class="uploadImgBlock-popup pl-0 pr-0 mt-2">
                    <div class="row">

                        <div class="col-6">
                            <label for="fileField1" class="mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions aadharFront"></div>
                                </div>
                                <input name="file" type="file" id="fileField1">
                            </label>
                        </div>

                        <div class="col-6">
                            <label for="fileField2" class="mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions aadharBack"></div>
                                </div>
                                <input name="file" type="file" id="fileField2">
                            </label>
                        </div>

                    </div>
                </div>
                <p class="fs-12 text-center mt-1">(Note: For better service please upload your aadhar image.)</p>
                <button class="fillBtn w-100 mt-3">Upload Image</button>
                <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                        target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
            </div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>