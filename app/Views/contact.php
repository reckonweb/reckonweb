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
                        <h2>Contact</h2>
                        <ul>
                        <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcum End -->
            <!-- Contact Us Start -->
            <section class="contact-us">
                <div class="container">
                    <div class="contact-info-map">
                        <div class="contact-left">
                            <ul>
                                <li>
                                    <div class="my-icon icon-phone-book"></div>
                                    <div class="content">
                                        <h4>Phone Number</h4>
                                        <p><a href="#">8909888773</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="my-icon icon-envelope-solid"></div>
                                    <div class="content">
                                        <h4>Email</h4>
                                        <p><a href="#">reckonweb123@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="my-icon icon-location-pin-solid"></div>
                                    <div class="content">
                                        <h4>Location</h4>
                                        <p><a href="#">Dehradun</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14613.167032861855!2d90.433811!3d23.701273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b767a022cd4b%3A0xaf33907e219d127!2sRayerbag%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1675146270950!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                    <div class="contact-form wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>We Can take your business to growth Up</h2>
                        <p>For your car we will do everything advice, repairs and maintenance. We are the some preferred
                            choice by many car owners because our experience and knowledge is selfe vident.For your car.
                        </p>
                        <form action="https://demo.techsometimes.com/constimes/assets/mail.php" method="POST" class="message-form">
                            <div class="input-box">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <div class="my-icon icon-user"></div>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="Your Email" required>
                                <div class="my-icon icon-paper-plan"></div>
                            </div>
                            <div class="input-box">
                                <input type="number" name="phone" placeholder="Phone Number" required>
                                <div class="my-icon icon-call"></div>
                            </div>
                            <div class="input-box text-textarea">
                                <textarea name="message" placeholder="Message"></textarea>
                                <div class="my-icon icon-envelope"></div>
                            </div>
                            <button type="submit" class="btn-anime v2">Submit</button>
                            <p class="response"></p>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Contact Us End -->
        </main>
<?=$this->endSection()?>





