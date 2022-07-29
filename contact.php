<?php
    $title = "Contact Us";
    include('layouts/header.php'); 
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><span>Contact Us</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">

        <div class="sectionHeading text-center">
            <h1>CONTACT INFRA JUNCTION</h1>
            <p>For any Query and Support Feel free to contact.</p>
        </div>

        <div class="row text-center">

            <div class="col-md-4">
                <div class="contactInfo sectionShadow mt-2 mb-2">
                    <div class="contactInfo-icon sectionShadow">
                        <img src="./assets/images/icons/location.svg" alt="" class="imgFilterInvert">
                    </div>
                    <div class="contactInfo-content">
                        <p class="boldfont text-uppercase headingfont mb-2">INFRA Junction</p>
                        <p class="mb-2">3rd Floor M M Tower, Agarsen Circle, Subhash Nagar Alwar, Rajasthan, 301001</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contactInfo sectionShadow mt-2 mb-2">
                    <div class="contactInfo-icon sectionShadow">
                        <img src="./assets/images/icons/phone.svg" alt="" class="imgFilterInvert">
                    </div>
                    <div class="contactInfo-content">
                        <p class="boldfont text-uppercase headingfont mb-2">Contact Us</p>
                        <p class="mb-2">Have doubts? Just contact us.</p>
                        <p class="mb-0"><strong>+91-9770-974-974</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contactInfo sectionShadow mt-2 mb-2">
                    <div class="contactInfo-icon sectionShadow">
                        <img src="./assets/images/icons/mail.svg" alt="" class="imgFilterInvert">
                    </div>
                    <div class="contactInfo-content">
                        <p class="boldfont text-uppercase headingfont mb-2">Mail Us</p>
                        <p class="mb-2">Be in touch with us by dropping mail.</p>
                        <p class="mb-0"><strong>tractorjunction@gmail.com</strong></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25 formBlock-bg">
    <div class="container-mid">
        <div class="sectionHeading text-center">
            <h2>Fill out the simple form and we will contact you</h2>
            <p class="mb-4">Feel free to contact on mail.</p>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <form class="formBlock sectionShadow">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Name</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Number</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Email</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" required></textarea>
                            <label class="mb-0 form-control-placeholder">Message</label>
                        </div>
                    </div>
                    <a data-toggle="modal" data-target="#aadharconfirm" href="javascript:void(0);"
                        class="text-center fillBtn w-100">Submit Request</a>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="gMap whitebg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1768.435534825797!2d76.62545586494288!3d27.566511586270867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397299be8b4ecf9d%3A0xc03c200ad1b86543!2sTractor%20Junction!5e0!3m2!1sen!2sin!4v1579776625819!5m2!1sen!2sin"
                        allowfullscreen="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>