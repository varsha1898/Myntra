<?php
include_once('header.php');
?>

<!-- page details -->
<div class="breadcrumb-agile bg-powderblue py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
</div>
<!-- //page details -->

<!-- contact -->
<section class="ab-info-main py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">Contact <span>Us</span></h3>
            
        </div>
        <div class="row contact-agileinfo pt-lg-4">
            <!-- contact address -->
            <div class="col-md-5 address">
                <h3 class="footer-title mb-4 pb-lg-2">Our Address</h3>
                <div class="row address-info-w3ls">
                    <div class="col-3 address-left">
                        <img src="images/c1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-9 address-right mt-2">
                        <h5 class="address mb-2">Address</h5>
                        <p> Address : Buildings Alyssa,
							Begonia and Clover situated in Embassy Tech Village,
							Outer Ring Road,
							Devarabeesanahalli Village,
							Varthur Hobli,
							Bengaluru – 560103, India</p>
                    </div>
                </div>
                
                <div class="row address-info-w3ls">
                    <div class="col-3 address-left">
                        <img src="images/c3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-9 address-right mt-2">
                        <h5 class="address mb-2">Phone</h5>
                        <p>+91-80-61561999</p>
                    </div>
                </div>
            </div>
            <!-- //contact address -->
            <!-- contact form -->
            <div class="col-lg-7 contact-right mt-lg-0 mt-5">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6 form-group pr-lg-2">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="col-lg-6 form-group pl-lg-2">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Phone" placeholder="Phone" required="">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
                    </div>
                    <button type="submit" class="btn submit-contact-main ml-auto">Submit</button>
                </form>
            </div>
            <!-- contact form -->
        </div>
    </div>
</section>
<!-- contact -->
<!-- map -->
<section class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15553.790719091643!2d77.6986567!3d12.9431803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f329a80362e0998!2sMyntra%20Designs%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1669308460762!5m2!1sen!2sin"
     width="600" height="100" style="border:0;"
     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- //map -->
<?php
include_once('footer.php');
?>