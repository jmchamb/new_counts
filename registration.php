<meta http-equiv="refresh" content="0; url=index.php">
<?php include('inc/header.php'); ?>

<div class="cont d-flex">
    <div class="home-banner mx-auto">
        <img src="imgs/registration_reports-28.jpg" class="img-fluid"  alt="dashboard banner of broken down graph">
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
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Daily Reports
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="fall_spring_registration.php" >Fall/Spring Daily <br> Registration</a> 
					<a class="dropdown-item pl-5 mb-3" href="fall_semester_headcounts_major.php" >Fall Semester <br> Headcounts by Major</a>
					<a class="dropdown-item pl-5 mb-3" href="spring_semester_headcounts_major.php" >Spring Semester <br> Headcounts by Major</a>
					<a class="dropdown-item pl-5 mb-3" href="fall_spring_ftes_by_department.php" >Fall/Spring <br>FTES By Department</a>
                	<a class="dropdown-item mb-3" href="summer_daily_registration.php" >Summer Daily <br> Registration</a>
					<a class="dropdown-item mb-3" href="summer_daily_registration_state.php" >Summer Daily <br> Registration <br> State Enrollment</a>
					<a class="dropdown-item pl-5 mb-3" href="summer_semester_headcounts_major.php" >Summer Semester by <br> Headcounts by Major</a>
                	<a class="dropdown-item pl-5 mb-3" href="summer_ftes_by_department.php" >Summer FTES by <br> Department</a>
					<a class="dropdown-item pl-5 mb-3" href="summer_ftes_by_department_state.php" >Summer FTES by <br> Department <br> State Enrollment</a>
                    <a class="dropdown-item mb-3" href="headcount_by_level.php" >Headcount by Level</a>
                    <a class="dropdown-item" href="masters_headcount_by_department.php" >Master's Headcount <br> by Department</a>
				</ul>
			</div>
		</div>


		<!-- Second Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Historic Daily <br> Reports
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="headcount_by_major.php" >Headcount by Major</a> 
                	<a class="dropdown-item mb-3" href="fall_spring_ftes_by_department.php" >Fall/Spring <br>FTES By Department</a>
                	<a class="dropdown-item" href="summer_ftes_by_department.php" >Summer FTES by <br> Department</a>			 
					<a class="dropdown-item" href="summer_ftes_by_department_state.php" >Summer FTES by <br> Department <br> State Enrollment</a>
				</ul>
			</div>
		</div>


		<!-- Third Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Demand Estimation
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item" href="course_capacity.php">Course Capacity</a> 	 
				</ul>
			</div>
		</div>


		<!-- Fourth Dropdown Menu -->
      	<div class="col-sm-6 col-md-3 reports_menu_dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: min(4vw,20px)">
			    Multi-Year Report
			</button>

			<div class="dropdown-menu report_links" aria-labelledby="dropdownMenuButton">
				<ul class="list-group" style="font-size: min(4vw, 18px);">
					<a class="dropdown-item mb-3" href="multi_year_student_headcount_by_major.php" >All Student Headcount <br> by Major</a> 
                	<a class="dropdown-item mb-3" href="multi_year_new_student_headcount_by_major.php" >New Student Headcount <br> by Major</a>
                	<a class="dropdown-item mb-3" href="multi_year_ftes_by_department.php" >FTES by Department</a>
                    <a class="dropdown-item" href="multi_year_ftes_by_course.php" >FTES by Course</a>
                </ul>
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