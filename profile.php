<?php

session_start();
if(!isset($_SESSION['id']))
{
	header("location:login.php");
}
require './database/config.php';

$sobj = new Admin();
$wid = $_GET['wid'];
$condition_arr=array("worker_id"=>$wid);
$result = $sobj->select("tbl_workermaster","*",$condition_arr);
foreach($result as $val)
{
	$row = $val;
}

if(isset($_POST['reviewbtn']))
{
	$date= date("d-m-Y");
	$uid = $_SESSION['id'];
	$wid = $_GET['wid'];
	$comment=$_POST['comment'];
	$condition_arr=array("feed_date"=>$date,"user_id"=>$uid,"worker_id"=>$wid,"feed_details"=>$comment);
	$sobj->insert("tbl_feedback",$condition_arr);
}

?>


<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Profile | Handyman - Job Board HTML Template</title>
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
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/job-manager/frontend.css" media="screen">

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
					<li><a href="login.php"><i class="fa fa-sign-in"></i> Changepassword</a></li>
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
							<h1>Profile</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="content col-md-8">

							<div class="box mb-30">
								<div class="job-profile-info">
									<div class="row">
										<div class="col-md-5">
											<figure class="alignnone">
												<img src="workerimg/<?php echo $row['worker_photo'] ?>" alt="">
											</figure>
										</div>
										<div class="col-md-7">
											<h2 class="name"><?php echo $row['worker_name'] ?></h2>
											<i class="tagline">Please write a few words about your service</i>
											<ul class="meta">
												<?php 
												$condition_arr=array("category_id"=>$row['category_id']);
												$result = $sobj->select("tbl_category","category_name",$condition_arr);
												foreach($result as $val)
												{
													echo "<li>{$val['category_name']}</li>";
												}
												 ?>
												
												
											</ul>
											<ul class="info">
												<?php 
												$condition_arr=array("area_id"=>$row['area_id']);
												$result = $sobj->select("tbl_area","area_name",$condition_arr);
												foreach($result as $val)
												{

												
												?>
												<li><i class="fa fa-location-arrow"></i> Looking within 20 miles of <a href="#"><?php echo $val['area_name'] ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>

									<div class="spacer-lg"></div>
									
									<h4>Description</h4>
									<p><?php echo $row['worker_aboutme'] ?></p>
									
									<hr class="lg">
									
													
									<!-- Google Map / End -->
									
								</div>
							</div>

							<!-- Additional Info Tabs -->
							<div class="tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1-1" data-toggle="tab">Reviews</a></li>
									<li><a href="#tab1-2" data-toggle="tab">Details</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1-1">
										<!-- Comments -->
										<div class="comments-wrapper">
											<h3>Reviews (5)</h3>
											<ol class="commentlist">
												<?php 
												$condition_arr=array("worker_id"=>$wid);
												$result	= $sobj->select("tbl_feedback","*",$condition_arr);
												foreach($result as $val)
												{
												
													$condition_arr=array("user_id"=>$val['user_id']);
												$result = $sobj->select("tbl_usermaster","*",$condition_arr);
												
											
												
												

												?>
												<li class="comment">
													<div class="comment-wrapper">
														<div class="comment-author vcard">
															<img src="" alt="" class="gravatar">
															<h5><?php echo $result['0']['user_name']; ?></h5>
															<span class="says">says:</span>
															<div class="comment-meta">
																<a href="#">October 27, 2015 5:45pm</a>
															</div>
															<div class="rating-stars">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<div class="comment-body">
															<?php echo $val['feed_details'] ?>
														</div>
													</div>
												</li>
												<?php  } ?>
											
											</ol>
										</div>
										<!-- Comments / End -->

										<!-- Comments Form -->
										<div id="respond" class="comment-respond">
											<h3 class="reply-title">Leave a review</h3>
											<p class="comment-notes text-muted"><i>Your email address will not be published. Required fields are marked <span class="required">*</span></i></p>

											<form action="#" method="POST" role="form">
											
												<div class="row">
													<div class="col-md-6">
														
														
														
													</div>
												</div>

												<div class="form-group">
													<textarea name="comment" cols="30" rows="10" class="form-control" placeholder="Comment"></textarea>
												</div>
											
												<button type="submit" name="reviewbtn" class="btn btn-primary">Publish Review</button>
											</form>
										</div>
										<!-- Comments Form / End -->
									</div>
									<div class="tab-pane fade" id="tab1-2">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<h4>Skills</h4>
												<div class="list list__arrow2">
													<ul>
														<li>Paint</li> 
														<li>Drywall/Plaster Repairs</li> 
														<li>Shelves</li>
														<li>Chair Rails</li> 
														<li>Hardware Replacement</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<h4>Experience</h4>
												<div class="list list__arrow2">
													<ul>
														<li>Sink/Faucet Replacement</li> 
														<li>Lighting</li> 
														<li>Crown/Base Molding</li>
														<li>Electrical</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Additional Info Tabs / End -->

						</div>

						<!-- Sidebar -->
						<aside class="sidebar col-md-4">
							<hr class="visible-sm visible-xs lg">

							<div class="box box__color-darken mb-30">
							<?php if(isset($_SESSION['id']))
							{

							 ?>	
							<form method="get" action="booking.php">	
									
									<input type="hidden" name="wid" value="<?php echo $wid ?>" >
							<button type="submit" class="btn btn-primary">Book</button>
							</form>
							<?php } ?>
									<button onclick="window.location='workerlogin.php';" type="submit" class="btn btn-primary">WorkerLogin</button>
							
							</div>

							<div class="box box__color-darken mb-30">
								<h4>Social Profiles</h4>
								<ul class="social-links social-links__dark">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="box box__color-darken mb-30">
								<h4>Contact Timing</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											<tr>
												<td><i class="fa fa-clock-o"></i> Sunday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Monday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Tuesday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Wednesday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Thursday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Friday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Saturday</td>
												<td>12:00 - 16:00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table (Bordered) / End -->
							</div>

							
						</aside>
						<!-- Sidebar / End -->

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

	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="vendor/jquery.gmap3.min.js"></script>
	
	<!-- Google Map Init-->
	<script type="text/javascript">
		jQuery(function($){
			$('#map_canvas').gmap3({
				marker:{
					address: '40.717599,-74.005136' 
				},
					map:{
					options:{
					zoom: 17,
					scrollwheel: false,
					streetViewControl : true
					}
				}
		    });
		});
	</script>


	
</body>
</html>