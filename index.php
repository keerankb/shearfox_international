<!DOCTYPE html>
<html lang="en">

<!-- dustech/  13 Nov 2019 12:52:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> Shearfox International </title>
    
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

<?php include 'header.php'; ?>



<style>
    
    .swiper-container .overlay {
          position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}
    }
    .swiper-container video {
        position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: 100px;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
    }
@media screen and (max-width: 991px) {
    .swiper-container video {
        display: none;
    }
}

/*
    .swiper-wrapper .container .slide-title {
        position: absolute;
        z-index: 999;
        top: -1000px;
    }*/

    .swiper-wrapper {
            position:absolute;
    left:30px;
    bottom:40px;
    z-index:10;

    }
    @media screen and (min-width: 767px) and (max-width: 991px) {
        .swiper-container {
        /*background-image: url(assets/images/slider/slide-1.jpg);*/
        /*max-width: 500px;*/
        /*height: 100px;*/
        background-image: url(assets/images/slider/sample-slide.jpg);
        }
    }
    @media screen and (max-width: 766px) {
        .swiper-container {
            background-image: url(assets/images/slider/sample-slide-2.jpg);
        }
    }
</style>


        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="assets/images/slider/video1.mp4" type="video/mp4">
                </video>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>The Best Move you will Ever Make</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="services.php" class="theme-btn">Our services</a> 
                                    <a href="about.php" class="theme-btn-s2">More about us</a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <!-- <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>The Best Move you will Ever Make</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="services.php" class="theme-btn">Our services</a> 
                                    <a href="about.php" class="theme-btn-s2">More about us</a> 
                                </div>
                            </div>
                        </div> 
                    </div>  -->
                </div>
                <!-- end swiper-wrapper -->


                <div class="left-title">manufacturers</div>
        
                <div class="container">
                    <!-- Social Box -->
                    <div class="social-box">
                        <a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.twitter.com"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.instagram.com"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.linkedin.com"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <!--Scroll Dwwn Btn-->
                <div class="mouse-btn-down scroll-to-target" data-target=".welcome-section"></div>
                <!-- swipper controls -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- <div class="swiper-button-next"></div> -->
                    <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </section>
        <!-- end of hero slider -->






<section class="welcome-section">
        <div class="container">
            <div class="row clearfix">
            
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="assets/images/team/img-5.jpg" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <span>About Us</span>
                            </div>
                            <h2>Welcome to <br> Shearfox International</h2>
                        </div>
                        <div class="text">Our company has many Years of experience and specializes in manufacturing, salling, serviceing and reparing cardan shafts (cardans) for various vehicies technological equipment,Tractors, Special machinery and agricultural machinery of various domestic and foreign manfacturess fot more infromation please click the button.We inform our upcoming work.</div>
                        <a href="about.php" class="theme-btn btn-style-three">About More</a>
                        
                        <!-- Counter Box -->
                        <div class="counter-box">
                            
                            <div class="fact-counter">
                                <div class="row clearfix">
                                
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                                            <div class="count-outer count-box counted">
                                                <h4 class="counter-title">Projects</h4>
                                                <span class="count-text" data-speed="3000" data-stop="1200">1200</span>+
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                                            <div class="count-outer count-box counted">
                                                <h4 class="counter-title">Happy Clients</h4>
                                                <span class="count-text" data-speed="2500" data-stop="800">800</span>+
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="900ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInLeft;">
                                            <div class="count-outer count-box counted">
                                                <h4 class="counter-title">Satisfaction</h4>
                                                <span class="count-text" data-speed="2000" data-stop="99">99</span>+
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>











