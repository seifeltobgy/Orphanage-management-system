<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; </title>
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
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	

	</head>
	<body>
        <div bgcolor=Orange></div>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">Forum</a>
					
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
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="Admin-index.php">Al Orman</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="Admin-index.php">Home</a>
							</li>
							<li class="active">
								<a href="searchtextbox.php">Search Orphans</a>
							</li>
				
							<li class="active">
								<a href="#" class="fh5co-sub-ddown">Orphans</a>
								 <ul class="fh5co-sub-menu">
                                 <li>
                                    <form action="AddOrphan.html" >
                                      <input type="submit" value="Add orphan"/>
                                    </form>
                                 </li>
								 <li>
                                     <form action="Update.php" >
                                       <input type="submit" value="Update"/>
                                     </form>
                                  </li>
								 	<li>
                                     <form action="delete.php" >
                                       <input type="submit" value="Delete"/>
                                     </form>
                                  </li>
								</ul>
							</li>

						
						</ul>
					</nav>
				</div>
			</div>

		</header>
		
		

		<div class="fh5co-hero" style="background-color: salt">
		<?php
		
		include 'singleton.php';
		$Db= DbConnection::getInstance();
		$conn = $Db->getConnection();
$sql="SELECT * FROM `orphans` ORDER BY FullName";
$StudentDataSet = $conn->query($sql);

echo "<table border=6 align=center style=width:100% >
<tr>
<th>Id</th>
  <th>Full name</th>
  <th>Date of birth</th> 
  <th>Gender</th>
  " ;
while ($Result= mysqli_fetch_array($StudentDataSet)){
    echo"<tr><td>".$Result[0]."</td><td>".$Result[1]."</td><td>".$Result[2]."</td><td>".$Result[3];
    echo"</td></tr>";
}
//</table>
?>
			
          
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
		</div>
        </body>
        </html>