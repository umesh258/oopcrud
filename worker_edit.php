<?php

session_start();

require './database/config.php';
$sobj=new Admin();
$condition=array("worker_id"=>$_GET['wid']);
$result=$sobj->select("tbl_workermaster","*",$condition);

?>

<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Worker Edit </title>
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

    <header class="header header-menu-fullw">

<!-- Header Top Bar -->
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
                    <li><a href="page-login.html"><i class="fa fa-user-plus"></i> Changepassword</a></li>
                    <li><a href="workerlogout.php"><i class="fa fa-sign-in"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header Top Bar / End -->
<div class="header-main">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="Handyman"></a>
            <!-- <h1><a href="index.html"><span>Handy</span>Man</a></h1> -->
        </div>
        <!-- Logo / End -->

        <button type="button" class="navbar-toggle">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Navigation -->
        <nav class="nav-main">
            <div class="nav-main-inner">
                <ul data-breakpoint="992" class="flexnav">
                    <li><a href="worker_profile.php">Home</a></li>
                    
                    <li><a href="worker_profile.php">Profile</a>
                        
                    </li>
                    <li><a href="#">Booking</a>
                        
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- Navigation / End -->

    </div>
</div>

</header>
		<!-- Header / End -->


		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Edit Profile</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="spacer-lg visible-sm visible-xs"></div>
							<div class="box">
								<h3>Profile</h3>
								<form method = "post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1"></label>
                    <input type="hidden" name="id" value="<?php echo $result['0']['worker_id'] ?>"  class="form-control" id="exampleInputName1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="wname" value="<?php echo $result['0']['worker_name'] ?>"  class="form-control" id="exampleInputName1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" name="email" value="<?php echo $result['0']['worker_email'] ?>"  class="form-control" id="exampleInputName1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="password" name="pass" value="<?php echo $result['0']['worker_password'] ?>" class="form-control" id="exampleInputName1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="radio" name="gender" value="1" <?php if($result['0']['worker_gender'] == "1") { echo "checked"; } ?>  id="exampleInputEmail1">Male
                    <input type="radio" name="gender"  value="0" <?php if($result['0']['worker_gender'] == "0") { echo "checked"; } ?>  id="exampleInputEmail1">Female
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DOB</label>
                    <input type="date" name="dob" value="<?php echo $result['0']['worker_dob'] ?>" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Address</label>
                    <textarea type="text" name="address"  class="form-control" id="exampleInputName1" placeholder="Enter Address"><?php echo $result['0']['worker_address'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text"><img style='width: 50px;' src='workerimg/<?php echo $result['0']['worker_photo'] ?>'></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Area</label>
                    <select name="area">
                    <?php 
                    
                    $aresult=$sobj->select("tbl_area","*");
                    foreach($aresult as $val)
                    {
                        
                        
                        $aselect = $val['area_id'] == $result['0']['area_id'] ? "Selected" : "";
                        echo "<option value='{$val['area_id']}' $aselect>{$val['area_name']}</option>";
                    }
                   
                    ?>
                 
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category">
                  <?php  
                  
                  $cresult=$sobj->select("tbl_category","*");
                  foreach($cresult as $val)
                  {
                      $cselect = $val['category_id']== $result['0']['category_id'] ? "selected" : "";
                      echo "<option value='{$val['category_id']}' $cselect>{$val['category_name']}</option>";
                  }
                  
                  ?>
                 
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Experiance</label>
                    <input type="text" name="exp" value="<?php echo $result['0']['worker_exp'] ?>"  class="form-control" id="exampleInputName1" placeholder="Enter Experiance">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Aboutme</label>
                    <input type="text" name="abt" value="<?php echo $result['0']['worker_aboutme'] ?>"  class="form-control" id="exampleInputName1" placeholder="Enter Aboutme">
                  </div>
                        
                  <div class="form-group">
                    <label for="exampleInputName1">Time</label>
                    <input type="time" name="time" value="<?php echo $result['0']['worker_time'] ?>"  class="form-control" id="exampleInputName1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Charges</label>
                    <input type="number" name="charge" value="<?php echo $result['0']['worker_charge'] ?>" class="form-control" id="exampleInputName1" placeholder="Enter Charges">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="wsubmit" class="btn btn-primary">Submit</button>

                  <button type="submit"   class="btn btn-primary" onclick="window.location='worker_profile.php';">Cancel</button>

                </div>
              </form>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
			<?php require './themeportion/footer.php'; ?>
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