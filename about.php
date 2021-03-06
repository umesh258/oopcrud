<?php

session_start();

require './database/config.php';


?>



<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>About Us | Handyman - Job Board HTML Template</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	
	
	
	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/fonts/entypo/css/entypo.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/animate.min.css">

   

  <!-- Head Libs -->
	<script src="vendor/modernizr.js"></script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">
	
</head>
<body>

	<div class="site-wrapper">

		<!-- Header -->
		<?php 

                if(isset($_SESSION['id']))
                {
                
            ?>
            <div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<button class="btn btn-sm btn-default menu-link menu-link__secondary">
							<i class="fa fa-bars"></i>
						</button>
						<div class="menu-container">
							<ul class="header-top-nav header-top-nav__secondary">
								<li><a href="#"><i class="fa fa-twitter"></i> <span class="nav-label">Twitter</span></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i> <span class="nav-label">Facebook</span></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i> <span class="nav-label">Google+</span></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i> <span class="nav-label">Pinterest</span></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i> <span class="nav-label">Instagram</span></a></li>
								<li><a href="#"><i class="fa fa-rss"></i> <span class="nav-label">RSS Feed</span></a></li>
							</ul>
						</div>
					</div>
					<div class="header-top-right">
						<button class="btn btn-sm btn-default menu-link menu-link__tertiary">
							<i class="fa fa-user"></i>
						</button>
						<div class="menu-container">
							<ul class="header-top-nav header-top-nav__tertiary">
							<li><a href="login.php"><i class="fa fa-sign-in"></i> <?php echo $_SESSION['name'] ?></a></li>	
                            <li><a href="changepassword.php"><i class="fa fa-sign-in"></i> Changepassword</a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-in"></i> Logout</a></li>
                                
							</ul>
						</div>
					</div>
				</div>
			</div>
                
        <?php   }
                else
                {
                    require './themeportion/header.php';
                }
                
                require './themeportion/menu.php';
            ?>
		<!-- Header / End -->


		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-5">
							<figure class="alignnone">
								<img src="about.jpg" alt="" class="img-circle">
							</figure>
						</div>
						<div class="col-md-6 col-md-offset-1">
							<h2>Welcome to Our Site!</h2>
							<p>Every home owner has a list of handyman, home repair, or home improvement projects he or she needs done - both interior and exterior. Sometimes that list can get quite long, too! The bathrooms that needs updating. The garbage disposal that's on the fritz. The basement that needs drywall repairs. Call our professionalis and save your money!</p>

							<div class="list">
								<ul>
									<li>Environmental Consulting &amp; Services</li>
									<li>Handiwork</li>
									<li>Lighting Design</li>
									<li>Waste &amp; Junk Removal Services</li>
									<li>Landscape Design</li>
									<li>And much more...</li>
								</ul>
							</div>

							<div class="spacer-sm"></div>
							
							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
					</div>

					<div class="section-light section-no-bottom-margin">
						<div class="spacer"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="icon-box">
									<div class="icon">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="icon-box-body">
										<h4>Painting</h4>
										We've painted thousands of living rooms, kitchens and everything in between.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box circled icon-box-animated">
									<div class="icon">
										<i class="fa fa-bolt"></i>
									</div>
									<div class="icon-box-body">
										<h4>Electrical</h4>
										Providing a first class reliable service in all fields of electrical.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box squared icon-box-animated">
									<div class="icon">
										<i class="fa fa-wrench"></i>
									</div>
									<div class="icon-box-body">
										<h4>General Contracting</h4>
										We develop special tailor-made solutions in collaboration with our customers.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="call-to-action centered cta__fullwidth cta__overlay cta__overlay-opacity-75 cta-overlay-color__dark cta-bg2" data-stellar-background-ratio="0.5">
						<div class="cta-inner">
							<div class="cta-txt">
								<h2>The Best Professionals</h2>
								<p>Select a project category that best matches your home repair or improvement need</p>
							</div>
							<div class="cta-btn">
								<a href="#" class="btn btn-primary">Get Started!</a>
							</div>
						</div>
					</div>

					<div class="spacer-xl"></div>

					<div class="row">
						<div class="col-md-6">
							<h2>Our Mission</h2>
							<p>Remodeling your home can be stressful. It???s hard to know where to turn in the case of an emergency repair.</p>

							<p>Commercial work needs to be completed professionally and in a timely manner with extra consideration of codes and regulations. We eliminate the need to flip through the yellow pages, we take away the stress and worry, and most importantly we get the job done right.</p>

							<p>We promise to provide you with outstanding service that you can trust for all of your repair needs.</p>

							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
						<div class="col-md-6">
							<h2>Why People Choose Us?</h2>
							<div class="panel-group panel-group__alt" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
												Quality Service
											</a>
										</h4>
									</div>
									<div id="accordion-1" class="panel-collapse collapse in">
										<div class="panel-body">
											We're here to keep our customers with my low prices and good work (workmanship you can trust) We stand behind my work.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
												Trusted Professionals
											</a>
										</h4>
									</div>
									<div id="accordion-2" class="panel-collapse collapse">
										<div class="panel-body">
											We're the largest employer of home repair contractors in the world. Our dedication in hiring and retaining the very best home maintenance and repair technicians is why we are able to deliver a 99% customer satisfaction rating.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
												Experience and Skill
											</a>
										</h4>
									</div>
									<div id="accordion-3" class="panel-collapse collapse">
										<div class="panel-body">
											We've consistently hired experienced, reliable employees whose skills are further refined through technical and customer service training.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-4" class="collapsed">
												Honesty and Integrity
											</a>
										</h4>
									</div>
									<div id="accordion-4" class="panel-collapse collapse">
										<div class="panel-body">
											We are ready to be your long term partner for all of your needs. Contact us to day and see how we can help you!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="xlg">

					<h2>Our Clients</h2>
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo1-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo2-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo3-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo4-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contact Us</h3>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<div class="info-item">
													HandyMan Co., Old Town Avenue, New York, USA 23000
												</div>
											</li>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													+1700 124-5678<br>
													+1700 124-5678
												</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:info@dan-fisher.com">support@dan-fisher.com</a>
												</span>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													Monday - Friday 9:00 - 21:00
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Latest Posts -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Recent Posts</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img1-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Three Simple Household Repairs That'll Save You Hundreds</a></h5>
												<span class="date">April, 18 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img2-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Tools That Make Yard Work Easy: The Big Backpack Blower</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img3-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">11 Tips for Dealing With Water Damage, Mold and Mildew</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Latest Posts -->
							</div>

							<div class="clearfix visible-sm"></div>

							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Newsletter -->
								<div class="widget_newsletter widget widget__footer">
									<h3 class="widget-title">Get Our Newsletter</h3>
									<div class="widget-content">
										<p>Get timely DIY projects for your home and yard delivered right to your inbox every week!</p>

										<form action="php/newsletter-form.php" method="POST" id="newsletter-form">

											<div class="alert alert-success hidden" id="newsletter-alert-success">
												<strong>Success!</strong> Thank you for subscribing.
											</div>
											<div class="alert alert-danger hidden" id="newsletter-alert-error">
												<strong>Error!</strong> Something went wrong.
											</div>

											<div class="form-group">
												<input type="email" 
													value=""
													data-msg-required="Please enter email address."
													data-msg-email="Please enter a valid email address."
													class="form-control"
													placeholder="Enter your email here..."
													name="subscribe-email"
													id="subscribe-email">
											</div>
											<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Subscribe</button>
										</form>
									</div>
								</div>
								<!-- /Widget :: Newsletter -->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								Copyright &copy; 2015  <a href="index.html">HandyMan</a> &nbsp;| &nbsp;All Rights Reserved
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	
	
	
	
	<!-- Javascript Files
	================================================== -->
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.js"></script>
	<script src="vendor/jquery.flexnav.min.js"></script>
	<script src="vendor/jquery.hoverIntent.minified.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/jquery.countTo.js"></script>

	<!-- Newsletter Form -->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/newsletter.js"></script>

	<script src="js/custom.js"></script>


	
</body>
</html>