
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Conceptly, Responsive, Business Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('css/img/logozill.jpg') }}" type="image/x-icon" />
    <title>Zill PhotoGrapher</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Start: Preloader
    ============================= -->

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- End: Preloader
    ============================= -->

    <!-- Start: Header Top
    ============================= -->
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                    <ul class="header-info d-inline-block">
                        <li><a href="#"><i class="fas fa-phone"></i>0987 99 2563</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>zillphotographer@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                    <ul class="header-social d-inline-block">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= -->

    <!-- Start: Search
    ============================= -->

    <div id="search">
        <a href="#" id="close-btn">
        <i class="fa fa-times"></i>
        </a>
        <div>
            <input placeholder="type here" id="searchbox" type="search" />
            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
        </div>
    </div>

    <!-- End: Search
    ============================= -->

    <!-- Start: Navigation
    ============================= -->
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="index.html"><img class="responsive" src="css/img/logozill.jpg" alt="Startkit" style="height: 103px ; width: 103px"></a> 
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li class="active">
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="service.html">Services</a>
                                </li>
                                <li class="c-dropdowns">
                                    <a href="">Portfolio</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="portfolio-2-column.html">Portfolio 2 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-column.html">Portfolio 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-column.html">Portfolio 4 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-masonary.html">Portfolio Masonry</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="c-dropdowns">
                                    <a href="">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="about-us.html">About</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="service.html">Services</a>
                                        </li>
                                        <li>
                                            <a href="">Other Pages</a>
                                            <ul class="cr-sub-dropdown-menu">
                                                <li>
                                                    <a href="404.html">404 Page</a>
                                                </li>
                                                <li>
                                                    <a href="coming-soon.html">Coming Soon</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="c-dropdowns">
                                    <a href="">Blog</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-full-width.html">Blog Full Width</a>
                                        </li>
                                        <li>
                                            <a href="blog-masonary.html">Blog Masonary</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- <ul class="header-right-bar d-lg-inline-block d-none">
                            <li class="search-button">
                                <a class="" href="#search"><i class="fas fa-search"></i></a>
                            </li>
                            <li>
                                <a class="quote-btn boxed-btn" href="#">Get a Quote</a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-lg-2 col-6 text-right">
                        <div class="search-icon"><a class="" href="#search"><i class="fas fa-search"></i></a></div>
                        <div class="cart-icon">
                            <!-- <div class="cart-icon-wrapper">                                
                                <i class="fas fa-shopping-basket"></i>
                                <span class="cart-count">2</span>
                                <h6>Shopping Cart</h6>
                                <p>0 item - $0.00</p>
                            </div> -->
                            
                            <div class="header-cart-box-wrapper cart-position-style1">
                                <div class="single-cart-box">
                                    <div class="cart-image">
                                        <a href="cart.html"><img src="https://dummyimage.com/75x85/232323/fff" alt="" />
                                        </a>
                                    </div>
                                    <div class="cart-content">
                                        <div class="cart-heading">
                                            <a href="cart.html"> <span class="cart-qty">2 x</span> Wordpress theme</a>
                                        </div>                                        
                                        <div class="cart-price">$200.00</div>
                                    </div>
                                    <div class="cart-remove deft-remove-icon">
                                        <a href="#"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="single-cart-box">
                                    <div class="cart-image">
                                        <a href="cart.html"><img src="https://dummyimage.com/75x85/232323/fff" alt="" />
                                        </a>
                                    </div>
                                    <div class="cart-content">
                                        <div class="cart-heading">
                                            <a href="cart.html"> <span class="cart-qty">2 x</span> Wordpress theme</a>
                                        </div>
                                        <div class="cart-price">$200.00</div>
                                    </div>
                                    <div class="cart-remove deft-remove-icon">
                                        <a href="#"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>


                                <div class="cart-subtotal">
                                    <span class="subttl-text">Grand total</span>
                                    <span class="subttl-amt">$465.00</span>
                                </div>

                                <div class="cart-checkout-btn">
                                    <a href="checkout.html" class="boxed-btn">Check out <i class="checkout-dir-icon fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li class="active">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="service.html">Services</a>
                                        </li>
                                        <li class="c-dropdowns">
                                            <a href="">Portfolio</a>
                                            <ul class="cr-dropdown-menu">
                                                <li>
                                                    <a href="portfolio-2-column.html">Portfolio 2 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-3-column.html">Portfolio 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-4-column.html">Portfolio 4 Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-masonary.html">Portfolio Masonry</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="c-dropdowns">
                                            <a href="">Pages</a>
                                            <ul class="cr-dropdown-menu">
                                                <li>
                                                    <a href="about-us.html">About</a>
                                                </li>
                                                <li>
                                                    <a href="gallery.html">Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="pricing.html">Pricing</a>
                                                </li>
                                                <li>
                                                    <a href="service.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="">Other Pages</a>
                                                    <ul class="cr-sub-dropdown-menu">
                                                        <li>
                                                            <a href="404.html">404 Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="coming-soon.html">Coming Soon</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        
                                        <li class="c-dropdowns">
                                            <a href="">Blog</a>
                                            <ul class="cr-dropdown-menu">
                                                <li>
                                                    <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-full-width.html">Blog Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="blog-masonary.html">Blog Masonary</a>
                                                </li>
                                                <li>
                                                    <a href="blog-single.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>        
    </section>
    <!-- End: Navigation
    ============================= -->


    <!-- Start: Header Slider
    ============================= -->
    <header>
        <div class="row">
            <div class="col-md-12">
                <div class="header-slider">
                    <div class="header-single-slider">
                        <figure>
                            <img src="css/img/web/background.jpg" alt="">
                            <!-- <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                        <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption> -->
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="css/img/web/background.jpg" alt="">
                            <!-- <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-center">
                                        <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption> -->
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="css/img/web/background.jpg" alt="">
                            <!-- <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-right">
                                        <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption> -->
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End: Header Slider
    ============================= -->


    <!-- Start: Contact
    ============================= -->
    <!-- <section id="contact">
        <div class="container contact-wrapper text-center text-lg-left">
            <div class="">
                <div class="row">
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img src="css/img/icons/icon01.png" alt="">
                        <p><b>10/45 Beer Street Heaven,</b><br>California Floor, USA 1208</p>
                    </div>
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img class="pt-2" src="css/img/icons/icon02.png" alt="">
                        <p><b>+001-2156-2459</b><br>example@mail.com</p>
                    </div>
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img src="css/img/icons/icon03.png" alt="">
                        <p><b>Free Delivery</b><br>On order over $57.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End: Contact
    ============================= -->


    <!-- Start: Service
    ============================= -->
    <section id="our-service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Our Services <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="service-box">                        
                        <figure>
                            <img src="css/img/service/service01.jpg" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-cubes"></i>
                                    </div>
                                    <h3>Design<br> and Developing </h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-4 mb-md-0">
                    <div class="service-box">                        
                        <figure>
                            <img src="css/img/service/service02.jpg" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h3>Designer <br> Creative Team</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 col-sm-12">
                    <div class="service-box">                        
                        <figure>
                            <img src="css/img/service/service03.jpg" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h3>Designer <br> Fast Support</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Service
    ============================= -->


     <!-- Start: Our Features
    ============================= -->
    <!-- <section id="ourfeatures" class="section-padding">
        <div class="container">            
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Our Features <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon01.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon02.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Sustainability</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon03.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Performance</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon04.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Organization</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon05.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Saving Strategy</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon06.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon01.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon02.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="css/img/features-icon/features-icon03.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 more-load">
                     Load More Content Button  -->
                    <!-- <a class="load-btn boxed-btn" href="#" id="feature-load-pro"><span id="feature-ti-port-load" class="ti-port-load-hide"></span>Load More <i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </section> --> -->
    <!-- End: Our Features
    ============================= -->



    <!-- Start: Latest Projects
    ============================= -->

    <section id="portfolio" class="section-padding-top project-masonary portfolio-page">
        <div class="container">

            <div class="row project-tab">
                <div class="col-md-12">
                    <ul class="project-tab-sorting sorting-btn" id="filter">
                        <li><a href="#" data-group="Show All" class="active"><i class="fas fa-align-justify"></i>All Business</a></li>
                        <li><a href="#" data-group="Branding"><i class="fab fa-renren"></i>Corporate</a></li>
                        <li><a href="#" data-group="Web"><i class="fab fa-codepen"></i>Insurance</a></li>
                        <li><a href="#" data-group="Creative"><i class="fab fa-joget"></i>Agency</a></li>
                        <li><a href="#" data-group="More"><i class="fas fa-euro-sign"></i>Finance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row project" id="grid">
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding", "Web", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-01.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                    <img src="assets/img/portfolio-2/portfolio-2-01.jpg" alt="">
                                    <figcaption>
                                        <div class="inner-text">
                                            <i class="fas fa-arrows-alt-h"></i>
                                        </div>
                                    </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding","Creative", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-02.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-02.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Creative", "More", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-03.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-03.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding", "Creative", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-04.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-04.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding","Creative", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-05.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-05.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding", "Web", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-06.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-06.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding", "Web", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-07.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-07.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-12" data-groups='["Branding", "Web", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-2/portfolio-2-08.jpg" class="popup">
                            <figure class="portfolio-thumb">
                                <img src="assets/img/portfolio-2/portfolio-2-08.jpg" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="portfolio-pagination" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
        </div>
    </section>

    <!-- End: Latest Projects
    ============================= -->


    <!-- Start: Projects Future
    ============================= -->

    <section id="projects-fututre" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Projects Future <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default active">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Great Professional Staff Abroad
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        We Create Brilliant Buildings
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Premium Support Services
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Why Would a Successful Entrepreneur Hire a Coach?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <div class="projects-mockup">
                        <img src="css/img/mockup.png" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- End: Projects Future
    ============================= -->



    <!-- Start: Our Gallery
    ============================= -->

    <section id="our-gallery" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Latest Projects <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>                
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="gallery-items" class="gallery-items popup-gallery">
                    <div class="single-item">
                        <a href="css/img/gallery/gallary1.jpg">
                            <img src="css/img/gallery/gallary1.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary2.jpg">
                            <img src="css/img/gallery/gallary2.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary3.jpg">
                            <img src="css/img/gallery/gallary3.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary4.jpg">
                            <img src="css/img/gallery/gallary4.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary5.jpg">
                            <img src="css/img/gallery/gallary5.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary6.jpg">
                            <img src="css/img/gallery/gallary6.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary7.jpg">
                            <img src="css/img/gallery/gallary7.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary8.jpg">
                            <img src="css/img/gallery/gallary8.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary9.jpg">
                            <img src="css/img/gallery/gallary9.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="css/img/gallery/gallary10.jpg">
                            <img src="css/img/gallery/gallary10.jpg" alt="" />
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Our Gallery
    ============================= -->

    <!-- Start: Call to action
    ============================= -->

    <section id="cta">
        <div class="container">
            <div class="row cta">
                <div class="col-lg-9 col-md-12 col-12 text-lg-left text-center mb-lg-0 mb-4">
                    <h3>Become a Part of Community !</h3>
                    <p>Get in touch with us and send some basic info for a quick quote</p>
                </div>
                <div class="col-lg-3 col-md-12 col-12 text-lg-right text-center">
                    <a href="#" class="boxed-btn purchase-btn"><i class="fas fa-shopping-cart"></i>purchase now</a>
                </div>
            </div>
        </div>
    </section>  

    <!-- End: Call to action
    ============================= -->

    <!-- Start: Pricing
    ============================= -->

    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Pricing <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <div class="single-pricing">
                        <div class="pricing">$ <span class="price">29</span><br>Per month</div>
                        <h2>Corporate</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li class="deselct">Access to All Project</li>
                            <li class="deselct">Layered Photshop Files</li>
                            <li class="deselct">No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <div class="single-pricing popular-plan">
                        <div class="popular-text"><span>Popular Plan</span></div>
                        <div class="pricing">$ <span class="price">45</span><br>Per month</div>
                        <h2>Professional</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li>Access to All Project</li>
                            <li>Layered Photshop Files</li>
                            <li class="deselct">No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 col-sm-12">
                    <div class="single-pricing">
                        <div class="pricing">$ <span class="price">99</span><br>Per month</div>
                        <h2>Enterprise</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li>Access to All Project</li>
                            <li>Layered Photshop Files</li>
                            <li>No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Pricing
    ============================= -->

    <!-- Start: Testimonial
    ============================= -->

    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Client Testimonial <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel">
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="css/img/quote.png" alt="">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="css/img/tesimonial/speaker01.png" alt="">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="css/img/quote.png" alt="">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="css/img/tesimonial/speaker02.png" alt="">
                                <h3>Benjamin Graham</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="css/img/quote.png" alt="">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="css/img/tesimonial/speaker01.png" alt="">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="css/img/quote.png" alt="">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="css/img/tesimonial/speaker02.png" alt="">
                                <h3>Benjamin Graham</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="css/img/tesimonial/speaker01.png" alt="">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Testimonial
    ============================= -->

    <!-- Start: Creative Team
    ============================= -->

    <section id="team" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Creative Team <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(css/img/team/team01.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Andrew Reed</h3>
                            <p>Creative Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(css/img/team/team02.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Lauren Czisch</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-4">
                    <div class="team-member" style="background-image: url(css/img/team/team03.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Michael Moritz</h3>
                            <p>Apps Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(css/img/team/team04.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Don Valentine</h3>
                            <p>Web Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End:  Creative Team
    ============================= -->

    <!-- Start: Fun Fact
    ============================= -->

    <section id="fun-fact" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box light-bg bb">
                    <img src="css/img/fun-fact/note.png" alt="">
                    <h3><span class="counter">1845</span></h3>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box dark-bg bb">
                    <img src="css/img/fun-fact/people.png" alt="">
                    <h3><span class="counter">146</span></h3>
                    <p>Team Members</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box light-bg">
                    <img src="css/img/fun-fact/face.png" alt="">
                    <h3><span class="counter">1246</span></h3>
                    <p>Happy Customers</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box dark-bg">
                    <img src="css/img/fun-fact/cup.png" alt="">
                    <h3><span class="counter">2416</span></h3>
                    <p>Cups Of Coffee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End:  Fun Fact
    ============================= -->

    <!-- Start: Latest News
    ============================= -->

    <section id="latest-news" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Latest News <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="css/img/latest-news/latest-news-01.jpg" alt="" class="img-responsive center-block">
                            <div class="post-overlay"><img src="css/img/author01.png" alt=""></div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="css/img/latest-news/latest-news-02.jpg" alt="" class="img-responsive center-block">
                            <div class="post-overlay"><img src="css/img/author01.png" alt=""></div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="css/img/latest-news/latest-news-03.jpg" alt="" class="img-responsive center-block">
                            <div class="post-overlay"><img src="css/img/author01.png" alt=""></div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- End:  Latest News
    ============================= -->
    
    <!-- Start: Our Client
    ============================= -->
    <section id="our-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-carousel">
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="css/img/partner/partner01.png" alt="">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="css/img/partner/partner02.png" alt="">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="css/img/partner/partner03.png" alt="">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="css/img/partner/partner04.png" alt="">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="css/img/partner/partner05.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Our Client
    ============================= -->

    <!-- Start: Footer Sidebar
    ============================= -->
    <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo"><img src="css/img/logo.png" alt=""></div>
                        <p>There are many variations of dummy passages of Lorem Ipsum a available, but the majority have suffered that is alteration in some that form  injected humour or randomised.</p>
                        <ul class="widget-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        
                    </aside>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-4">
                    <aside class="widget widget_recent">
                        <h4 class="widget-title">Latest News</h4>
                        <ul>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="css/img/news-widget/news-widget-01.jpg" alt="">
                                    <h5>Top Energy Trend Business</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="css/img/news-widget/news-widget-02.jpg" alt="">
                                    <h5>Chief Financial Officer Role</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="css/img/news-widget/news-widget-03.jpg" alt="">
                                    <h5>Our to Sustainability Team</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <aside class="widget widget_contact">
                        <h4 class="widget-title">Contact information</h4>
                        <ul>
                            <li><i class="fas fa-map-marker"></i>1102 Saint Marys, Jackson Blvd, Chicago, United States</li>
                            <li><i class="fas fa-envelope"></i>exampleemail.com</li>
                            <li><i class="fas fa-phone"></i>(123) 456 789 1002</li>
                        </ul>
                        <form class="#" action="#">
                            <input type="text" placeholder="Enter your email">
                            <button class="subscribe-btn boxed-btn" type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>

        </div>
    </footer>
    <!-- End: Footer Sidebar
    ============================= -->

    <!-- Start: Footer Copyright
    ============================= -->

    <section id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights © 2018 All Rights Reserved, Powered by <a href="#">Conceptly</a>.</p></div>
                <div class="col-lg-6 col-12">
                    <ul class="text-lg-right text-center payment-method">
                        <li><a href="#"><i class="fab fa-paypal"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-amazon-pay"></i></a></li>
                    </ul>
                    <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Footer Copyright
    ============================= -->
    
    <!-- Scripts -->
    <script src="{{ asset('css/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('css/js/popper.min.js') }}"></script>
        
    <script src="{{ asset('css/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('css/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('css/js/wow.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.hoverdir.js') }}"></script>
    
    <!-- Map Script -->
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="css/js/map-script.js"></script>
 -->
    <!-- Custom Script -->
    <script src="{{ asset('css/js/custom.js') }}"></script>
    
</body>

</html>