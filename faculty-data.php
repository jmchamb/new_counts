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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/faculty-ideas.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Faculty Data</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Faculty Data</font></p>
	</div>
</div>


<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Faculty Data Landing Page</b></h3>
		<p align="left">Explore the number and characteristics of faculty at CSUN, including tenured or tenure track and lecturer faculty.</p>
		<br>		
	</div>
	
	<!--Start of Faculty Data section-->
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
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Faculty Characteristics 
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					See the number of faculty for the university, college or department.<br><br>
					The Data Selector drop-down menu allows users to toggle between <b>headcount</b> and <b>full-time equivalent</b> faculty 
					(based on the number of units taught, see the <a href="ir-glossary.php#F">IR Data Glossary</a> for a definition and details).<br><br>
					
					There are two versions of each of these dashboards:<br>
					&nbsp;&#8226;&nbsp;<b>Trends over Time</b> versions allow you to explore faculty data by filtering to a specific set of faculty, for example, by college or department, by ethnicity, age, time base employment (for Lecturers) and more.<br>
					&nbsp;&#8226;&nbsp;With <b>Build your Own</b> versions, you can disaggregate (break down) the data by selecting rows and columns. For example, explore by academic rank (Professor, Associate Professor, Assistant Professor, Lecturer), race-ethnicity, 
					gender, time base employment (for Lecturers), and more.<br><br>
					
					Select the dashboards to explore:<br>
					
					<b>All Faculty Characteristics</b><br>
					&nbsp;&nbsp;&nbsp;&#8627;Trends over Time<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="all_faculty_characteristics.php" >https://www.csun.edu/counts/all_faculty_characteristics.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Build Your Own<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="byor_all_faculty_characteristics.php" >https://www.csun.edu/counts/byor_all_faculty_characteristics.php</a><br>
					<b>Tenured and Tenure-Track Faculty Characteristics</b><br>
					&nbsp;&nbsp;&nbsp;&#8627;Trends over Time<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="tenured_and_tenure_track_faculty_characteristics.php" >https://www.csun.edu/counts/tenured_and_tenure_track_faculty_characteristics.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Build Your Own<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="byor_tenured_and_tenure_track_faculty_characteristics.php" >https://www.csun.edu/counts/byor_tenured_and_tenure_track_faculty_characteristics.php</a><br>
					<b>Tenured and Tenure-Track Faculty Characteristics</b><br>
					&nbsp;&nbsp;&nbsp;&#8627;Trends over Time<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="non-tenure_track_faculty_characteristics.php" >https://www.csun.edu/counts/non-tenure_track_faculty_characteristics.php</a><br>
					&nbsp;&nbsp;&nbsp;&#8627;Build Your Own<br>&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;<a href="byor_non-tenure_track_faculty_characteristics.php" >https://www.csun.edu/counts/byor_non-tenure_track_faculty_characteristics.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Student-Faculty Ratios
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Explore the ratio of students to faculty for the university or departments. These are calculated based on full-time equivalents. For details and definitions, visit the <a href="ir-glossary.php#F">IR Data Glossary</a> entries for full-time equivalent students (FTES) and full-time equivalent faculty (FTEF).<br><br>
					&#8627;Display ratios for the <b>University</b><br>&nbsp;&nbsp;
					<a href="faculty_employment_status_university.php">https://www.csun.edu/counts/faculty_employment_status_university.php</a><br>
					&#8627;Display ratios for <b>Departments (and Colleges)</b><br>&nbsp;&nbsp;
					<a href="faculty_employment_status_department.php">https://www.csun.edu/counts/faculty_employment_status_department.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of Faculty Data section-->
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