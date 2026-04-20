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
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/student-outcomes.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Student Outcomes</h1>
	</div>
</div>

<?//php include('inc/secondary-nav.php'); ?>

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Student Outcomes</font></p>
	</div>
</div>


<div class="main-content">
	<div class="container">
		<h3 align="left" id="main"><b>Student Outcomes Landing Page</b></h3>
		<p align="left">
			Use these dashboards to explore<br>
			&nbsp;&#8226;&nbsp;<b>Retention rates:</b> How many new students who entered in a given year returned 1, 2, or more years later?<br>
			&nbsp;&#8226;&nbsp;<b>Graduation rates:</b> For information about time to degree, explore graduation rates. How many students who entered at the same time graduate within a set number of years?<br>
			&nbsp;&#8226;&nbsp;<b>Degree Recipients:</b> How many people earned degrees at CSUN in a given year?<br>
			&nbsp;&#8226;&nbsp;<b>Learning Outcomes:</b> How many students are accomplishing learning outcomes?<br>
			&nbsp;&#8226;&nbsp;<b>Earnings Outcomes:</b> How much have alumni earned after graduating?<br>
		</p>
		<br>
		<!--Expand All Button-->
		<div align="right">
			<button id="collapseAll" onclick="toggleAllAccordions()" class="btn btn-secondary mb-3" style="width: 150px">Expand all</button>
		</div>
		
		<h4 align="left"><b>Student Progression, Retention and Graduation Rates (Cohort Based)</b></h4>
		<p align="left">One way to examine student success is to look at students’ progress through academic programs based on when they started. A group of students who entered in the same semester 
		are considered an <b>entry cohort</b>. We can check how many students from each entry cohort returned for their second (or later) year, and how many graduated within 2, 4, or 6 years.
		</p>		
	</div>
	
	<!--Start of retention and graduation section-->
	<div class="container">		
		<!-- Start of the accordion -->
		<div class="faq_accordion mx-auto" id="faq_section">
		  <!-- R1 -->
		  <div class="card">
			  <div class="card-header" id="heading1">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Student Progression
				  </button>
				</p>
			  </div>

			  <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					In this dashboard, you can track students’ progress by entry cohort. What percentage returned for their second year (2nd fall term)? 
					You can also select which time-to-graduation rate to display (e.g., 2 years, 4 years, 6 years).<br>
				<a href="student_progression.php" >https://www.csun.edu/counts/student_progression.php</a>
			  </p>
				</div>
			  </div>
		  </div>
		  <!-- R2 -->
		  <div class="card">
			  <div class="card-header" id="heading2">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Retention Rates 
				  </button>
				</p>
			  </div>

			  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Of all the new students who started in a given fall semester, how many returned one or more years later? These dashboards allow you to explore retention rates in a wide variety of ways.<br>
					&nbsp;&#8226;&nbsp;The <b>Trends Over Time</b> version of the Retention Rates dashboard allows you to explore how retention rates have changed over time for all students or for a selected subset. For example, you can filter by academic levels (e.g., undergraduate, freshmen, sophomores, graduate, masters) or within a college, department, major, ethnic group, or more.<br> 
					<a href="retention_rate.php" >https://www.csun.edu/counts/retention_rate.php</a><br>
					&nbsp;&#8226;&nbsp;The <b>Build Your Own</b> version of the Retention Rates dashboard allows you to disaggregate by building your own table. For example, you could select rows that disaggregate by ethnicity to compare across ethnic groups and columns to disaggregate by both ethnicity and gender.<br>
					<a href="retention_rate_byor.php" >https://www.csun.edu/counts/retention_rate_byor.php</a>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- R3 -->
		  <div class="card">
			  <div class="card-header" id="heading3">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Graduation Rates
				  </button>
				</p>
			  </div>

			  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					Explore how many new students who entered in a given year have graduated within a selected number of years since entry. For example, what percentage of first-time freshmen graduated within 4 or 6 years? What percentage of first-time transfers graduated within 2 or 4 years? These dashboards allow you to explore graduation rates in a variety of ways.<br>
					&nbsp;&#8226;&nbsp;<b>Trends Over Time</b> allows you to explore how graduation rates have changed over time for all students or for a selected subset (e.g., by academic level such as undergraduate or graduate or within a college, department, major, ethnic group, or more).<br>
					<a href="graduation_rates_by_semester.php" >https://www.csun.edu/counts/graduation_rates_by_semester.php</a><br>
					&nbsp;&#8226;&nbsp;<b>Build Your Own</b> allows you to disaggregate by building your own table. For example, you could select rows that disaggregate by ethnicity to compare across ethnic groups and columns to disaggregate by both ethnicity and gender.<br>
					<a href="graduation_rates_byor.php" >https://www.csun.edu/counts/graduation_rates_byor.php</a>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of retention and graduation section-->
	<!--Start of degrees section-->
	<div class="container">
		<h4 align="left"><b>Degrees Awarded </b></h4>
		<p align="left">Explore the number of degrees that have been awarded in a selected year(s). How many students graduated with a specific major or minor? Or from specific graduate programs? These dashboards count students based on when a degree was awarded without grouping students by entry cohort, so they don’t indicate time to degree.</p>
		<h5 align="left">Degree Recipients </h5>
		<p align="left">There are two dashboard versions for each level of degree awarded:<br>
			&nbsp;&#8226;&nbsp;The <b>Trends Over Time</b> version allows you to examine how degrees received have changed over time for all students or for a selected subset (e.g., within a college, department, major, ethnic group, or more).<br> 
			&nbsp;&#8226;&nbsp;With the <b>Build Your Own</b> version, you can disaggregate by building your own table. For example, you could select rows that disaggregate by ethnicity to compare across ethnic groups and columns to disaggregate by both ethnicity and gender.
		</p>
		<p align="left">
			You can explore degrees awarded by:
		</p>
		<!-- Start of the accordion -->
		<div class="faq_accordion mx-auto" id="faq_section">
		  <!-- D1 -->
		  <div class="card">
			  <div class="card-header" id="heading4">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Undergraduate Degrees  
				  </button>
				</p>
			  </div>

			  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					&#8627;Trends Over Time<br>&nbsp;&nbsp;
					<a href="undergraduate_degree_recipients.php" >https://www.csun.edu/counts/undergraduate_degree_recipients.php</a><br>
					&#8627;Build Your Own<br>&nbsp;&nbsp;
					<a href="byor_undergraduate_degree_recipients.php" >https://www.csun.edu/counts/byor_undergraduate_degree_recipients.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- D2 -->
		  <div class="card">
			  <div class="card-header" id="heading5">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Masters Degrees  
				  </button>
				</p>
			  </div>

			  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					&#8627;Trends Over Time<br>&nbsp;&nbsp;
					<a href="masters_degree_recipients.php" >https://www.csun.edu/counts/masters_degree_recipients.php</a><br>
					&#8627;Build Your Own<br>&nbsp;&nbsp;
					<a href="byor_masters_degree_recipients.php" >https://www.csun.edu/counts/byor_masters_degree_recipients.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- D3 -->
		  <div class="card">
			  <div class="card-header" id="heading6">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Doctoral Degrees
				  </button>
				</p>
			  </div>

			  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					&#8627;Trends Over Time<br>&nbsp;&nbsp;
					<a href="doctorate_degree_recipients.php" >https://www.csun.edu/counts/doctorate_degree_recipients.php</a><br>
					&#8627;Build Your Own<br>&nbsp;&nbsp;
					<a href="byor_doctorate_degree_recipients.php" >https://www.csun.edu/counts/byor_doctorate_degree_recipients.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		  <!-- D4 -->
		  <div class="card">
			  <div class="card-header" id="heading7">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Minors Earned 
				  </button>
				</p>
			  </div>

			  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					&#8627;Trends Over Time<br>&nbsp;&nbsp;
					<a href="minors_earned.php" >https://www.csun.edu/counts/minors_earned.php</a><br>
					&#8627;Build Your Own<br>&nbsp;&nbsp;
					<a href="byor_minors_earned.php" >https://www.csun.edu/counts/byor_minors_earned.php</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of degrees section-->
	<!--Start of learning outcomes section-->
	<div class="container">
		<h4 align="left"><b>Learning Outcomes</b></h4>
		<p align="left">Are students achieving mastery of institutional learning outcomes in the courses they are taking at CSUN? As part of Academic Assessment and Program Review, CSUN has created a dashboard to explore students’ mastery.</p>
		<!-- Start of the accordion -->
		<div class="faq_accordion mx-auto" id="faq_section">
		  <!-- L1 -->
		  <div class="card">
			  <div class="card-header" id="heading8">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					CSUN Learning Outcomes and Assessment Dashboard (LOADs)  
				  </button>
				</p>
			  </div>

			  <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					From this dashboard, you can explore students’ level of mastery (novice, proficient, advanced, mastery) in a variety of ways:<br>
					&nbsp;&#8226;&nbsp;Display overall outcomes by college, department, learning outcome, and term.<br>
					&nbsp;&#8226;&nbsp;Compare outcomes by institutional level (college, department), student characteristics (ethnicity, gender, class level), and course characteristics (modality, upper-/lower-division).<br>
					&nbsp;&#8226;&nbsp;Examine equity gaps in student learning outcomes.<br>
					&nbsp;&#8226;&nbsp;Explore the number of courses aligned with learning outcomes.<br><br>
					Visit <a href="csun-loads.php">CSUN LOADs</a><br>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div><br>
	<!--End of learning outcomes section-->
	<!--Start of cal state pays section-->
	<div class="container">
		<h4 align="left"><b>Employment Outcomes</b></h4>
		<p align="left">Explore CSUN graduates’ earnings and employment.</p>
		<!-- Start of the accordion -->
		<div class="faq_accordion mx-auto" id="faq_section">
		  <!-- C1 -->
		  <div class="card">
			  <div class="card-header" id="heading9">
				<p class="faq_question mb-0">
				  <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse" style="font-size: min(4vw, 18px);">
					Cal State Pays  
				  </button>
				</p>
			  </div>

			  <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-parent="#faq_section">
				<div class="card-body ml-4">
				  <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
					<a href="https://www.calstatepays.org/#/" target="blank">Calstatepays.org</a>, is an interactive website that tracks the longitudinal earnings and employment of approximately 670,000 students who entered any one of six L.A.-metro CSU campuses, 
					including CSUN, over the last 20 years. The project was originally funded by the Strada Foundation and the site was launched in 2017.<br>
				  </p>
				</div>
			  </div>
		  </div>
		<!--End of accordion-->  
		</div>
	</div>
	<!--End of cal state pays section-->
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