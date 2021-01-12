<?php
    include 'InsertionReq.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="https://www.facebook.com/OrmanCharityAssociation/" class="grow"><i class="icon-facebook2"></i></a>
						<a href="https://twitter.com/al_orman?lang=ar" class="grow"><i class="icon-twitter2"></i></a>
						<a href="https://www.instagram.com/ormancharityassociation/?hl=en" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="Admin-index.php">Al Orman</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="Admin-index.php">Home</a>
							</li>
							<li>
								<li><a href="ListOrphans.php">Orphans</a>
							</li>
                            <li>
							<a href="ViewReports.php">Reports</a>
						</li>
						<li>
							<a href="AddEvent.php">Events</a>
						</li>
						<li class="active">
								<a href="#" class="fh5co-sub-ddown">Control Panel</a>
								 <ul class="fh5co-sub-menu">
                                 <li>
                                    <form action="AddDonMethod.php" >
                                      <input type="submit" value="Add Donation Method"/>
                                    </form>
                                 </li>
								 <li>
                                     <form action="AddDonType.php" >
                                       <input type="submit" value="Add Donation Type"/>
                                     </form>
                                  </li>
								 	<li>
                                     <form action="AddEvent.php" >
                                       <input type="submit" value="AddEvent"/>
                                     </form>
                                  </li>
								</ul>
							</li>
                            <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i> <span class="badge bg-danger"><?php echo $ct ?></span>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php
                                $i=0;
                                while($i != $ct)
                                {
                              ?>
                            <li><a class="dropdown-item"><?php echo "User no: ". $array[$i]->getRequesterId() ." Made ". $array[$i]->getReqType() ." request."?></a></li>
                              <?php
                                  $i++;
                                }
                              ?>
                          </ul>
                        </li>
		              					
							<li>
							<span><a class="btn btn-primary btn-lg" href="index.html">Log out</a></span>
						</li>
                            
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
			</div>

		</div>
		<!-- end:header-top -->
		
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/al_orman?lang=ar"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/OrmanCharityAssociation/"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/ormancharityassociation/?hl=en"><i class="icon-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UCnNWucvVoxWq8kJxrSV5fvQ"><i class="icon-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/orman-association/"><i class="icon-dribbble2"></i></a>
							</p>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

