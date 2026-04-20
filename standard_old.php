<?php include('inc/header.php'); ?>

<div class="cont d-flex">
    <div class="home-banner mx-auto">
        <img src="imgs/standard_reports.jpg" class="img-fluid"  alt="dashboard banner of broken down graph">
    </div> 
</div>

<?php include('inc/secondary-nav.php'); ?>

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


<!-- START OF DROPDOWN MENU -->
<div class="container mb-5">
    <div class="row mx-auto pt-3">

    	<!-- First Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)" onclick="location.href='all_current_students.php'">
			    All Student <br/>Characteristics
			</button>

			<!--<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item pl-3 mb-3" href="all_current_students.php" >All Student Characteristics</a> 
                	<a class="dropdown-item mb-3" href="current_undergraduate_students.php" > All Undergraduate<br>Students</a>
                	<a class="dropdown-item mb-3" href="all_current_graduate_students.php" >All Graduate Students</a>
                    <a class="dropdown-item pl-5 mb-3" href="current_masters_students.php" > Masters Students</a>
                    <a class="dropdown-item pl-5 mb-3" href="current_credential_students.php" >Credential Students</a>
                    <a class="dropdown-item pl-5" href="current_doctorate_students.php" >Doctoral Students</a>
				</ul>
			</div>-->
		</div>


		<!-- Second Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)" onclick="location.href='characteristics-of-new-students.php'">
			    New Student <br/>Characteristics
			</button>

			<!--<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px)">
					<a class="dropdown-item pl-3 mb-3" href="characteristics-of-new-students.php" >New Student Characteristics</a>	
					<a class="dropdown-item mb-3" href="all_new_undergraduates.php" >All New Undergraduates</a>
				    <a class="dropdown-item pl-5 mb-3" href="new_first_time_freshman.php" >First-Time <br> Freshman Cohorts</a>
				    <a class="dropdown-item pl-5 mb-3" href="new_undergraduate_transfers.php" >Undergraduate <br> Transfer Cohorts</a>
				    <a class="dropdown-item mb-3" href="all_new_graduate_students.php" >All New Graduate <br> Students</a>
				    <a class="dropdown-item pl-5 mb-3" href="all_new_masters_students.php" >Masters Students</a>
				    <a class="dropdown-item pl-5 mb-3" href="new_credential_students.php" >Credential Students</a>
				    <a class="dropdown-item pl-5 mb-3" href="all_new_doctorate_students.php" >Doctoral Students</a>
				</ul>
			</div>-->
		</div>


		<!-- Third Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Continuation Rates
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px)">
					<a class="dropdown-item mb-3" href="one_year_continuation_rate.php" >One-Year Continuation <br> Rate</a>	
					<a class="dropdown-item" href="continued_enrollment.php" >Continued Enrollment at <br> CSUN</a>
					<a class="dropdown-item" href="continuation_rate_by_semester.php" >Continued Enrollment at <br> CSUN by Semester</a>	
				</ul>
			</div>
		</div>
		
		<!-- Fourth Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Graduation Rates
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px)">
					<a class="dropdown-item mb-3" href="graduation-rates.php" > Graduation Rate by <br> Cohort</a>
					<a class="dropdown-item" href="graduation_rates_by_semester.php" >Graduation Rate by <br> Semester</a>		
				</ul>
			</div>
		</div>


		<!-- Fifth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Degree Recipients
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="all_degree_recipients.php" >All Degree Recipients</a> 
                	<a class="dropdown-item pl-5 mb-3" href="undergraduate_degree_recipients.php" >Undergraduate <br> Degrees</a>
                	<a class="dropdown-item pl-5 mb-3" href="masters_degree_recipients.php" >Masters Degrees</a>
                    <a class="dropdown-item pl-5 mb-3" href="doctorate_degree_recipients.php" > Doctoral Degrees</a>
                    <a class="dropdown-item pl-5" href="minors_earned.php" >Minors Earned</a>		 
				</ul>
			</div>
		</div>

		
		<!-- Sixth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Faculty <br> Characteristics
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="all_faculty_characteristics.php" >All Faculty Characteristics</a> 
                	<a class="dropdown-item pl-5 mb-3" href="tenured_and_tenure_track_faculty_characteristics.php" >Tenured and <br>Tenure-Track Faculty<br>Characteristics</a>
                	<a class="dropdown-item pl-5" href="non-tenure_track_faculty_characteristics.php" >Lecturer <br>Characteristics</a>		 
				</ul>
			</div>
		</div>


		<!-- Seventh Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Student-Faculty <br> Ratios
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="faculty_employment_status_university.php" >Ratios by Faculty <br> Employment Status - <br> University</a> 
                	<a class="dropdown-item" href="faculty_employment_status_department.php" >Ratios by Faculty <br> Employment Status - <br> Department</a>		 
				</ul>
			</div>
		</div>


		<!-- Eighth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Course Size
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item" href="course_level.php">Student-Faculty Ratios <br>by Course Level</a>		 
				</ul>
			</div>
		</div>


		<!-- Ninth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
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


		<!-- Tenth Dropdown Menu -->
		<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Course Enrollment
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="undergraduate_course_enrollment.php" >Undergraduate Course <br> Enrollment</a> 
                	<a class="dropdown-item mb-3" href="graduate_course_enrollment.php" >Graduate Course <br> Enrollment</a>
                	<a class="dropdown-item mb-3" href="undergraduate_course_list_summary_data.php" >Undergraduate Course <br>List Summary</a>
                    <a class="dropdown-item" href="graduate_course_list_summary_data.php" >Graduate Course <br> List Summary</a>		 
				</ul>
			</div>
		</div>
      

		<!-- Eleventh Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown nopadding">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Program Review
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="regular-sections.php" >Section Counts</a> 
                	<a class="dropdown-item mb-3" href="byor_all_degree_recipients.php" >Degree Recipients</a>
                	<a class="dropdown-item mb-3" href="byor_all_faculty_characteristics.php" >Faculty Characteristics</a>
                    <a class="dropdown-item" href="https://www.calstatepays.org/#/" >Alumni Earning</a>
			</div>
		</div>


	</div>
</div>





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