<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="ConsTimes HTML5 Template">
    <meta name="description" content="ConsTimes HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ConsTimes HTML5 Template</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/img/logo/favicon.svg">

    <!-- All Device Favicon -->
    <link rel="icon" href="<?=base_url()?>assets/img/logo/icon.svg">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">

    <!-- All Icons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/all-icons/myicon.css">

    <!-- Plugin -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.min.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.min.css">

</head>

<body>
   

    <div id="main-wrapper">
        <div class="preloder"></div>
        <header>
            <!-- Top Bar Start -->
            <div class="top-bar v2">
                <div class="container">
                    <div class="top-bar-content">
                        <div class="info-link">
                            <ul>
                                <li><span class="my-icon icon-call"></span>
                                    <p><a href="#">(629) 555-0129</a></p>
                                </li>
                                <li><span class="my-icon icon-envelope"></span>
                                    <p><a href="#">info@example.com</a></p>
                                </li>
                                <li><span class="my-icon icon-location"></span>
                                    <p><a href="#">6391 Elgin St. Celina, 10299</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                                <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                                <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                                <li><a href="#"><span class="my-icon icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Menu Bar Start -->
            <div class="menu-bar v2">
                <div class="container">
                    <div class="menu-bar-content">
                        <div class="menu-logo">
                            <a href="index.html"><img src="<?=base_url()?>assets/img/logo/logo-1.svg" alt="Logo"></a>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">Home</a>
                                  
                                </li>
                                <li>
                                    <a href="#">About Us <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="about-us-rtl.html">About Us RTL</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Services <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="service-rtl.html">Service RTL</a></li>
                                        <li><a href="service-details-rtl.html">Service Details RTL</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Projects <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="project.html">Project</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                        <li><a href="project-rtl.html">Project RTL</a></li>
                                        <li><a href="project-details-rtl.html">Project Details RTL</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-rtl.html">Blog RTL</a></li>
                                        <li><a href="blog-details-rtl.html">Blog Details RTL</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Page <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="team-rtl.html">Team RTL</a></li>
                                        <li><a href="team-details-rtl.html">Team Details RTL</a></li>
                                        <li><a href="faq-rtl.html">Faq RTL</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact <span class="my-icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="contact-rtl.html">اتصال</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="right-contact">
                            <div class="my-icon icon-call">
                            </div>
                            <div class="text-content">
                                <p>Need help?</p>
                                <h4><a href="#">(808) 555-0111</a></h4>
                            </div>
                        </div>
                        <button class="mobile-menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Menu Bar End -->
        </header>

        <?= $this->renderSection('content')?>
       
        <footer>
            <div class="info-footer v2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3 order-1">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?=base_url()?>assets/img/logo/logo-2.svg" alt="logo"></a>
                                </div>
                                <p>Lorem Ipsum is simply is dumi in thi omy is text Loremo Ipsum is simply is out no our
                                    o dummy text.</p>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                                        <li><a href="#"><span class="my-icon icon-pinterest"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 order-3">
                            <div class="our-link">
                                <h4>FREE LINKS</h4>
                                <ul>
                                    <li><a href="#">Strategic Planning</a></li>
                                    <li><a href="#">Change Management</a></li>
                                    <li><a href="#">Digital Transformation</a></li>
                                    <li><a href="#">Developing corner</a></li>
                                    <li><a href="#">Computer section</a></li>
                                    <li><a href="#">Leadership Development</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 order-2">
                            <div class="popular-post">
                                <h4>Popular Post</h4>
                                <ul>
                                    <li>
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="<?=base_url()?>assets/img/footer-img/post-1.jpg" alt="post-img">
                                            </a>
                                        </div>
                                        <div class="post-text">
                                            <h6><a href="#">Maximizing Your Success our company</a></h6>
                                            <div class="post-time">
                                                <span class="my-icon icon-calendar"></span>
                                                <p>October 20, 2024</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="<?=base_url()?>assets/img/footer-img/post-2.jpg" alt="post-img">
                                            </a>
                                        </div>
                                        <div class="post-text">
                                            <h6><a href="#">Unleash Your Potential our business</a></h6>
                                            <div class="post-time">
                                                <span class="my-icon icon-calendar"></span>
                                                <p>October 20, 2024</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-3 order-5">
                            <div class="news-letter">
                                <h4>NewsLetter</h4>
                                <p>Lorem Ipsum is simply is dumi in thi omy is text Loremo Ipsum is simply is out</p>
                                <div class="sent-email">
                                    <form action="#">
                                        <div class="cover-form">
                                            <input type="email" placeholder="Your mail address" required="">
                                            <div class="my-icon icon-paper-plan"></div>
                                        </div>
                                        <button type="submit">Subscribe now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main v2">
                <div class="container">
                    <div class="footer-content">
                        <p>© <a href="#">Yoursitename</a> 2024 | All Rights Reserved</p>
                        <ul>
                            <li><a href="#">Trams & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?=base_url()?>assets/js/plugins.min.js"></script>

    <!-- Index -->
    <script src="<?=base_url()?>assets/js/index.min.js"></script>
</body>
</html>