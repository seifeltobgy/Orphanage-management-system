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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body >
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
					<h1 id="fh5co-logo"><a href="index.html">Al Orman</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="Visitor-index.html">Home</a>
							</li>
                        
							<li ><a href="about.html">Donate</a></li>
						
                            <li>
								<div>
					<span><a class="btn btn-primary btn-lg" href="Login.html">Logout</a></span>
				</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<?php 
		include 'singleton.php';
//$conn = mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'orphanage');
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();
$sql="SELECT * FROM `event` ORDER BY id";
$StudentDataSet = $conn->query($sql);

echo "<table border=3 align=center Height=200 Width=fit >
<tr bgcolor=white height=40 >

<th>Id</th>
  <th>Title</th>
  <th>Date </th> 
  <th>content</th>
  <th>Queue</th>
  <th>fees</th>
  <th> </th>
  " ;
  
while ($Result= mysqli_fetch_array($StudentDataSet)){


    echo"<tr bgcolor=white ><td>".$Result[0]."</td><td>".$Result[1]."</td><td>".$Result[2]."</td><td>".$Result[3]."</td><td>".$Result[4]."</td><td>".$Result[5]."</td><td>"."<h><a href='UpdateEnroll.php?rn=$Result[id]&fe=$Result[Fees]&en=$Result[Title]'> Enroll</h></td></tr>";
    
}
?>

</table>

		</div>