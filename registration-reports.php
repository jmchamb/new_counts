<script>
window.onload = function(){
	document.getElementById("collapseAll").click(); 
};

function toggleAllAccordions() {
  var button = document.getElementById("collapseAll");
  var accordionHeaders = document.querySelectorAll(".card-header button");
  var accordionCollapses = document.querySelectorAll(".accordion-collapse");
  
  var isCollapsed = Array.from(accordionHeaders).some(function (header) {
    return !header.classList.contains("collapsed");
  });

  if (isCollapsed) {
    button.innerHTML = "Expand all";
    accordionHeaders.forEach(function (header) {
      header.classList.add("collapsed");
    });
    accordionCollapses.forEach(function (collapse) {
      collapse.classList.remove("show");
    });
  } else {
    button.innerHTML = "Collapse all";
    accordionHeaders.forEach(function (header) {
      header.classList.remove("collapsed");
    });
    accordionCollapses.forEach(function (collapse) {
      collapse.classList.add("show");
    });
  }
}
</script>

<?php include('inc/header.php'); ?>

<!-- BANNER -->
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/registration-reports-banner.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Registration Reports</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Registration Reports</font></p>
	</div>
</div>

<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Registration Reports Landing Page</b></h3>
		<p align="left">
			These public dashboards allow users to explore live and historical data about students’ registration in classes.<br>
			&nbsp;&#8226;&nbsp;How many students or Full-Time Equivalent Students are enrolled on a given day during registration? See Daily Reports.<br>
			&nbsp;&#8226;&nbsp;How does registration this year compare with registration last year at the same point in the registration process? See Multi-Year Registration Reports.<br>
			&nbsp;&#8226;&nbsp;How full are course sections? See Demand Estimation.<br>		
		</p>
		<br>		
	</div>
	
	<!--Start of Registration Reports section-->
	<div class="container">
		<!--Expand All Button-->
		<div align="right">
			<button id="collapseAll" onclick="toggleAllAccordions()" class="btn btn-secondary mb-3" style="width: 150px">Expand all</button>
		</div>
		<!-- Start of the accordion -->
		<div class="faq_accordion mx-auto" id="faq_section">
		  <!-- R1 -->
		  <div class="card">
			  <div class="card-header" id="heading1">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Daily Reports
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					These dashboards show day-to-day changes by headcount or Full-Time Equivalent Students (FTES) relative to internal goals set so CSUN can meet CSU enrollment targets.<br><br>
					<b><font size="5">Daily Registration</font></b><br>
					&nbsp;&nbsp;<font size="4">Headcounts at the University and College Level</font><br>
					&nbsp;&nbsp;&nbsp;&#8627;Fall/Spring Daily Registration<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fall_spring_registration.php" >https://www.csun.edu/counts/fall_spring_registration.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Summer Daily Registration<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="summer_daily_registration_state.php" >https://www.csun.edu/counts/summer_daily_registration_state.php</a><br><br>
					&nbsp;&nbsp;<font size="4">Headcounts by Major</font><br>
					&nbsp;&nbsp;&nbsp;&#8627;Fall Semester Headcounts by Major<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fall_semester_headcounts_major.php" >https://www.csun.edu/counts/fall_semester_headcounts_major.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Spring Semester Headcounts by Major<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="spring_semester_headcounts_major.php" >https://www.csun.edu/counts/spring_semester_headcounts_major.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Summer Semester Headcounts by Major<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="summer_semester_headcounts_major.php" >https://www.csun.edu/counts/summer_semester_headcounts_major.php</a><br><br>
					&nbsp;&nbsp;<font size="4">FTES by Department</font><br>
					&nbsp;&nbsp;&nbsp;&#8627;Fall/Spring FTES by Department<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fall_spring_ftes_by_department.php" >https://www.csun.edu/counts/fall_spring_ftes_by_department.php</a><br>
					<!--&nbsp;&nbsp;&nbsp;&#8627;Summer FTES by Department Self Enrollment<br>
					&nbsp;&nbsp;&nbsp;<a href="summer_daily_registration.php" >https://www.csun.edu/counts/summer_daily_registration.php</a><br>-->
					&nbsp;&nbsp;&nbsp;&#8627;Summer FTES by Department<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="summer_ftes_by_department_state.php" >https://www.csun.edu/counts/summer_ftes_by_department_state.php</a><br><br>
					<!--&nbsp;&nbsp;&nbsp;&#8627;Summer FTES by Department<br>
					&nbsp;&nbsp;&nbsp;<a href="summer_ftes_by_department.php" >https://www.csun.edu/counts/summer_ftes_by_department.php</a><br>-->					
					<b><font size="5">Headcount by Level</font></b><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="headcount_by_level.php" >https://www.csun.edu/counts/headcount_by_level.php</a><br><br>
					<b><font size="5">Master’s Headcount by Department</font></b><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="masters_headcount_by_department.php" >https://www.csun.edu/counts/masters_headcount_by_department.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Multi-Year Registration Reports 
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					With these dashboards, users can compare registration data across multiple years at the college, department, course or student level.<br><br>
					&#8627;All Student Headcount by Major<br>
					&nbsp;&nbsp;<a href="multi_year_student_headcount_by_major.php" >https://www.csun.edu/counts/multi_year_student_headcount_by_major.php</a><br>
					&#8627;New Student Headcount by Major<br>
					&nbsp;&nbsp;<a href="multi_year_new_student_headcount_by_major.php" >https://www.csun.edu/counts/multi_year_new_student_headcount_by_major.php</a><br>
					&#8627;FTES by Department<br>
					&nbsp;&nbsp;<a href="multi_year_ftes_by_department.php" >https://www.csun.edu/counts/multi_year_ftes_by_department.php</a><br>
					&#8627;FTES by Course<br>
					&nbsp;&nbsp;<a href="multi_year_ftes_by_course.php" >https://www.csun.edu/counts/multi_year_ftes_by_course.php</a><br>	
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R3 -->
		  <div class="card">
			  <div class="card-header" id="heading3">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Demand Estimation
				  </button>
				</p>
			  </div>

			  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Course Capacity allows users to examine current semester and historical enrollment in courses by how full a section is including the day/time of the course.<br>
					&nbsp;&nbsp;<a href="course_capacity.php" >https://www.csun.edu/counts/course_capacity.php</a><br><br>
					<b>Note</b>: users can view courses and sections that have not met minimum enrollment limits by visiting the <b>Legacy Low Enrollment Report</b>.<br>
					&#8627;Low Enrollment<br>
					&nbsp;&nbsp;<a href="https://ide.csun.edu:8443/openweb/unilowenr.jsp" target="_blank" >https://ide.csun.edu:8443/openweb/unilowenr.jsp</a><br>
					&#8627;Low Enrollment by College<br>
					&nbsp;&nbsp;<a href="https://ide.csun.edu:8443/openweb/collowenr1.jsp" target="_blank" >https://ide.csun.edu:8443/openweb/collowenr1.jsp</a><br>
					&#8627;Low Enrollment by Department<br>
					&nbsp;&nbsp;<a href="https://ide.csun.edu:8443/openweb/deplowenrl1.jsp" target="_blank" >https://ide.csun.edu:8443/openweb/deplowenrl1.jsp</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of Registration Reports section-->
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

<!--Help section -->
<div class="container mb-5">
	<div class="row">
		<div class="col-lg-2"><img src="imgs/question.png" width="75px" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
		<font class="text-danger">Need help?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href ="tutorials.php"><u>Get Help Navigating CSUN Counts</u></a><br>
			&nbsp;&nbsp;<a class="text-danger" href ="//www.csun.edu/institutional-research/contact-us#dataconsultant"><u>Find your Data Consultant</u></a><br> 
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
	<?php include('inc/footer.php'); ?>	
</div>