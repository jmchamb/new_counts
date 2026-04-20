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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/course-characteristics.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Course Characteristics</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Course Characteristics</font></p>
	</div>
</div>


<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Course Characteristics Landing Page</b></h3>
		<p align="left">These public dashboards allow users to explore data about courses taken in a semester.</p>
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
					Section Counts
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					How many sections are being offered in a specific semester? What is the average section size – the average number of students enrolled per section?<br>
					&#8627;Regular sections<br>&nbsp;&nbsp;
					<a href="regular-sections.php" >https://www.csun.edu/counts/regular-sections.php</a><br>
					&#8627;Supervision sections<br>&nbsp;&nbsp;
					<a href="supervision-sections.php" >https://www.csun.edu/counts/supervision-sections.php</a><br>
					&#8627;Section size by level (lower-division, upper-division, graduate)<br>&nbsp;&nbsp;
					<a href="average_section_size_by_level.php" >https://www.csun.edu/counts/average_section_size_by_level.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Course Enrollment 
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					How many and what courses are students enrolled in during a specific semester? Explore enrollment for the university, a college, department, degree type or specific course.<br>
					&#8627;Undergraduate Course Enrollment broken down by upper- and lower-division general education (GE) and non-GE<br>&nbsp;&nbsp;
					<a href="undergraduate_course_enrollment.php" >https://www.csun.edu/counts/undergraduate_course_enrollment.php</a><br>
					&#8627;Graduate Course Enrollment broken down by all graduate or doctorate<br>&nbsp;&nbsp;
					<a href="graduate_course_enrollment.php" >https://www.csun.edu/counts/graduate_course_enrollment.php</a><br>
					&#8627;Undergraduate Enrollment by Course<br>&nbsp;&nbsp;
					<a href="undergraduate_course_list_summary_data.php" >https://www.csun.edu/counts/undergraduate_course_list_summary_data.php</a><br>
					&#8627;Graduate Enrollment by Course<br>&nbsp;&nbsp;
					<a href="graduate_course_list_summary_data.php" >https://www.csun.edu/counts/graduate_course_list_summary_data.php</a><br>	
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R3 -->
		  <div class="card">
			  <div class="card-header" id="heading3">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Student-Faculty Ratios by Course Level
				  </button>
				</p>
			  </div>

			  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					What is the ratio of students to faculty?<br><br>
					Since students can be enrolled and faculty can be teaching full- or part-time. Ratios are calculated for full-time equivalent students (FTES) and full-time equivalent faculty (FTEF). 
					For descriptions of how FTES and FTEF are calculated, visit the <a href="ir-glossary.php#F" >IR Data Glossary</a>.<br><br>
					Use the Student-Faculty Ratios by Course Level dashboard to explore ratios for lower-division, upper-division, and graduate courses for the university, a college, or a department.
					The ratios being calculated in this dashboard reflect data going down to individual courses.<br>
					<a href="course_level.php" >https://www.csun.edu/counts/course_level.php</a>
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