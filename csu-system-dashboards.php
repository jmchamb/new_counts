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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/csu-system-dashboard.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">CSU System Dashboards</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;CSU System Dashboards</font></p>
	</div>
</div>


<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>CSU System Dashboards Landing Page</b></h3>
		<p align="left">In addition to dashboards created and maintained at CSUN, the California State University system offers dashboards that facilitate exploration of both campus-level data <br>and cross-campus comparisons.</p>
		<br>		
	</div>
	
	<!--Start of CSU System Dashboards section-->
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
					CSU Student Success Dashboards
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					The CSU created a suite of Student Success dashboards that explore:<br>
					&nbsp;&#8226;&nbsp;Department Dashboard - Find out how students in your courses, majors and departments are doing.<br>
					&nbsp;&#8226;&nbsp;CSU by the Numbers - Get insight into your historic graduation rate and equity gap trends.<br>
					&nbsp;&#8226;&nbsp;Equity Gaps Dashboard - Find out what you can do to narrow equity gaps on your campus.<br>
					&nbsp;&#8226;&nbsp;Dashboard Reports - Celebrate progress and identify opportunities on your campus.<br>
					&nbsp;&#8226;&nbsp;<b>Available behind a login for CSUN faculty and staff</b><br>
					<a href="https://www.calstate.edu/dashboard" target="blank">https://www.calstate.edu/dashboard</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R5 -->
		  <div class="card">
			  <div class="card-header" id="heading4">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					CSU Applications & Admissions
				  </button>
				</p>
			  </div>

			  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading4" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					The CSU System Dashboards include two dashboards for applications, admissions, and enrollment data by campus for all CSU campuses.<br><br>
					The <b>Admissions Data</b> dashboard includes information about all admissions (undergraduate, graduate) for trends over time, outcomes (i.e., campus enrolled), applicant characteristics and demographics, and campus overlap.<br>
					<a href="https://tableau.calstate.edu/views/Application_withsystemwide/AppAdmitEnroll" target="blank">https://tableau.calstate.edu/views/Application_withsystemwide/AppAdmitEnroll</a><br><br>
					The <b>Undergraduate Admissions Data by Discipline</b> dashboard provides the ability to examine a subset of data by Major and Discipline (i.e., groups of majors).<br>
					<a href="https://tableau.calstate.edu/views/ApplicationsandAdmissionsDashboardbyDiscipline/AppAdmitEnrollbyDiscipline" target="blank">https://tableau.calstate.edu/views/ApplicationsandAdmissionsDashboardbyDiscipline/AppAdmitEnrollbyDiscipline</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					CSU Enrollment
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					The CSU Enrollment dashboard provides data for undergraduate and graduate students, including enrollment figures broken down by level, discipline, ethnicity and campus<br>
					<a href="https://tableau.calstate.edu/views/SelfEnrollmentDashboard/EnrollmentSummary" target="blank">https://tableau.calstate.edu/views/SelfEnrollmentDashboard/EnrollmentSummary</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R3 -->
		  <div class="card">
			  <div class="card-header" id="heading3">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					CSU Labor Market Outcomes
				  </button>
				</p>
			  </div>

			  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					The CSU Labor Market Outcomes dashboard features information about postsecondary employment and the earnings of those who’ve recently graduated from the CSU.<br>
					<a href="https://tableau.calstate.edu/views/LaborMarketOutcomes/LaborMarketDashboard" target="blank">https://tableau.calstate.edu/views/LaborMarketOutcomes/LaborMarketDashboard</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R4 -->
		  <div class="card">
			  <div class="card-header" id="heading4">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					More CSU Data Dashboards
				  </button>
				</p>
			  </div>

			  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					More CSU data dashboards on applications and admissions, degrees issues, graduation rates, and more can be found on the Data Dashboards page of the CSU Office of Institutional Research & Analytics<br>
					<a href="https://www.calstate.edu/data-center/institutional-research-analyses/Pages/data-dashboards.aspx" target="blank">https://www.calstate.edu/data-center/institutional-research-analyses/Pages/data-dashboards.aspx</a>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of CSU System Dashboards section-->
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