<!-- service-section -->
    <section class="service-section-index">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Services</span>
                <h1>Our Manufacturing Capabilities</h1>
                <p>Our experienced staff, combined with our global network, allow us to provide the<br />support you need</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/service-1.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><img src="assets/images/icons/industry-icon.png"></div>
                                <h3><a href="cnc-machining.php">CNC <br> MACHINING</a></h3>
                                <div class="text">3,4,5 axis CNC milling, <br> CNC turning and post-processing <br> services</div>
                                <div class="link-btn"><a href="cnc-machining.php">Go Continues<i class="fa fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><img src="assets/images/icons/oil-icon.png"></div>
                                <h3><a href="sheet-metal-fabrication.php">SHEET METAL FABRICATION</a></h3>
                                <div class="text">Laser cutting, CNC punching, Waterjet cutting, Plasma cutting, bending, welding</div>
                                <div class="link-btn"><a href="sheet-metal-fabrication.php">Go Continues<i class="fa fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><img src="assets/images/icons/battery.png"></div>
                                <h3><a href="3d-printing.php">Power & Energy</a></h3>
                                <div class="text">Petroleum refiners, fuel transport and end-user sales at gas stations. the gas industry, including natural</div>
                                <div class="link-btn"><a href="3d-printing.php">Go Continues<i class="fa fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><img src="assets/images/icons/production.png"></div>
                                <h3><a href="injection-molding.php">INJECTION MOLDING</a></h3>
                                <div class="text">Rapid tooling, production tooling, family molds, multi-cavity molds, over-molding</div>
                                <div class="link-btn"><a href="injection-molding.php">Go Continues<i class="fa fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->




        <!-- start why-choose-section -->
        <section class="why-choose-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <span>Our Features</span>
                            <h2>Why Choose Us!</h2>
                            <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="why-choose-grids clearfix">
                            <div class="grid">
                                <i class="fi flaticon-network-1"></i>
                                <h3>Professional Team</h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-circular-label-with-certified-stamp"></i>
                                <h3>Certified engineers</h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-chip"></i>
                                <h3>Latest Technology</h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-24-hours"></i>
                                <h3>27/7 Support</h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end why-choose-section -->

















