<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php  include('include/link.php') ?>
</head>
<body>
<?php  include('include/header.php') ?>

    <!-- breadcrumb-area start -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <img src="assets/images/product-image/contact.jpg" class="img-responsive contact-img" >
            
        </div>
    </div>
</div>
   
    <!-- breadcrumb-area end -->

    <!-- Contact Area Start -->
    <div class="contact-area pt-100px pb-100px">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <span class="sub-title">Get In Touch</span>
                            <h4 class="heading">Visit One Of Our Shop
                                Contact Us Now</h4>
                            <div class="single-contact">
                                <div class="icon-box">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Phone:</h5>
                                    <p><a href="tel:+917069070696">+917069070696</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email:</h5>
                                    <p><a href="legacaysteelindia@gmail.com">legacaysteelindia@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Address:</h5>
                                    <p>3-Sahjanand indrustry area , b/h murlidhar way bridge,n/h-27 Rajkot Gujrat</p>
                                </div>
                            </div>
                            <!--commented area>
                            <ul class="social">
                                <li class="m-0">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                            </ul> 
                            !-->

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title" data-aos="fade-up" data-aos-delay="200">Leave a Message</h2>
                                <p>To reach us Send a Message. </p>
                            </div>

                            <div class="form-shuvo">
                                <form class="contact-form-style wow fadeInLeft default-form-group" id="reused_form" action="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group default-form-group-single-item border-dark-gray">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group default-form-group-single-item border-dark-gray">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group default-form-group-single-item border-dark-gray">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group default-form-group-single-item border-dark-gray">
                                                <textarea name="comments" id="comments" rows="8" class="form-control" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center form-group submit-btn mt-3">
                                            <button type="submit" class="btn btn-primary mt-4"> <span> Send Now <i class="icofont-double-right"></i></span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="success_message" style="display:none; " class="col-md-12 text-success">
                                <h3>Your message submit successfully!</h3>
                            </div>
                            <div id="error_message" style="display:none; " class="col-md-12">
                                <h3>Error</h3> Sorry there was an error sending your form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- map Area Start -->

    <div class="contact-map">
        <div id="mapid">
            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d102260.72140882698!2d70.75625081158122!3d22.27420021554636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s3-Sahjanand%20indrustry%20area%20%2C%20b%2Fh%20murlidhar%20way%20bridge%2Cn%2Fh-27%20Rajkot%20Gujrat.!5e0!3m2!1sen!2sin!4v1633086884018!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> <frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- map Area End -->

   








<?php  include('include/footer.php') ?>
    
</body>
</html>