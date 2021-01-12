    <?php
    include 'ReceiptController.php';
    ?>
    <form action="Donate.php" method="POST">
    <!DOCTYPE>
<html>

	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <style type="text/css">
        body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:small ; color:#ffffff }
        a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
        a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
        comment { display:none;  } 
    </style>

  	<!-- Facebook and Twitter integration -->
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
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
					
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
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="Visitor-index.html">Al Orman</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="Visitor-index.html">Home</a>
							</li>
                           
                       
							<li class="active"><a href="about.html">About</a></li>
					
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		
        <table cellspacing="0" border="0"; align="center">
            <colgroup width="79"></colgroup>
            <colgroup width="176"></colgroup>
            <colgroup width="511"></colgroup>
            <colgroup width="79"></colgroup>
            
            <tr>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0; border-left: 1px solid #C0C0C0; border-right: 1px solid #C0C0C0" colspan=4 height="35" align="center" valign=middle bgcolor="##000000"><b><font size=5 color="#FFFFFF">Donation Receipt </font></b></td>
                </tr>
            <tr>
                <td style="border-top: 1px solid #C0C0C0; border-left: 1px solid #C0C0C0" height="12" align="center" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0" align="center" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0" align="center" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-right: 1px solid #C0C0C0" align="center" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="12" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b> Name </b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3><br></font><p> <b> <input type="text" name="FullName" value="<?php echo $Receipt->getName()?>" disabled> </b></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>E-mail</b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3><br></font><p> <input type="text" name="Email" value="<?php echo $Receipt->getEmail()?>" disabled></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>Address</b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3><br></font><p> <input type="text" name="Address" value="<?php echo $Receipt->getAddress()?>" disabled></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>Phone Number</b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3><br></font><p> <input type="text" name="Phone Number" value="<?php echo $Receipt->getPhoneNumber()?>" disabled></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>Item</b></td>
				<td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3><br></font><p> <input type="text" name="Item" value="
                <?php echo $Receipt->getitem();?>" disabled></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>Amount</b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle><font size=3 ><br></font><p> <input type="text" name="Amount" value="<?php echo $Receipt->getamount()?>" disabled></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="25" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0; border-left: 1px solid #C0C0C0; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#000000"><b>Time of Donation</b></td>
                <td style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0; border-left: 1px solid #000000; border-right: 1px solid #C0C0C0" align="center" valign=middle sdnum="1033;0;&quot;$&quot;#,##0.00_);\(&quot;$&quot;#,##0.00\)"><font size=3><br></font><p> <input type="text" name="Time" value="<?php echo $Receipt->getcreated_at()?>" disabled ></p></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="21" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td align="left" valign=bottom bgcolor="#ff5722"><b><br></b></td>
                <td align="left" valign=middle bgcolor="#ff5722"><b><br></b></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0" height="14" align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td align="left" valign=bottom bgcolor="#ff5722"><br></td>
                <td style="border-right: 1px solid #C0C0C0" align="left" valign=top bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid #C0C0C0; border-right: 1px solid #C0C0C0" colspan=4 height="21" align="center" valign=bottom bgcolor="#ff5722"><b><font size=3 color="#FFFFFF">Thank you for your generous support !</font></b></td>
                </tr>
            <tr>
                <td style="border-bottom: 1px solid #C0C0C0; border-left: 1px solid #C0C0C0" height="14" align="center" valign=middle bgcolor="#ff5722"><b><i><font size=4><br></font></i></b></td>
                <td style="border-bottom: 1px solid #C0C0C0" align="center" valign=middle bgcolor="#ff5722"><b><i><font size=4><br></font></i></b></td>
                <td style="border-bottom: 1px solid #C0C0C0" align="center" valign=middle bgcolor="#ff5722"><b><i><font size=4><br></font></i></b></td>
                <td style="border-bottom: 1px solid #C0C0C0; border-right: 1px solid #C0C0C0" align="left" valign=bottom bgcolor="#ff5722"><br></td>
            </tr>
            <tr>
                <td height="14" align="left" valign=bottom><br></td>
                <td align="left" valign=bottom><br></td>
                <td align="left" valign=bottom><br></td>
                <td align="left" valign=bottom><br></td>
            </tr>
        </table>
		
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
</form>