<!-- start partners-section -->
        <!-- <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-5.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end partners-section -->



        <!-- start fun-fact-section -->
        <!-- <section class="fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-worker"></i>
                                    <h3><span class="odometer" data-count="1200">00</span></h3>
                                    <p>Employed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-engineer"></i>
                                    <h3><span class="odometer" data-count="1500">00</span></h3>
                                    <p>Project Completed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-trophy"></i>
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>Award Won</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-like-1"></i>
                                    <h3><span class="odometer" data-count="100">00</span>%</h3>
                                    <p>Satisfied customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end fun-fact-section -->



    <!-- service-style-four -->
    <section class="service-style-four text-center">
        <div class="container">
            <div class="title-box">
                <div class="top-text">We’re Offering</div>
                <h1>All you need is Quality Parts, Fast and Hassle-free</h1>
                <!-- <h3>We are proud to welcome you to our new Global International Sewing Machines ebsite.We have decided to categorize our machine models into various industries</h3> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-font-awesome"></i></div>
                            <h3><a href="">Digital Online Manufacturing</a></h3>
                            <div class="text">Upload CAD files, select processing, and we will handle everything else in a cost-effective and efficient way. Every step of manufacturing process is transparent and synchronized in real-time, you can track your order at any time you want.</div><br><br>
                            <!-- <div class="btn-box"><a href="#">Explore</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-suitcase"></i></div>
                            <h3><a href="">Strong Engineering Support</a></h3>
                            <div class="text">The engineering team of 150 technicians is always ready to support you on everything. From material or design advice at early-stage prototyping to technical reminders for manufacturing, all the way to end-use production.</div><br><br>
                            <!-- <div class="btn-box"><a href="#">Explore</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-university"></i></div>
                            <h3><a href="">Guaranteed High Quality</a></h3>
                            <div class="text">Quality comes first at RapidDirect. We provide full dimensional report and SGS, RoHS material certifications on our customers' request. Moreover, First Part Verification Program is available for CNC machining and injection molding services. And eventually, you can always enjoy our Return & refund policy.</div>
                            <!-- <div class="btn-box"><a href="#">Explore</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-four end -->


        <!-- start service-section-s2 -->
       <!--  <section class="service-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>Industry Solutions</span>
                            <h2>Our Manufacturing Capabilities</h2>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="title-text">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids clearfix wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="grid wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img src="assets/images/services/img-1.jpg" alt>
                                <h4><a href="#">CNC MACHINING</a></h4>
                                <p>3,4,5 axis CNC milling, CNC turning & post-processing services</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="grid wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img src="assets/images/services/img-2.jpg" alt>
                                <h4><a href="#">SHEET METAL FABRICATION</a></h4>
                                <p>Laser cutting, CNC punching, Waterjet cutting, Plasma cutting, bending, welding</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="grid wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img src="assets/images/services/img-3.jpg" alt>
                                <h4><a href="#">INJECTION MOLDING</a></h4>
                                <p>Rapid tooling, production tooling, family molds, multi-cavity molds, over-molding</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="grid">
                                <img src="assets/images/services/img-4.jpg" alt>
                                <h4><a href="#">3D PRINTING</a></h4>
                                <p>FDM, SLA, Polyjet, SLS</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="grid">
                                <img src="assets/images/services/img-5.jpg" alt>
                                <h4><a href="#">Painting & Protective</a></h4>
                                <p> Samsa was a travelling salesman and above it there hung a picture that he had recently</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="grid">
                                <img src="assets/images/services/img-6.jpg" alt>
                                <h4><a href="#">Electrical & Power</a></h4>
                                <p> Samsa was a travelling salesman and above it there hung a picture that he had recently</p>
                                <a href="#" class="read-more">Learn More <i class="fi flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section> -->
        <!-- end service-section-s2 -->



        <!-- start testimonials-section -->
    <!--    <section class="testimonials-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3">
                        <div class="section-title-s4">
                            <span>Testimonials</span>
                            <h2>What People say’s About us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        <div class="testimonial-left-img-holder">
                            <img src="assets/images/testimonials/man.png" alt>
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="testimonial-grids testimonial-slider clearfix">
                            <div class="grid">
                                <div class="quote">
                                    <i class="fi flaticon-quote"></i>
                                    <p>“Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look ”</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="assets/images/testimonials/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Michel jhon</h5>
                                        <p>Manager of Automation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="quote">
                                    <i class="fi flaticon-quote"></i>
                                    <p>“Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look ”</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="assets/images/testimonials/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Alaska</h5>
                                        <p>Business Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="quote">
                                    <i class="fi flaticon-quote"></i>
                                    <p>“Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look ”</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="assets/images/testimonials/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Shain on</h5>
                                        <p>Manager of Automation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section> -->
        <!-- end testimonials-section -->



    <!-- Project Section -->
    <section class="project-section-current">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title-inner">
                    <span>About Us</span>
                </div>
                <h2>Ongoing Projects</h2>
            </div>
            
            <div class="owl-carousel">
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img src="assets/images/resource/project-1.jpg" alt="test"/>
            </div>
            <div class="back face center">
                <h3> Project 1 </h3>
                <p>Description Here.</p>
            </div>
        </div>
    </div>
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img src="assets/images/resource/project-2.jpg" alt="test"/>
            </div>
            <div class="back face center">
                <h3> Project 2 </h3>
                <p>Description Here.</p>
            </div>
        </div>
    </div>
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img src="assets/images/resource/project-3.jpg" alt="test"/>
            </div>
            <div class="back face center">
                <h3> Project 3 </h3>
                <p>Description Here.</p>
            </div>
        </div>
    </div>
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img src="assets/images/resource/project-4.jpg" alt="test"/>
            </div>
            <div class="back face center">
                <h3> Project 4 </h3>
                <p>Description Here.</p>
            </div>
        </div>
    </div>
    <div id="f1_container">
        <div id="f1_card" class="shadow">
            <div class="front face">
                <img src="assets/images/resource/project-2.jpg" alt="test"/>
            </div>
            <div class="back face center">
                <h3> Project 5 </h3>
                <p>Description Here.</p>
            </div>
        </div>
    </div>
</div>



        </div>
    </section>
    <!-- End Project Section -->





