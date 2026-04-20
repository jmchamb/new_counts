<meta http-equiv="refresh" content="0; url=index.php">
<?php include('inc/header.php'); ?>

<div class="cont d-flex">
    <div class="home-banner mx-auto">
        <img src="imgs/build_your_own_reports.jpg" class="img-fluid"  alt="dashboard banner of broken down graph">
    </div> 
</div>
<?php include('inc/secondary-nav.php') ?>

<!-- FAQ LONG BUTTON -->

<div class="main-content d-flex">
	 <div class="container mx-auto mt-3 mb-3">
      	<div class="row">
			<div class="long-btn mx-auto">
		          <a href="tutorials.php" id="faq" style="font-size: min(4vw, 22px)" class="btn" role="button">Need Help Navigating CSUN Counts?
		        <!-- originally linked to faq.php#standard_reports -->
		        

			        <!-- FAQ Icon -->
	            	<i class="fa fa-comments-o" aria-hidden="true"></i>
            	</a>

		    </div>
		</div>
	</div>

</div>


<!-- START OF DROPDOWN MENUS -->
<div class="container mb-5">
    <div class="row mx-auto pt-3">

    	<!-- First Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)" onclick="location.href='byor_all_current_students.php'">
			    All Student <br/>Characteristics
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<!--<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item pl-3 mb-3" href="byor_all_current_students.php">All Student Characteristics</a> 
					<a class="dropdown-item mb-3" href="byor_all_undergraduates_students.php" > All Undergraduate <br> Students</a>
					<a class="dropdown-item mb-3" href="byor_all_current_graduate_students.php" >All Graduate Students</a>
					<a class="dropdown-item pl-5 mb-3" href="byor_masters_students.php" >Masters Students</a>
                	<a class="dropdown-item pl-5 mb-3" href="byor_current_credential_students.php" >Credential Students</a>
                	<a class="dropdown-item pl-5" href="byor_current_doctoral_students.php" >Doctoral Students</a>
				</ul>-->
			</div>
		</div>


		<!-- Second Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)" onclick="location.href='byor_all_new_students.php'">
			     New Student <br/>Characteristics
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<!--<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item pl-3 mb-3" href="byor_all_new_students.php">New Student Characteristics</a> 
					<a class="dropdown-item mb-3" href="byor_all_new_undergraduates.php" >All New Undergraduates</a>
					<a class="dropdown-item pl-5 mb-3" href="byor_first_time_freshmen.php" >First-Time <br>Freshman Cohorts</a>
					<a class="dropdown-item pl-5 mb-3" href="byor_undergraduate_transfers.php" >Undergraduate <br>Transfer Cohorts</a>
                	<a class="dropdown-item mb-3" href="byor_all_new_graduate_students.php" >All New Graduate<br> Students</a>
                	<a class="dropdown-item pl-5 mb-3" href="byor_new_masters_students.php" >Masters Students</a>
                    <a class="dropdown-item pl-5 mb-3" href="byor_new_credential_students.php" >Credential Students</a>
                    <a class="dropdown-item pl-5" href="byor_new_doctoral_students.php" >Doctoral Students</a>
				</ul>-->
			</div>
		</div>

		
		<!-- Third Dropdown Menu -->
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


		<!-- Fourth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Graduation Rates
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="graduation_rates_byor.php" >CSUN Graduation Rate<br>by Cohort</a>	
				</ul>
			</div>
		</div>


		<!-- Fifth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Continuation Rates
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="continuation_rates_byor.php" >One-Year Continuation <br> Rate</a> 
					<a class="dropdown-item" href="continued_enrollment_rates_byor.php" >Continued Enrollment at <br>CSUN</a>
				</ul>
			</div>
		</div>
		
		<!-- Sixth Dropdown Menu -->
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
		
		<!-- Seventh Dropdown Menu -->
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
	
</div>


<?php include('inc/bottom_links.php'); ?>

<?php include('inc/footer.php'); ?>