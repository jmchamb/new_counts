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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/student-success.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Student Success Data Tools</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Student Success Data Tools</font></p>
	</div>
</div>


<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Student Success Data Tools Landing Page</b></h3>
		<p align="left">These dashboards, accessible behind a login, allow CSUN faculty and staff to explore data associated with student success.</p>
		<br>		
	</div>
	
	<!--Start of Student Success Data Tools section-->
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
					Course Impact 
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					How are grades in a particular course or courses associated with retention and graduation?<br>
				<a href="https://counts.csun.edu/t/IR/views/CSUN_Course_Impact/CourseImpact" target="blank">https://counts.csun.edu/t/IR/views/CSUN_Course_Impact/CourseImpact</a>
			  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Course Outcome Tracker 
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					How have DFU rates changed over time? How are DFU rates associated with student characteristics?<br>
					<a href="https://counts.csun.edu/t/IR/views/CoursePerformanceTracker_16288956841430/CourseOutcomeTracker" target="blank">https://counts.csun.edu/t/IR/views/CoursePerformanceTracker_16288956841430/CourseOutcomeTracker</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R3 -->
		  <div class="card">
			  <div class="card-header" id="heading3">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Course Pathways
				  </button>
				</p>
			  </div>

			  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					This dashboard is designed to explore course sequences. Are grades in a prerequisite course associated with grades in a subsequent course?<br>
					<a href="https://counts.csun.edu/t/IR/views/CoursePathways/CoursePathways" target="blank">https://counts.csun.edu/t/IR/views/CoursePathways/CoursePathways</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R4 -->
		  <div class="card">
			  <div class="card-header" id="heading4">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Courses New Students Struggle With
				  </button>
				</p>
			  </div>

			  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Did you know that 80% of the grades of D, F, or Unauthorized withdrawal that new students receive in their first year come from just 10% of the courses they take? 
					This dashboard allow users to explore data for the courses first-time freshmen and first-time transfers struggle with in their first semester or year.<br>
					<a href="https://counts.csun.edu/t/IR/views/CoursePathways/CoursePathways" target="blank">https://counts.csun.edu/t/IR/views/CoursePathways/CoursePathways</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R5 -->
		  <div class="card">
			  <div class="card-header" id="heading5">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Credit Momentum
				  </button>
				</p>
			  </div>

			  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Although students are considered “full time” if they enroll in 12 units per semester, they cannot graduate in four years unless they take 15 units per semester or 30 units per academic year. 
					Credit Momentum refers to administrative changes that were made to support more CSUN students to enroll in 15 units per semester or 30 units across their first year. This dashboard allows 
					users to look at the characteristics of students who enrolled in 15 units as compared with those who enrolled in 12 units and to explore the outcomes associated with enrolling in 15 in a semester or 30 for the year.<br>
					<a href="https://counts.csun.edu/t/IR/views/CreditMomentum/WhoAreMomentumStudents" target="blank">https://counts.csun.edu/t/IR/views/CreditMomentum/WhoAreMomentumStudents</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R6 -->
		  <div class="card">
			  <div class="card-header" id="heading6">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Major Migration
				  </button>
				</p>
			  </div>

			  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					In this dashboard, users can explore changes in major across semesters and years. A color-coded chart shows how many students from a specific college, department or major stayed in 
					that major, “migrated” to a different major, stopped out or graduated in subsequent terms.<br>
					<a href="https://counts.csun.edu/t/IR/views/FreshmanMajorMigration/MajorMigration" target="blank">https://counts.csun.edu/t/IR/views/FreshmanMajorMigration/MajorMigration</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R7 -->
		  <div class="card">
			  <div class="card-header" id="heading7">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Green Zone Outcomes
				  </button>
				</p>
			  </div>

			  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					The “Green Zone” was introduced at CSUN as part of the CSUN Black Student Success Initiative. That report focused on Black/African American first-time freshmen (FTF) who entered between Fall 2013 and Fall 2017 and found higher 6-year graduation rates 
					for students in a “green zone”. This dashboard builds on that analysis by comparing retention, GPA, unit accumulation, and graduation outcomes for students who are and are not in the Green Zone.<br>
					By default, the dashboard displays data for Black/African-American students. However, the original report found that the Green Zone criteria were predictive of success across racial and ethnic groups. Users can select other groups using the Ethnicity drop-down menu.<br>
					<a href="https://counts.csun.edu/#/site/IR/views/GreenZoneOutcomesDashboard/WhoAreGreenZoneStudents" target="blank">https://counts.csun.edu/#/site/IR/views/GreenZoneOutcomesDashboard/WhoAreGreenZoneStudents</a>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of Student Success Data Tools section-->
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