<!-- project-section -->
    <section class="project-section">
        <div class="container">
            <div class="sec-title text-center">
                <span>Our Path</span>
                <h1>From Prototype to Production</h1>
                <p>Our experienced staff, combined with our global network, allow us to provide the<br />support you need</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <!-- <figure class="image"><img src="images/gallery/project-1.jpg" alt=""></figure> -->
                                <!-- <a href="assets/images/resource/service-1.jpg" class="lightbox-image" data-fancybox='gallery'><i class="flaticon-add"></i></a> -->
                            </div>
                            <div class="lower-content">
                                <div class="count-number">01</div>
                                <h3>ID/MD Design</h3>
                                <div class="text">Our team of experts provides support throughout the ID/MD design process, offering outside-the-box solutions.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <!-- <figure class="image"><img src="images/gallery/project-2.jpg" alt=""></figure> -->
                                <!-- <a href="images/gallery/project-2.jpg" class="lightbox-image" data-fancybox='gallery'><i class="flaticon-add"></i></a> -->
                            </div>
                            <div class="lower-content">
                                <div class="count-number">02</div>
                                <h3>Prototyping</h3>
                                <div class="text">Our services can fulfil a broad range of prototyping applications as well as low-volume manufacturing. All with consistent cost-effective price and short lead-time.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <!-- <figure class="image"><img src="images/gallery/project-3.jpg" alt=""></figure> -->
                                <!-- <a href="images/gallery/project-3.jpg" class="lightbox-image" data-fancybox='gallery'><i class="flaticon-add"></i></a> -->
                            </div>
                            <div class="lower-content">
                                <div class="count-number">03</div>
                                <h3>Structural Optimization</h3>
                                <div class="text">Our team of experts offers guidance and know-how for achieving structural optimization for any given projects.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                    <div class="project-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <!-- <figure class="image"><img src="images/gallery/project-4.jpg" alt=""></figure> -->
                                <!-- <a href="images/gallery/project-4.jpg" class="lightbox-image" data-fancybox='gallery'><i class="flaticon-add"></i></a> -->
                            </div>
                            <div class="lower-content">
                                <div class="count-number">04</div>
                                <h3>Mass Production</h3>
                                <div class="text">Beyond prototyping and low-volume production, we also offer mass production services including laser cutting, extrusion, water jet, die casting, etc.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->







        <!-- start featured-project-section -->
<!--         <section class="featured-project-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Featured Projects</span>
                            <h2>From Prototype to Production</h2>
                            <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="project-grids clearfix">
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">01.</span>
                            <h3>ID/MD Design</h3>
                            <p>Our team of experts provides support throughout the ID/MD design process, offering outside-the-box solutions.</p>
                            <a href="#" class="theme-btn">Read More</a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">02.</span>
                            <h3>Prototyping</h3>
                            <p>Our services can fulfil a broad range of prototyping applications as well as low-volume manufacturing. All with consistent cost-effective price and short lead-time.</p>
                            <a href="#" class="theme-btn">Read More</a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">03.</span>
                            <h3>Structural Optimization</h3>
                            <p>Our team of experts offers guidance and know-how for achieving structural optimization for any given projects.</p>
                            <a href="#" class="theme-btn">Read More</a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">04.</span>
                            <h3>Mass Production</h3>
                            <p>Beyond prototyping and low-volume production, we also offer mass production services including laser cutting, extrusion, water jet, die casting, etc.</p>
                            <a href="#" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end featured-project-section -->


        





        <!-- start team-section -->
