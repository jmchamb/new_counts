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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/enrollment-banner.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Enrollment</h1>
	</div>
</div>

<?php //include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Enrollment</font></p>
	</div>
</div>

<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Enrollment Landing Page</b></h3>
		<p align="left">Enrollment dashboards allow you to explore the characteristics of students who have applied, been accepted or enrolled at CSUN as well as the ratio of students to faculty.<br>
			&nbsp;&#8226;&nbsp;The <b>Application to Enrollment</b> dashboards display counts of applicants from application to admission to enrollment.<br>
			&nbsp;&#8226;&nbsp;The <b>Enrollment by Student Characteristics</b> dashboards display counts of enrolled students along with their characteristics for all students or for new student cohorts.<br>
		</p>
		<br>
		
		<!--Start of Enrollment section-->
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
					Application to Enrollment 
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Explore who applies, is admitted, and enrolls at CSUN by admission term with the capacity to filter to specific colleges, programs, 
					and disaggregate by student characteristics.<br><br>
					&#8627;<b>Application/admission/enrollment</b> - disaggregate based on student characteristics like type (first-time freshmen, first-time transfer, graduate, returning, and more), ethnicity, and more.<br>&nbsp;&nbsp;
					<a href="apps_admits_and_enrolls.php">https://www.csun.edu/counts/apps_admits_and_enrolls.php</a><br>
					&#8627;<b>Application/admission/enrollment by feeder school</b> - explore the previous institutions students attended before applying to CSUN.<br>&nbsp;&nbsp;
					<a href="apps_admits_and_enrolls_feeder.php">https://www.csun.edu/counts/apps_admits_and_enrolls_feeder.php</a><br>
			  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Enrollment by Student Characteristics 
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					There are two versions of each of these dashboards:<br>
					&nbsp;&#8226;&nbsp;<b>Trends over Time</b> versions allow you to explore enrollment by selecting a featured view (undergraduate, graduate) and filtering to a specific set of students like by college or department, by ethnicity, age, attendance status and more.<br>
					&nbsp;&#8226;&nbsp;With <b>Build your Own</b> versions, you can disaggregate (break down) the data by selecting rows and columns. For example, compare the percent of students enrolled in the university, a college or department by race-ethnicity, gender, first generation status, Pell status, and more.<br><br>
					
					<b>Characteristics of All Students</b> - Explore the characteristics of all enrolled students. Display counts by major or minor.<br>
					&nbsp;&#8627;Trends over Time</a><br>&nbsp;&nbsp;
					<a href="all_current_students.php">https://www.csun.edu/counts/all_current_students.php</a><br>
					&nbsp;&#8627;Build Your Own</a><br>&nbsp;&nbsp;
					<a href="byor_all_current_students.php">https://www.csun.edu/counts/byor_all_current_students.php</a><br><br>
					
					<b>Characteristics of New Student Cohorts</b> - Each year a new cohort of students enrolls at CSUN for the first time. Explore the characteristics of these new student cohorts. Select all new students, all new undergraduates, new first-time freshmen, new first-time transfers, new graduate students and more.<br>
					&nbsp;&#8627;Trends over Time</a><br>&nbsp;&nbsp;
					<a href="characteristics-of-new-students.php">https://www.csun.edu/counts/characteristics-of-new-students.php</a><br>
					&nbsp;&#8627;Build Your Own</a><br>&nbsp;&nbsp;
					<a href="byor_all_new_students.php">https://www.csun.edu/counts/byor_all_new_students.php</a><br>
				</div>
			  </div>
		  </div>		  
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of Enrollment section-->
	
	</div>
</div>
<br>


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