<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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

        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
        <style>
            select option { color:black; }
            .form-control{
                color: red;
            }
            .multiselect {
                width: 200px;
                color: black;
            }
            
            .selectBox {
                position: relative;
            }
            
            .selectBox select {
                width: 100%;
                font-weight: bold;
            }
            
            .overSelect {
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
            }
            
            #checkboxes {
                display: none;
                border: 1px #dadada solid;
            }
            
            #checkboxes label {
                display: block;
            }
            
            #checkboxes label:hover {
                background-color: #1e90ff;
            }
        </style>
        
    </head>
    <body>
    
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="Visitor-index.html">Al Orman</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="Visitor-index.html">Home</a>
							</li>
							<li>
								<a href="index.html" class="fh5co-sub-ddown">Logout</a>
								
							</li>
						
							<li><a href="about.html">About</a></li>
						
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	
		<div class="fh5co-hero">
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
                
   				 
					<h2><strong>Donate Here!</strong></h2>
				
              <!--  <div id="dvPassportxx" name="dvPassportxx" style="display: none">
    			Visa card number:
   				 <input type="number" name="cardnumber" id="txtvisa" />
    			<input type="date" name="dob" id="dob" placeholder="Expire date" required/>
    			<input type="number" class="form-input" name="sec" id="sec" placeholder="Security code" required/>
				</div>

				<div id="Vodafonex" style="display: none">
  				  <input type="number" name="Phonenumber" id="PhoneNumber" placeholder="Phone Number" required/>
   
    			<input type="number" class="form-input" name="Amount" id="Amount" placeholder="Amount" required/>
				</div>
	         		-->
                <input  type="hidden" name="method-id" id="method-id" pattern="" />
                <form action="Donate.php" method="post">
	
                <div class="form-control">
                    
                <select id="method" onclick="changestatus()">
                <option value="" disabled="disabled" selected>Donation Type</option>
            <?php
                    include 'DonationMethodModel.php';
                    class DonationMethodView
                    {
                         public function Show_AllDMethods()
                         {
                            $Result= array();
                            $Result=DonationMethod::SelectAllMethodsInDB();
                            $i=0;
                            while($Result[$i]!=NULL)
                            {
                                    ?>
                                    <option value="<?php echo $i+1 ?>" id="ITEMS" name="ITEMS"> <?php echo $Result[$i]->getName();?> </option>
                                    
                                    <?php
                                $i++;
                            }
                          }
					}
					//"<a href=OrphanController.php?id=".$Result[$i]->getOId().

                $dmv=new DonationMethodView();
                $dmv->Show_AllDMethods();
                ?>
                    
				</select>
				<!---- <div id="dvPassportxx" style="display: none">
    			Visa card number:
   				 <input type="number" name="cardnumber" id="txtvisa" />
    			<input type="date" class="form-input" name="dob" id="dob" placeholder="Expire date" required/>
    			<input type="number" class="form-input" name="sec" id="sec" placeholder="Security code" required/>
				</div>

				<div id="Vodafonex" style="display: none">
  				  <input type="number" name="Phonenumber" id="PhoneNumber" placeholder="Phone Number" required/>
   
    			<input type="number" class="form-input" name="Amount" id="Amount" placeholder="Amount" required/>
				</div> -->
                        </div>
                    
                    <div class="multiselect">
                      <div class="selectBox" onclick="showCheckboxes()">
                        <select name="select2">
                          <option>Select an option</option>
                        </select>
                        <div class="overSelect"></div>
                      </div>
                      <div id="checkboxes" name="textBoxesValues">
                        <?php
                            include 'ItemsModel.php';
                            class ItemView
                            {
                                 public function Show_AllDItems()
                                {
                                    $Result= array();
                                    $Result=Item::SelectAllitemsInDB();                         
                                    $i=0;
                                    while($Result[$i]!=NULL)
                                    {
                                            ?>     
                                            <label for="<?php $i+1 ?>">
                                            <input type="text" id="IndexID[]" name="OptionsItems[]" placeholder="<?php echo $Result[$i]->getItem_Name();?>"/></label>
                                            <?php
                                        $i++;
                                    }
                                }
                            }
                            $dmv=new ItemView();
                            $dmv->Show_AllDItems();
                        ?>
                      </div>
                        
                    </div>
                    <div class="btn btn-primary btn-lg">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" value="Donate Now"/>
                        </div>
                </form>
                    
                    
			</div>

		</div>
            <script type="text/javascript">
                var expanded = false;
                function showCheckboxes() 
                {
                    var checkboxes = document.getElementById("checkboxes");
                    if (!expanded)
                    {
                        checkboxes.style.display = "block";
                        expanded = true;
                    }
                    else 
                    {
                        checkboxes.style.display = "none";
                        expanded = false;
                    }
                }
             /*   function changestatus()
                   {
    		          var method =  document.getElementById("method");
    		          var dvPassportxx = document.getElementById("dvPassportxx");
    		          var Vodafonex = document.getElementById("Vodafonex");
   			          dvPassportxx.style.display = method.value == "3" ? "block" : "none";
   			          Vodafonex.style.display = method.value == "4" ? "block" : "none";
				   }*/
                </script>
                
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Happy Giving</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Giving is Virtue.</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/cover_bg_2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/cover_bg_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Love</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Compassion</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Charity</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

		
		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_1.jpg); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_1.jpg); "> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpg); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div>

				
			</div>
		</div>
		

		
		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Philantrophist</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_1.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>Jean Doe, XYZ Co.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_2.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>John Doe, XYZ Co.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_3.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>John Doe, XYZ Co.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-content-section -->

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects. Support Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Water Project In Kenya</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Shelter Giving</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Shelter Giving</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Water Project In Kenya</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Water Project In Kenya</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Midical Mission</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END What we do -->


		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/cover_bg_1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/cover_bg_2.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/cover_bg_3.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
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