<!--        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Our Team</span>
                            <h2>Dedicated Team</h2>
                            <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/img-1.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Michel Jhon</h3>
                                    <span>Mechanical Engineering</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/img-2.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Wilium Mice</h3>
                                    <span>Site Manager</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/img-3.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Jonthon teat</h3>
                                    <span>Testing Manager</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/img-4.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Shown kel</h3>
                                    <span>Cheif Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section> -->
        <!-- end team-section -->






        <!-- start featured-project-section -->
        <section class="featured-project-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Featured Projects</span>
                            <h2>Explore What We've Done</h2>
                            <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="project-grids clearfix">
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">01.</span>
                            <h3>Welding Processing</h3>
                            <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
                            <!-- <a href="#" class="theme-btn">Read More</a> -->
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">02.</span>
                            <h3>Materials project</h3>
                            <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
                            <!-- <a href="#" class="theme-btn">Read More</a> -->
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">03.</span>
                            <h3>Oil & Gas project</h3>
                            <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
                            <!-- <a href="#" class="theme-btn">Read More</a> -->
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <span class="count">04.</span>
                            <h3>Power Energy project</h3>
                            <p>Travelling salesman and above it there hung a picture that he had recently cut out</p>
                            <!-- <a href="#" class="theme-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end featured-project-section -->




<!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Insight and Trends</span>
                            <h2>Industrial News</h2>
                            <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him</p>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-1.jpg" alt>
                                </div>
                                <div class="entry-body">
                                    <div class="cats">Industry, Factory</div>
                                    <h4><a href="#">Manufacturing is a sector that is constantly evolving</a></h4>
                                    <p class="date">Oct 26 2019</p>
                                    <a href="" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-2.jpg" alt>
                                </div>
                                <div class="entry-body">
                                    <div class="cats">Industry, Factory</div>
                                    <h4><a href="#">It’s a surefire way to keep abreast of the competition and sometimes</a></h4>
                                    <p class="date">Oct 26 2019</p>
                                    <a href="" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-3.jpg" alt>
                                </div>
                                <div class="entry-body">
                                    <div class="cats">Industry, Factory</div>
                                    <h4><a href="#">Community would not exist if it were not for manufacturing being</a></h4>
                                    <p class="date">Oct 26 2019</p>
                                    <a href="" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div> 
        </section>
        <!-- end blog-section -->





        <!-- start quote-section -->
        <section class="quote-section">
            <div class="content-area clearfix">
                <div class="left-col">
                    <h2>Imagination What we can easily see is only a small</h2>
                    <div class="details">
                        <p>It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered </p>
                        <div class="clearfix">
                            <ul>
                                <li><i class="ti-check"></i> Cut out of an illustrated magazine</li>
                                <li><i class="ti-check"></i> Showed a lady fitted out</li>
                            </ul>
                            <ul>
                                <li><i class="ti-check"></i> Raising a heavy fur muff</li>
                                <li><i class="ti-check"></i> Magazine and housed in a nice</li>
                            </ul>
                        </div>
                        <div class="btns">
                            <a href="services.php" class="theme-btn">Our Services</a>
                            <a href="contact.php" class="theme-btn-s3">Contact with us</a>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <div class="quote-area">
                        <h3>Request A Quote</h3>
                        <p>Lower arm towards the viewer. Gregor then turned to look out the window</p>
                        <form method="post" class="contact-validation-active" id="contact-quote-form">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Get a quote</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end quote-section -->


        


        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <div class="cta-text">
                            <h3>Lets Get in Touch!</h3>
                            <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-lg-offset-1 col-md-6">
                        <div class="contact-info">
                            <div>
                                <i class="fi flaticon-call"></i>
                                <h4>Call us</h4>
                                <p>+654894754</p>
                            </div>
                            <div>
                                <i class="fi flaticon-contact"></i>
                                <h4>Email us</h4>
                                <p>demo@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->


<?php include 'footer.php'; ?>


    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    
        // Control the spinning gears
        $(document).ready(function() 
        {    
            var height = $(document).height();
            
            $(document).scroll(function() 
            {
            // Are we moving up or down?
                curScrollPos = $(document).scrollTop();
                degrees = curScrollPos/height * 360; //multiply by 360, hopefully we get full 360 rotation      
                neg = 360 - degrees;
        
                $('#cog1').css('transform', 'rotate(' + degrees + 'deg)');
            });
        });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            center: true,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:5,
                    nav:true
                }
            }
        })
    })
</script>
    

</body>
</html>
