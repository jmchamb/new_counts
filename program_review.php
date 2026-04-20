<?php include('inc/header.php'); ?>

<!-- BANNER -->
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/student-outcomes.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Program Review</h1>
	</div>
</div>

<!-- START OF DROPDOWN MENUS -->
<div class="container mb-5">
    <div class="row mx-auto pt-3">

    	<!-- First Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding" id="main">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Section Counts
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="regular-sections.php" >Regular Sections</a> 
                	<a class="dropdown-item mb-3" href="supervision-sections.php" >Supervision Sections</a>
                	<a class="dropdown-item" href="average_section_size_by_level.php" >Section Size by Level</a>
				</ul>
			</div>
		</div>


		<!-- Second Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Degree Recipients
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="byor_all_degree_recipients.php">All Degree Recipients</a> 
					<a class="dropdown-item pl-5 mb-3" href="byor_undergraduate_degree_recipients.php" >Undergraduate <br> Degree Recipients</a>
					<a class="dropdown-item pl-5 mb-3" href="byor_masters_degree_recipients.php" >Master's Degree <br> Recipients</a>
					<a class="dropdown-item pl-5 mb-3" href="byor_doctorate_degree_recipients.php" >Doctorate Degree <br> Recipients</a>
                	<a class="dropdown-item pl-5" href="byor_minors_earned.php" >Minors Earned</a>
				</ul>
			</div>
		</div>

		
		<!-- Third Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Faculty <br>Characteristics 
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="byor_all_faculty_characteristics.php" >All Faculty Characteristics</a> 
					<a class="dropdown-item pl-5 mb-3" href="byor_tenured_and_tenure_track_faculty_characteristics.php" >Tenured and <br>Tenure-Track Faculty<br>Characteristics</a>
                	<a class="dropdown-item pl-5" href="byor_non-tenure_track_faculty_characteristics.php" >Lecturer <br>Characteristics</a>
				</ul>
			</div>
		</div>


		<!-- Fourth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)" onclick="location.href='https://www.calstatepays.org/#/'">
			    Alumni Earning
			</button>

			<!--<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="graduation_rates_byor.php" >CSUN Graduation Rate<br>by Cohort</a>	
				</ul>
			</div>-->
		</div>


		<!-- Fifth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Applicants, Admits, <br>and Enrolls
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="apps_admits_and_enrolls.php" >Applicants, Admissions, <br>and Enrollments</a> 
					<a class="dropdown-item" href="apps_admits_and_enrolls_feeder.php" >Applicants, Admissions, <br>and Enrollments <br>by Last School Attended</a>
				</ul>
			</div>
		</div>
		
		<!-- Sixth Dropdown Menu -->
      	
		
		<!-- Seventh Dropdown Menu -->
      	

	</div>
</div>
<!-- End of Dropdown Menu -->

<!-- COMING SOON -->
<!--<div class="container mt-5 mb-5">
	<div class="row comingsoon-title">
		<p style="font-size: min(4vw,24px)">Coming Soon</p>
	</div>

	<div class="row mx-auto">
		<div class="col-sm-6 col-md-3">
			<div class="card comingsoon" style="max-width: 18rem;">
				<div class="card-body">
					<h5 class="card-title" style="font-size: min(4vw,22px);">Faculty Characteristics</h5>
				</div>
			</div>
		</div>
	</div>
</div>-->
<!-- End of Coming Soon -->

<!-- VIEW ON MOBILE -->
<div class="container mb-5">
	<div class="row mobile-title">
		<p style="font-size: min(4vw,24px)">View on Mobile? Use Counts on the Go!</p>	
	</div>

	<div class="row">
		<div class="col-lg-12">  
          <a href="https://counts.csun.edu/t/IR/views/QuickfactsUpdated/CSUNQUICKFACTSBYYEAR?iframeSizedToWindow=true&:embed=y&:showAppBanner=false&:display_count=no&:showVizHome=no" id="mobile_view" style="font-size: min(4vw, 22px)" class="btn btn-wrap-text overflown-visible" role="button">Counts On the Go!
   
              <!-- Mobile Icon -->
              <i class="fa fa-mobile" aria-hidden="true">
              </i>
          </a>
       
        </div>
	</div>
<!--Help section -->
<div class="container mb-5">
	<div class="row">
		<div class="col-lg-2"><img src="imgs/question.png" width="75px" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
		<font class="text-danger">Need help?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href ="tutorials.php"><u>Get Help Navigating CSUN Counts</u></a><br>
			&nbsp;&nbsp;<a class="text-danger" href ="https://www.csun.edu/institutional-research/contact-us#dataconsultant"><u>Find your Data Consultant</u></a><br> 
			&nbsp;&nbsp;<a class="text-danger" href ="mailto:ir@csun.edu"><u>Email IR</u></a> 
			<!--<a class="text-danger">or use our livechat by clicking where it says “How can we help you?” in the lower right corner.</a>-->
		</div>   
		<div class="col-lg-2"><img src="imgs/hand-graph.png" width="75px" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
			<font class="text-danger">Can’t find data you need?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href="https://ide.csun.edu:8443/openweb/irdatareqindex.html"><u>Request Data</u></a>
		</div>
	</div>
	<p>&nbsp;</p>
	<?php include('inc/bottom_links.php'); ?>
</div>

<?php include('inc/footer.php'); ?>