<?php 
include_once 'HeaderAdmin.html';
?>
		<div class="fh5co-hero">
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
                <label for="Report">Choose a Report</label>
        <form action="reportcontroller.php" method="POST">
            <select name="Report" id="Report" onclick="showevent()">
                <option value="ReportDonation" onclick="ShowDonation()">Donation Report</option>
                <option value="ReportOrphan" onclick="ShowOrphan()">Orphan Report</option>
				<!-- -->
				<option value="ReportEvent" >Event Report</option>
				<option value="ReportEnroll" onclick="showenroll()">Enrollment Report</option>
				<option value="ReportDmov" onclick="showedmov()">ReportDmov</option>
            </select> 

            <label for="Report" id="label" style="display: none;">Choose a Option:</label>

            <div id="DonationOption" style="display: none;">
                <input type="checkbox" id="Types" name="DonationOption" value="Types" style="display: inline-block;">
                Types</input><br>
			</div>
			<div id="OrphanOption" style="display: none;">
                <input type="checkbox" id="Types" name="OrphanOption" value="Types" style="display: inline-block;">
                Types</input><br>
            </div>
			<div id="EventOption" style="display: none;">
                <input type="checkbox" id="Types" name="EventOption" value="Types" style="display: inline-block;">
                Types</input><br>
			</div>
			<div id="EnrollOption" style="display: none;">
                <input type="checkbox" id="Types" name="EnrollOption" value="Types" style="display: inline-block;">
                T</input><br>
			</div>
			<div id="Dmovoption" style="display: none;">
                <input type="checkbox" id="Types" name="Dmovoption" value="Types" style="display: inline-block;">
                T</input><br>
            </div>
            <button id="btn">Generate</button>
        </form>
        
        <script>

                function ShowDonation()
                {
                    document.getElementById("DonationOption").style.display = 'inline-block';
                }
				function showdmov()
				{
					document.getElementById("Dmovoption").style.display = 'inline-block';
				}
				function showevent()
                {
					document.getElementById("ReportEvent").style.display = 'inline-block';
				}
				function showenroll()
				{
					document.getElementById("EnrollOption").style.display = 'inline-block';
				}
                function ShowOrphan()
                {
                    document.getElementById("label").style.display = 'none';
                    document.getElementById("OrphanOption").style.display = 'none';
                }
        </script>
			</div>
            
		</div>
		<!-- end:header-top -->





		<!-- fh5co-content-section -->


		<!-- END What we do -->


	
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

