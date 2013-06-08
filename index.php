<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Proudly designed by Mayur Ahir (http://www.mayurahir.com) -->
        <meta charset="utf-8">
        <title>HiringMonk - HR recruitment consultancy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="hr recruitment consultancy">
        <meta name="author" content="prettystrap">
        <!-- Le styles -->
        <link href="assets/less/style.min.css" rel="stylesheet">
        <!--Import Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le fav  -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            if (typeof jQuery == 'undefined') {
                document.write(unescape("%3Cscript src='assets/js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        <!--Has to be in head, to lazy load images.
        Minimize in production. -->
        <script src="assets/js/lazyload.js"></script>
        <script src="assets/js/jRespond.js"></script>
        <script src="assets/js/spin.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Main js fail. -->
        <script src="assets/js/main.js"></script>
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar">
        <!-- Brand and Navigation -->
        <header class="navbar navbar-fixed-top">
            <div class="inner-page">
                <a class="logo" href='./'><img src="assets/img/hiringmonk_logo.png" width="125" /></a>
                <a class="btn-nav" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-reorder"></i>
                </a>
                <div class="nav-collapse collapse float-right">
                    <ul class="nav navigation" id="menu">
                        <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
                        <li><a title="Check out our awesome services" href="#features" class=" scroll brand-4">Features</a></li>
                        <li><a title="Themes assets" href="#pricing" class="scroll brand-3">Pricing</a></li>
                        <li><a title="Who we are" href="#about" class="scroll fadeto brand-4"> About us</a></li>
                        <li><a title="Get in touch!" href="#contact" class="scroll brand-2">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-collapse collapse callus">
                    Call us now on <strong>(+91) 98 7061 7199</strong>
                </div>
            </div>
        </header>
        
        <!-- Home Page -->
        <div id="home" class="page color-1">
            <div class="inner-page">
                <h2 class="page-headline large">Hiring the best talent was never this easy!</h2>
            </div>
            <div class="row-fluid inner-page">
                <div class="span7 pull-right lazy-container">
                    <img class="lazy" alt="Looks great on every device" src="assets/img/pixel.png" data-original="assets/img/home.png"/>
                </div>
                <div class="span5 pull-right">
                    <ul class="big-list">
                        <li><i class="icon-ok"></i> Indigenous Processes</li>
                        <li><i class="icon-tablet"></i> Dexterous Recruiters</li>
                        <li><i class="icon-cloud"></i> Nominal Pricing</li>
                        <li><i class="icon-cog"></i> Guaranteed Hire</li>
                    </ul>
                    <br/>
                    <a href="#features" title="Check out more freatures!" class="scroll btn btn-centered"><i class="icon-caret-down"></i> Learn more</a>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div id="features" class="page color-4">
            <div class="inner-page">
                <h2 class="page-headline">Why choose HiringMonk?</h2>
            </div>
            <div class="inner-page row-fluid">
                <ul class="features list-inline">
                    <li>
                        <h3><i class="icon-cog"></i> Crackerjack Recruiters </h3>
                        <p>
                            For every profile we undertake, a specialized recruiter is devoted fully to that particular operation, resulting in timely follow-ups and successful hiring.
                        </p>
                    </li>
                    <li>
                        <h3><i class="icon-heart"></i> Royally inexpensive </h3>
                        <p>
                            Now this is what every cost cautious company looks for, not only we are nominally priced, but also we care more about the customer needs.
                        </p>
                    </li>
                    <li>
                        <h3><i class="icon-tablet"></i> Guaranteed Hiring </h3>
                        <p>
                            Being a start-up we know the value of a single penny. After all this is what you came to us for. It goes this way "either You hire or You hire".
                        </p>
                    </li>
                </ul>
            </div>
            <div class="row-fluid inner-page">
                <div class="span5 lazy-container">
                    <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/whats_unique.png" alt="What's unique about us"/>
                </div>
                <div class="span7">
                    <h3>Okay, so what's unique about you?</h3>
                    <!--
                    <p class="lead">
                            Subtitle here
                    </p>
                -->
                <ul class="list-wide">
                    <li><i class="icon-check"></i> No more 8.33% or such hiring fees; one operation runs for 30 days</li>
                    <li><i class="icon-check"></i> Pay just 50% before hiring and rest once you hire a candidate</li>
                    <li><i class="icon-check"></i> Devoted recruiter, with cross sector experience</li>
                    <li><i class="icon-check"></i> Streamlined processes enabling constant feedback</li>
                    <li><i class="icon-check"></i> Hiring guaranteed or the HiringMonk refunds your money *</li>
                </ul>
            </div>
        </div>
        <hr>
        <!-- Video -->
        <div class="row-fluid inner-page">
            <div class="span6 pull-right">
                <div class="btn-container figurette">
                    <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/two-phones.png" alt="New features for niche profiles" />
                </div>
            </div>
            <div class="span6 pull-right">
                <ul class="big-list">
                    <li><h3>New features for niche profiles</h3></li>
                    <li><i class="icon-play"></i> Intelligent CVs</li>
                    <li><i class="icon-resize-full"></i> Video resumes</li>
                    <li><i class="icon-desktop"></i> Extended time frame</li>
                </ul>
                <br/>
            </div>
        </div>
    </div>
    <!-- /Features -->

    <!-- Pricing page -->
    <div id="pricing" class="page color-3">
        <div class="inner-page">
            <h2 class="page-headline">This is how we work</h2>
        </div>

        <div class="row-fluid inner-page">
            <div class="offset1 span10 lazy-container">
                <div class="btn-container">
                    <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/how_it_works.png" alt="How it works" />
                </div>
            </div>
        </div>

        <hr/>

        <div class="inner-page">
            <h2 class="page-headline">Pricing</h2>
        </div>

        <!-- Prices -->
        <div class="row-fluid inner-page">
            <div class="span12">
                <div class="pricingtable">
                    <div class="price_top">
                        <h2>Basic</h2>
                    </div>
                    <ul>
                        <li>Devoted recruiter</li>
                        <li>Job postings</li>
                        <li>Tele-interview</li>
                        <li>Scheduling</li>
                        <li>Follow-up</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                    </ul>
                    <hr>
                    <h3><sup>Rs</sup>10,999</h3>
                    <p>30 Days</p>
                    <a href="#contact">Call Us</a>
                </div>
                <div class="pricingtable featured">
                    <div class="price_top">
                        <h2>Pro</h2>
                    </div>
                    <ul>
                        <li>Devoted recruiter</li>
                        <li>Job postings</li>
                        <li>Tele-interview</li>
                        <li>Scheduling</li>
                        <li>Follow-up</li>
                        <li>Head-hunting</li>
                        <li>Reference check</li>
                        <li>Salary negotiation</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                        <li>&mdash;</li>
                    </ul>
                    <hr>
                    <h3><sup>Rs</sup>19,999</h3>
                    <p>30 Days</p>
                    <a href="#contact">Call Us</a>
                </div>
                <div class="pricingtable">
                    <div class="price_top">
                        <h2>Ultimate</h2>
                    </div>
                    <ul>
                        <li>Devoted recruiter</li>
                        <li>Job postings</li>
                        <li>Tele-interview</li>
                        <li>Scheduling</li>
                        <li>Follow-up</li>
                        <li>Head-hunting</li>
                        <li>Reference check</li>
                        <li>Salary negotiation</li>
                        <li>LinkedIn Posting</li>
                        <li>Intelligent CVs</li>
                        <li>Video resume</li>
                    </ul>
                    <hr>
                    <h3><sup>Rs</sup>29,999</h3>
                    <p>45 Days</p>
                    <a href="#contact">Call Us</a>
                </div>
            </div>
        </div> 
        <!-- /Prices -->

        <hr/>
    </div> 
    <!-- /Pricing page -->

    <!-- About page -->
    <div id="about" class="page color-4">
        <div class="inner-page">
            <h2 class="page-headline">Meet the Monks.</h2>
        </div>
        <div class="row-fluid inner-page">
            <div class="span6 lazy-container">
                <img class="figurette lazy" src="assets/img/pixel.png" data-original="assets/img/green-office.png" alt="Our workspace"/>
            </div>
            <div class="span6">
                <h3>Our story.</h3>
                <p class="lead">
                    Back in 2010, when Ateeque and Preetam met, it was just evident that both had entrepreneurial mindset and synergies in areas of interest. That’s where the seed of HiringMonk was placed. Over the last few of years both of them mastered their respective skills, gave up their cushiony jobs and established the startup for solving all hiring pains for our clients. And like all start-up stories, they worked from home and slowly graduated to the level they are on, right now.
                </p>
            </div>
        </div>
        <hr>
        <!-- Team -->
        <div class="row-fluid inner-page team">
            <div class="lazy-container span6 text-left">
                <img class="pull-left lazy figurette" src="assets/img/pixel.png" data-original="assets/img/ateeque_shaikh.png" alt="Ateeque Shaikh"/>
                <h4>Ateeque Shaikh</h4>
                <p class="small_font">
                    Ateeque comes from HR background with more than 15 years of professional practices. 
                    Graduated in Electrical Engineering, MBA from ICFAI and Post grad in HR by academics & immensely sincere when it comes to delivery. 
                    Workaholic by nature, updated about industry norms and yet finds time to watch every single movie. 
                </p>
                <ul>
                    <li class="small_font"><i class="icon-envelope-alt"></i><a href="ateeque@hiringmonk.com"> ateeque@hiringmonk.com</a></li>
                </ul>
            </div>
            <div class="lazy-container span6 text-left team2">
                <img class="pull-left lazy figurette" src="assets/img/pixel.png" data-original="assets/img/preetam_salian.png" alt="Preetam Salian"/>
                <h4>Preetam Salian</h4>
                <p class="small_font">
                    Preetam has mastered in sales and business development. 
                    Has been a part of several start-ups before he came up with the idea of HiringMonk.
                    He also helped couple of start-up for integral business strategies.
                    Loves food, football and fitness; you would surely find him adding life to the party.
                    <ul>
                        <li class="small_font"><i class="icon-envelope-alt"></i><a href="preetam@hiringmonk.com"> preetam@hiringmonk.com</a></li>
                        <?php /*
                        <li class="social">
                            <a href="#"><i class="icon-facebook-sign"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-github-sign"></i></a>
                        </li>
                        */ ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Contact Us -->
        <div id="contact" class="page color-2">
            <div class="inner-page">
                <h2 class="page-headline">Get in touch and stay updated</h2>
            </div>
            <div class="row-fluid inner-page contact">
                <div class="span6">
                    <h3>We can talk about anything and everything. We’re just a click away</h3>
                    <form name="contact_form" method="POST" action="send_mail.php">
                        <textarea rows="6" name="message" placeholder="Your message & contact number"></textarea>
                        <input type="text" name="email" placeholder="your@e-mail.com"><br/>
                        <input type="text" name="name" placeholder="Name"><br/>
                        <button class="btn btn-centered">Contact us</button>
                    </form>
                </div>
                <div class="span6">
                    <div class="btn-container centered lazy-container text-center">
                        <img src="assets/img/pixel.png" class="lazy figurette" alt="Open the map" data-original="assets/img/map.png"/>
                        <a class="lightbox iframe btn-map" target="blank" title="Open google maps" href="https://maps.google.com/maps?q=Mukadam Compound, Goregaon Mulund Link Road, Near Oberoi Mall, Mumbai, Maharashtra, India&hl=en&ie=UTF8&hq=Mukadam Compound, Goregaon Mulund Link Road,&hnear=Oberoi Shopping Mall, India&t=m&cid=3223028988865742278&ll=19.173059,72.856865&spn=0.038913,0.054932&z=14&iwloc=A"><i class="pull-left icon-map-marker"></i>
                            <div>
                                C/9, Mukadam Compound,<br/>Goregaon Mulund Link Road,<br/>Near Oberoi Mall, Goregaon-East,<br/>Mumbai, Maharashtra.
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class="clients color-3">
            <div class="inner-page row-fluid" style="padding: 0;">
                <ul class="clients list-inline">
                    <li><a class="lightbox iframe" href="./clients.php" >Our Clients</a></li>
                    <li><a class="lightbox iframe" href="./faqs.php" >FAQs</a></li>
                </ul>
            </div>
        </div>

        <!-- The footer, social media icons, and copyright -->
        <footer class="page color-5">
            <div class="inner-page row-fluid">
                <div class="span6 social">
                    <a href="http://twitter.com/hiringmonk" title="@hiringmonk"><i class="icon-twitter"></i></a>
                    <a href="#contact"><i class="icon-facebook-sign"></i></a>
                    <a href="#contact"><i class="icon-google-plus-sign"></i></a>
                </div>
                <div class="span6 text-right copyright text_small">
                    &copy; 2013 all rights reserved | Imperative HR Solutions Pvt. Ltd.<br/><a href="#top" title="Got to top" class="scroll">To top <i class="icon-caret-up"></i></a>
                </div>
            </div>
        </footer>
    </body>
</html>