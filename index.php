<?php include('php/header.html'); ?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Owl Groove</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Perks</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li> -->
                    <!-- <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li> -->
                    <!-- <li> 
                        <a class="page-scroll" href="#team">Team</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#contact">Subscribe</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Owl Groove!</div>
                <div class="intro-heading">Club and Venue Reservations Made Easy & Rewarding!</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What we have to offer!</h2>
                    <h3 class="section-subheading text-muted">Just a small overview of some of our features.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Nightlife & Party People</h4>
                    <p class="text-muted">Our goal is to make your nightlife experience flawless and rewarding. We are looking to facilitate the booking process as well as reward customers with VIP perks and experiences.</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Nightclubs and Venues</h4>
                    <p class="text-muted">Our goal is to bring you new customers, facilitate the booking process and increase repeat sales!</p>
                </div>
            </div>
            <div class="row text-center">
            <a href="#contact" class="page-scroll btn btn-xl">Mailing List</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Stay Tuned!</h2>
                    <h3 class="section-subheading text-muted">Subscribe to our mailing list and be the first one to take advantage of our pre-launch member rewards.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- <form name="sentMessage" id="contactForm" novalidate> -->
                    <form action="//seamstitch.us9.list-manage.com/subscribe/post?u=d99dde738a321017d4499c032&amp;id=243c77e6c0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div> -->
                                <div class="form-group">
                                    <!-- <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address."> -->
                                    <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Your Email *">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div> -->
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div> -->
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Subscribe</button>
                                <!-- <div style="position: absolute; left: -5000px;"><input type="text" name="b_d99dde738a321017d4499c032_243c77e6c0" tabindex="-1" value=""></div>
    							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-xl"></div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include('php/footer.html'); ?>
