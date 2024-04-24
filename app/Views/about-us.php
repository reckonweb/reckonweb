<?=$this->extend('main-layout')?>

<?=$this->section('meta')?>
<meta name="keywords" content="Reckon Web Solution">
<meta name="description" content="Reckon Web Solution">
<title>Reckon Web Solution</title>

<?=$this->endSection()?>
<?=$this->section('content')?>


<main>
     <!-- Breadcum Start -->
     <section class="breadcum bg-cover-center" data-background="<?=base_url()?>assets/img/breadcum/breadcum-bg-1.jpg">
                <div class="container">
                    <div class="breadcum-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcum End -->
            <!-- About Us Start -->
            <section class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img wow animate__fadeInLeft" data-wow-duration="1.5s"
                                data-wow-delay="0.2s">
                                <img src="<?=base_url()?>assets/img/about-us/about-img.jpg" alt="about-img">
                                <span class="wow animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <button class="circle-play-btn venobox"
                                        data-background="<?=base_url()?>assets/img/about-us/play-round.png" data-vbtype="video"
                                        data-maxwidth="800px" data-autoplay="true"
                                        data-href="https://youtu.be/jDLuJLoaA_g">
                                        <span class="my-icon icon-play"></span>                                    </button>
                                </span>                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title wow animate__fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0s">
                                    <h6>ABOUT US</h6>
                                    <h2>Innovative Solutions for a Better Tomorrow</h2>
                                </div>
                                <div class="items-content">
                                    <ul>
                                        <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="my-icon icon-Outer-Lines-6"></div>
                                            <div class="item-text">
                                                <h4>Organizational Design</h4>
                                                <p>Ntypesetting industry Loreaim Ipsum has been in our the design compan
                                                    industry compan standard dummy Lorem Ipsum</p>
                                            </div>
                                        </li>
                                        <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                            <div class="my-icon icon-Outer-Lines-5"></div>
                                            <div class="item-text">
                                                <h4>Digital Transformation</h4>
                                                <p>Ntypesetting industry Loreaim Ipsum has been in our the design compan
                                                    industry compan standard dummy Lorem Ipsum</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items-link wow animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.7s">
                                    <ul>
                                        <li>
                                            <a href="#" class="link-anime v2">Discover More <span
                                                    class="my-icon icon-arrow-right"></span></a>
                                        </li>
                                        <li>
                                            <div class="cantact-link">
                                                <div class="left-icon">
                                                    <span class="my-icon icon-call"></span>                                                </div>
                                                <div class="text-content">
                                                    <p>Need help?</p>
                                                    <h4><a href="#">(808) 555-0111</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us End -->
            <!-- Counter Section Start -->
            <section class="counter-section">
                <div class="container">
                    <div class="counter-items">
                        <ul>
                            <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="my-icon icon-group-icon-8"></div>
                                <div class="content">
                                    <h2><span class="counter" data-count-min="15" data-count-max="200"
                                            data-count-duration="1400" data-count-delay="200">200</span>+</h2>
                                    <h4>Team member</h4>
                                </div>
                            </li>
                            <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="my-icon icon-group-icon-7"></div>
                                <div class="content">
                                    <h2><span class="counter" data-count-min="1" data-count-max="20"
                                            data-count-duration="1400" data-count-delay="300">20</span>+</h2>
                                    <h4>Winning award</h4>
                                </div>
                            </li>
                            <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="my-icon icon-group-icon-6"></div>
                                <div class="content">
                                    <h2><span class="counter" data-count-min="1" data-count-max="10"
                                            data-count-duration="1400" data-count-delay="400">10</span>k+</h2>
                                    <h4>Complete project</h4>
                                </div>
                            </li>
                            <li class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="my-icon icon-user-stars"></div>
                                <div class="content">
                                    <h2><span class="counter" data-count-min="1" data-count-max="900"
                                            data-count-duration="1400" data-count-delay="500">900</span>+</h2>
                                    <h4>Client review</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Counter Section End -->
            <!-- Common Faq’s Start -->
            <section class="common-faqs">
                <div class="container">
                    <div class="faqs-card">
                        <div class="faq-content wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="section-title">
                                <h6>Common Faq’s</h6>
                                <h2>Proven Solutions for Your Success</h2>
                            </div>
                            <ul class="accordion" id="commonFaqAccordion">
                                <li>
                                    <button class="faq-btn " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1">What type of services does your company offer ?
                                        <span></span></button>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        data-bs-parent="#commonFaqAccordion">
                                        <div class="faq-content-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the readni dablea content of a page when looking at its layout Thoiie
                                                point of using.Iti is a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2">How does your company ensure the success of its ?
                                        <span></span></button>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                        data-bs-parent="#commonFaqAccordion">
                                        <div class="faq-content-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the readni dablea content of a page when looking at its layout Thoiie
                                                point of using.Iti is a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3">What sets your company apart from other consulting ?
                                        <span></span></button>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        data-bs-parent="#commonFaqAccordion">
                                        <div class="faq-content-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the readni dablea content of a page when looking at its layout Thoiie
                                                point of using.Iti is a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="faq-img wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><img
                                src="<?=base_url()?>assets/img/faq/profile-img.jpg" alt="profile"></div>
                    </div>
                </div>
            </section>
            <!-- Common Faq’s End -->
            <!-- Our Simple Step Start -->
            <section class="our-simple-step v1">
                <div class="container">
                    <div class="section-title-center wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6>Our 4 simple step</h6>
                        <h2>Empowering Your Business with Vision</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card  wow animate__fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.1s">
                                <div class="my-icon icon-Outer-Lines-1"></div>
                                <h6>Process 01</h6>
                                <h4>Accelerate Growth</h4>
                                <p>Lorem ipsum dolor sita liquam is tempor elementum consectetur Malesuada sed diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card  wow animate__fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.2s">
                                <div class="my-icon icon-Outer-Lines-5"></div>
                                <h6>Process 02</h6>
                                <h4>Strategic Planning</h4>
                                <p>Lorem ipsum dolor sita liquam is tempor elementum consectetur Malesuada sed diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card  wow animate__fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.3s">
                                <div class="my-icon icon-group-icon-4"></div>
                                <h6>Process 03</h6>
                                <h4>Market Expansion</h4>
                                <p>Lorem ipsum dolor sita liquam is tempor elementum consectetur Malesuada sed diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="process-card  wow animate__fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.4s">
                                <div class="my-icon icon-Outer-Lines"></div>
                                <h6>Process 04</h6>
                                <h4>Grow Quicker</h4>
                                <p>Lorem ipsum dolor sita liquam is tempor elementum consectetur Malesuada sed diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Simple Step End -->
            <!-- Clients Review Start -->
            <section class="clients-review v2">
                <div class="container">
                    <div class="section-title title-left-right">
                        <div class="left-content">
                            <h6>Clients review</h6>
                            <h2>Expert Guidance for Your Journey</h2>
                        </div>
                        <div class="right-content">
                            <button class="prev-btn"><span class="my-icon icon-angle-arrow-left"></span></button>
                            <button class="next-btn"><span class="my-icon icon-angle-arrow-right"></span></button>
                        </div>
                    </div>
                    <div class="slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide client-card">
                                <ul class="star-mark star-5">
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                </ul>
                                <p>Financial planners help pe gain knowledge about how toio invest and save their money
                                    in the most efficient way ever</p>
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="<?=base_url()?>assets/img/clients-review/v2/profile-1.png" alt="profile">
                                    </div>
                                    <div class="profile-text">
                                        <h6><a href="#">Brooklyn Simmons</a></h6>
                                        <p>WordPress</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide client-card">
                                <ul class="star-mark star-5">
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                </ul>
                                <p>Financial planners help pe gain knowledge about how toio invest and save their money
                                    in the most efficient way ever</p>
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="<?=base_url()?>assets/img/clients-review/v2/profile-2.png" alt="profile">
                                    </div>
                                    <div class="profile-text">
                                        <h6><a href="#">Ralph Edwards</a></h6>
                                        <p>Joomla Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide client-card">
                                <ul class="star-mark star-5">
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                    <li><span class="my-icon icon-start-solid"></span></li>
                                </ul>
                                <p>Financial planners help pe gain knowledge about how toio invest and save their money
                                    in the most efficient way ever</p>
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="<?=base_url()?>assets/img/clients-review/v2/profile-3.png" alt="profile">
                                    </div>
                                    <div class="profile-text">
                                        <h6><a href="#">Jacob Jones</a></h6>
                                        <p>Internet Security Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clients Review End -->
            <!-- Talk To Us Start -->
            <section class="talk-to-us v2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-img-numbber">
                                <div class="left-img">
                                    <img src="<?=base_url()?>assets/img/talk-to-us/left-img.jpg" alt="left-img">                                </div>
                                <div class="left-numbber">
                                    <div class="my-icon icon-24-help">                                    </div>
                                    <div class="text-content">
                                        <h4>Need help?</h4>
                                        <h3><a href="#">(808) 555-0111</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content">
                                <div class="section-title">
                                    <h6>Talk to us</h6>
                                    <h2>Accelerating growth and success</h2>
                                </div>
                                <form action="#">
                                    <input type="text" placeholder="Name" required>
                                    <div class="group-box">
                                        <input type="email" placeholder="E-mail" required>
                                        <select>
                                            <option selected>Subject</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <textarea placeholder="Type Here" required></textarea>
                                    <button class="btn-anime v2" type="submit">Submit Here</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Talk To Us End -->
        </main>
<?=$this->endSection()?>





