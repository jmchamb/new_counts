<?php include('inc/header.php'); ?>
<style>
<!-- Start of Enrollment Section Code-->
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 70%;  
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropdown-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropdown-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropdown-content i {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropdown-content a:hover {
	color: #d22030;
}

.dropbtn:hover {
	background-color: #fff;
}

.show {display: block;}

<!--Start of Student Outcomes Code-->
.dropbtn_stu_outcomes {
  position: relative;
  display: inline-block;
}

.dropbtn_stu_outcomes-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 70%;
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropbtn_stu_outcomes-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_stu_outcomes-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_stu_outcomes-content a:hover {
	color: #d22030;
}

.dropbtn_stu_outcomes:hover {
	background-color: #fff;
}

.show_stu_outcomes {display: block;}

<!--Start of Instruction and Courses Code-->
.dropbtn_course {
  position: relative;
  display: inline-block;
}

.dropbtn_course-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 67%;
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropbtn_course-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_course-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_course-content a:hover {
	color: #d22030;
}

.dropbtn_course:hover {
	background-color: #fff;
}

.show_course {display: block;}

<!--Start of Student Survey Code-->
.dropbtn_survey {
  position: relative;
  display: inline-block;
}

.dropbtn_survey-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 67%;
  background-color: #f0f0f0;
  text-align: center;
  z-index: 1;
}

.dropbtn_survey-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_survey-content a:hover {
	color: #d22030;
}

.dropbtn_survey:hover {
	background-color: #fff;
}

.show_survey {display: block;}

<!--Start of Faculty Data Code-->
.dropbtn_faculty {
  position: relative;
  display: inline-block;
}

.dropbtn_faculty-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 67%;
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropbtn_faculty-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_faculty-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_faculty-content i {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_faculty-content a:hover {
	color: #d22030;
}

.dropbtn_faculty:hover {
	background-color: #fff;
}

.show_faculty {display: block;}

<!--Start of Student Success Tools Data Code-->
.dropbtn_success {
  position: relative;
  display: inline-block;
}

.dropbtn_success-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 58%;
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropbtn_success-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_success-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_success-content a:hover {
	color: #d22030;
}

.dropbtn_success:hover {
	background-color: #fff;
}

.show_success {display: block;}

<!--Start of CSU System Dashboards Data Code-->
.dropbtn_csu {
  position: relative;
  display: inline-block;
}

.dropbtn_csu-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 58%;
  background-color: #f0f0f0;
  z-index: 1;
}

.dropbtn_csu-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_csu-content a:hover {
	color: #d22030;
}

.dropbtn_csu:hover {
	background-color: #fff;
}

.show_csu {display: block;}

<!--Start of Registration Reports Data Code-->
.dropbtn_registration {
  position: relative;
  display: inline-block;
}

.dropbtn_registration-content {
  display: none;
  position: absolute;
  overflow: auto;
  top: 70%;
  background-color: #f0f0f0;
  text-align: left;
  z-index: 1;
}

.dropbtn_registration-content a {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_registration-content b {
  color: black;  
  padding: 0px 20px;
  text-decoration: none;
  text-align: left;
  display: block;
}

.dropbtn_registration-content a:hover {
	color: #d22030;
}

.dropbtn_registration:hover {
	background-color: #fff;
}

.show_registration {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Enrollment Section Code */
function myFunction() {
	document.getElementById('myDropdown').classList.toggle('show');	
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event0) {
	  if (!event0.target.matches('.dropbtn')) {
		var dropdowns0 = document.getElementsByClassName('dropdown-content');
		var i;
		for (i = 0; i < dropdowns0.length; i++) {
		  var openDropdown = dropdowns0[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Student Outcomes Code */
function myFunction_stu_outcomes() {
	document.getElementById('myDropdown_stu_outcomes').classList.toggle('show_stu_outcomes');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event1) {
	  if (!event1.target.matches('.dropbtn_stu_outcomes')) {
		var dropdowns1 = document.getElementsByClassName('dropbtn_stu_outcomes-content');
		var i;
		for (i = 0; i < dropdowns1.length; i++) {
		  var openDropdown = dropdowns1[i];
		  if (openDropdown.classList.contains('show_stu_outcomes')) {
			openDropdown.classList.remove('show_stu_outcomes');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Instruction and Course Code */
function myFunction_course() {
	document.getElementById('myDropdown_course').classList.toggle('show_course');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event2) {
	  if (!event2.target.matches('.dropbtn_course')) {
		var dropdowns2 = document.getElementsByClassName('dropbtn_course-content');
		var i;
		for (i = 0; i < dropdowns2.length; i++) {
		  var openDropdown = dropdowns2[i];
		  if (openDropdown.classList.contains('show_course')) {
			openDropdown.classList.remove('show_course');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Student Survey Code */
function myFunction_survey() {
	document.getElementById('myDropdown_survey').classList.toggle('show_survey');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event3) {
	  if (!event3.target.matches('.dropbtn_survey')) {
		var dropdowns3 = document.getElementsByClassName('dropbtn_survey-content');
		var i;
		for (i = 0; i < dropdowns3.length; i++) {
		  var openDropdown = dropdowns3[i];
		  if (openDropdown.classList.contains('show_survey')) {
			openDropdown.classList.remove('show_survey');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Faculty Data Code */
function myFunction_faculty() {
	document.getElementById('myDropdown_faculty').classList.toggle('show_faculty');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event4) {
	  if (!event4.target.matches('.dropbtn_faculty')) {
		var dropdowns4 = document.getElementsByClassName('dropbtn_faculty-content');
		var i;
		for (i = 0; i < dropdowns4.length; i++) {
		  var openDropdown = dropdowns4[i];
		  if (openDropdown.classList.contains('show_faculty')) {
			openDropdown.classList.remove('show_faculty');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Student Success Tools Data Code */
function myFunction_success() {
	document.getElementById('myDropdown_success').classList.toggle('show_success');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event5) {
	  if (!event5.target.matches('.dropbtn_success')) {
		var dropdowns5 = document.getElementsByClassName('dropbtn_success-content');
		var i;
		for (i = 0; i < dropdowns5.length; i++) {
		  var openDropdown = dropdowns5[i];
		  if (openDropdown.classList.contains('show_success')) {
			openDropdown.classList.remove('show_success');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of CSU System Dashboards Data Code */
function myFunction_csu() {
	document.getElementById('myDropdown_csu').classList.toggle('show_csu');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event6) {
	  if (!event6.target.matches('.dropbtn_csu')) {
		var dropdowns6 = document.getElementsByClassName('dropbtn_csu-content');
		var i;
		for (i = 0; i < dropdowns6.length; i++) {
		  var openDropdown = dropdowns6[i];
		  if (openDropdown.classList.contains('show_csu')) {
			openDropdown.classList.remove('show_csu');
		  }
		}
	  }
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content
Start of Registration Reports Data Code */
function myFunction_registration() {
	document.getElementById('myDropdown_registration').classList.toggle('show_registration');
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event7) {
	  if (!event7.target.matches('.dropbtn_registration')) {
		var dropdowns7 = document.getElementsByClassName('dropbtn_registration-content');
		var i;
		for (i = 0; i < dropdowns7.length; i++) {
		  var openDropdown = dropdowns7[i];
		  if (openDropdown.classList.contains('show_registration')) {
			openDropdown.classList.remove('show_registration');
		  }
		}
	  }	
	}
}
</script>
 
  	<!-- BANNER -->
	<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/dashboard-banner.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
		<div style="padding-top:125px; padding-left: 20%;">
			<h1 style="color: #fff; font-family: museo; font-size: 3em;">Dashboards</h1>
		</div>
	</div>

       <!-- CONTENT -->
       <!-- THIS PAGE WILL REPLACE CURRENT INDEX PAGE ONCE IT IS DONE -->
       <!-- <h1 class="page-title"> At-A-Glance  </h1> -->
        <div class="redh id=tip"> <h1 id="main">At-A-Glance</h1></div>
		<div align="center"><h5>Click on these images to explore student data on the IR website</h5></div>

  <!-- Start of First Row of Buttons -->
 <div class="container">

    <div align="center">
      <br>

    <div class="card-deck mb-5 col-lg-12">

  <div class="card border-dark" style="text-align:center;">
    <br>
       <a href="https://www.csun.edu/institutional-research/explore-csun-data/snapshot-dashboard" target="_blank">
        <img src="imgs/snap-dash.png" width="100%" alt="Photos of Graph with a camera"></a>
        <!-- <button class="large-btn img-fluid" id="three">Continuation <br>Rates<br> Standard <br></button></a> -->
             <!-- <img src="imgs/button-cards-03.jpg" alt="Generic placeholder image" width="100%"></a> -->
    <div class="card-body text-center">
      <p class="card-text">An interactive dashboard summarizing student characteristics<br>(Opens in a new window)</p>
    </div>
  </div>

  <div class="card border-dark"  style="text-align:center;">
    <br>
     <a href="https://www.csun.edu/institutional-research/explore-csun-data/fall-student-snapshot" target="_blank">
      <img src="imgs/fall-snap.png" width="100%" alt="magnifying glass"  class="center"></a>
      <!-- <button class="large-btn img-fluid" id="four">Continuation <br>Rates<br> BYOR <br></button></a> -->
             <!-- <img src="imgs/button-cards-04.jpg" alt="Generic placeholder image" width="100%"></a> -->
    <div class="card-body text-center">
      <p class="card-text"> A downloadable infographic summarizing student characteristics<br>(Opens in a new window)</p>
    </div>
  </div>
  <div class="card border-dark" style="text-align:center;">
    <br>
       <a href="https://www.csun.edu/institutional-research/explore-csun-data/csun-profiles" target="_blank">
           <img src="imgs/csun-profiles.png" width="100%" alt="Out Stretched Hand Underneath Documents"></a>

    <div class="card-body text-center">
      <p class="card-text">  A 2-page summary of enrollment, degrees awarded and more<br>(Opens in a new window)</p>
    </div>
  </div>
  <div class="card border-dark"  style="text-align:center;">
    <br>
     <a href="roadmap.php" target="_blank">
            <img src="imgs/road-ahead.png" width="100%" alt="Scale with Arrow Pointing at 90%"></a>
    <div class="card-body text-center">
      <p class="card-text">Landing page for KPIs by Strategic Direction<br>(Opens in a new window)</p>
    </div>
  </div>
</div>

<!-- NEXT TWO BUTTONS  
    <div class="card-deck mb-4 col-lg-11">   
  <div class="card border-danger col-lg-4">
    <br>
		<a href="https://www.csun.edu/institutional-research/common-data-set" target="_blank">
			<img src="imgs/common-data-set.png" width="275px" alt="bar graph "></a>
    <div class="card-body text-center">
      <p class="card-text">Downloadable files formatted for comparing data across institutions<br>(Opens in a new window)</p>
    </div>
  </div>
  <div class="card border-white col-lg-4">
    <br>
       <img src="" width="275px">
    <div class="card-body text-center">
      <p class="card-text">&nbsp;</p>
    </div>
  </div>
  <div class="card border-white col-lg-6">
    <br>
       
  </div>
</div></div> -->
<!-- Link to Dashboard -->
<div class="container col-lg-10 pt-0 pb-2 bg-danger rounded">
	<b><a style="font-size: 50px; color: white; text-decoration: underline;" target="_blank"
		href="https://counts.csun.edu/#/site/IR/views/MyCSUNGradStoryLeaderboard/MyCSUNGradStoryLeaderboard-College">
		MyCSUN Grad Story Leaderboard</a></b>
</div>

<!-- <h1 class="page-title"> Fully Interactive Dashboards </h1> -->
<div class="redh id=tip"> <h1> Fully Interactive Dashboards</h1></div>
<div align="center"><h4>Click on these images to navigate to specific dashboards using the pop-up menus</h4><br/></div>

<!-- NEXT SET -->
<div class="card-deck mb-5 col-lg-11">
  <div class="card border-danger">
	<style>
		.dropbtn {
		  background-image: url("imgs/enrollment.png");
		  background-size: contain;
		  background-repeat: no-repeat;
		  margin-right: auto;
		  margin-left: auto;
		  background-color: #FFFFFF;
		  width: 275px;
		  height: 275px;
		  cursor: pointer;
		}		
	</style>
    <br>
	  <button title="Drop down menu with first link going to Enrollment Landing Page" onclick="myFunction()" class="dropbtn btn"></button>
	  <div id="myDropdown" class="dropdown-content">
		<a href="enrollment.php" style="font-weight: bold;">Enrollment Landing Page</a>
		<b>Applicants, Admissions and Enrollments (AAE)</b>
			<a href="apps_admits_and_enrolls.php">&nbsp;&nbsp;&nbsp;&#8627;Apps, Admits and Enrolls</a>
			<a href="apps_admits_and_enrolls_feeder.php">&nbsp;&nbsp;&nbsp;&#8627;AAE by Feeder Schools</a>
			<a href="https://counts.csun.edu/#/site/IR/views/AdmittedtoCSUNandInstitutionofEnrollment/AdmittedtoCSUNandInstitutionofEnrollment" target="_blank">
					&nbsp;&nbsp;&nbsp;&#8627;AAE by Institution of <br/>&nbsp;&nbsp;&nbsp;Enrollment (login <br/>&nbsp;&nbsp;&nbsp;required)</a>		
		<b>Enrollment by Student Characteristics</b>
		<i>All Students</i>
			<a href="all_current_students.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
			<a href="byor_all_current_students.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
		<i>New Students</i>
			<a href="characteristics-of-new-students.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
			<a href="byor_all_new_students.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
	  </div>
	<!-- </div> -->
       <!-- <a href="enrollment.php">
        <img src="imgs/enrollment.png" width="90%" alt="Photos of Graph with a camera"></a>  -->
         <!--<button class="large-btn img-fluid" id="three">Continuation <br>Rates<br> Standard <br></button></a> -->
             <!--<img src="imgs/button-cards-03.jpg" alt="Generic placeholder image" width="100%"></a>-->
    <div class="card-body text-center">
      <p class="card-text">Dig into characteristics of all students or new student cohorts<br>(Public dashboard)</p>
    </div>
  </div>  
  
  <div class="card border-danger">
    <style>
		.dropbtn_registration {
		  background-image: url("imgs/regestration reports.png");
		  background-size: contain;
		  background-repeat: no-repeat;
		  margin-right: auto;
		  margin-left: auto;
		  background-color: #FFFFFF;
		  width: 275px;
		  height: 275px;
		  cursor: pointer;
		}		
	</style>
    <br>
	  <button title="Drop down menu with first link going to Registration Reports Landing Page" onclick="myFunction_registration()" class="dropbtn_registration btn"></button>
	  <div id="myDropdown_registration" class="dropbtn_registration-content">
		<a href="registration-reports.php" style="font-weight: bold;">Registration Reports Landing Page</a>
		<b>Fall/Spring Daily Registration Reports</b>
			<a href="fall_spring_registration.php">&nbsp;&nbsp;&nbsp;&#8627;Daily Registration</a>
			<a href="fall_spring_ftes_by_department.php">&nbsp;&nbsp;&nbsp;&#8627;FTES by Department</a>
		<b>Summer Daily Registration Reports</b>
			<a href="summer_daily_registration_state.php">&nbsp;&nbsp;&nbsp;&#8627;Daily Registration</a>
			<a href="summer_ftes_by_department_state.php">&nbsp;&nbsp;&nbsp;&#8627;FTES by Department</a>
		<b>Demand Estimation</b>
			<a href="multi_year_student_headcount_by_major.php">&nbsp;&nbsp;&nbsp;&#8627;Multi-Year Headcount</a>
			<a href="course_capacity.php">&nbsp;&nbsp;&nbsp;&#8627;Course Capacity</a>
	  </div>
     <!--<a href="registration-reports.php">
      <img src="imgs/regestration reports.png" width="90%" alt="magnifying glass"></a>-->
    <div class="card-body text-center">
      <p class="card-text">Explore registration day-by-day, year to year, and more<br>(Public dashboard)</p>
    </div>
  </div>  
  
  <div class="card border-danger">
    <style>
		.dropbtn_stu_outcomes {
		  background-image: url("imgs/student-outcomes-card.png");
		  background-size: contain;
		  background-repeat: no-repeat;
		  margin-right: auto;
		  margin-left: auto;
		  background-color: #FFFFFF;
		  width: 275px;
		  height: 275px;
		  cursor: pointer;
		}
		
	</style>
    <br>
	  <button title="Drop down menu with first link going to Student Outcomes Landing Page" onclick="myFunction_stu_outcomes()" class="dropbtn_stu_outcomes btn"></button>
	  <div id="myDropdown_stu_outcomes" class="dropbtn_stu_outcomes-content">
		<a href="student-outcomes.php" style="font-weight: bold;">Student Outcomes Landing Page</a>
		<b>Retention to Graduation</b>
		<a href="student_progression.php">&nbsp;&nbsp;&nbsp;&#8627;Student Progression</a>
		<b>Retention Rates</b>
			<a href="retention_rate.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
			<a href="retention_rate_byor.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
		<b>Graduation Rates</b>
			<a href="graduation_rates_by_semester.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
			<a href="graduation_rates_byor.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
		<b>Degree Recipients</b>
			<a href="all_degree_recipients.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
			<a href="byor_all_degree_recipients.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
		<b>Learning Outcomes</b>
		<a href="csun-loads.php">&nbsp;&nbsp;&nbsp;&#8627;CSUN LOADS</a>
		<b>Employment Outcomes</b>
		<a href="https://www.calstatepays.org/#/">&nbsp;&nbsp;&nbsp;&#8627;CalState Pays</a>
	  </div>
       <!--<a href="student-outcomes.php">
           <img src="imgs/student-outcomes-card.png" width="90%" alt="Out Stretched Hand Underneath Documents"></a>-->

    <div class="card-body text-center">
      <p class="card-text">Analyze retention rates, graduation rates, degrees received and more<br>(Public dashboard)</p>
    </div>
  </div>
</div>

<!-- ROW TWO Fully interactive  -->
<div class="card-deck mb-5 col-lg-11">
	<div class="card border-danger col-lg-4">
	  <style>
		.dropbtn_course {
		  background-image: url("imgs/instructions-and-corses.png");
		  background-size: contain;
		  background-repeat: no-repeat;
		  margin-right: auto;
		  margin-left: auto; 
		  background-color: #FFFFFF;
		  width: 275px;
		  height: 275px;
		  cursor: pointer;
		}
		
	</style>
    <br>
	<button title="Drop down menu with first link going to Course Characteristics Landing Page" onclick="myFunction_course()" class="dropbtn_course btn"></button>
		<div id="myDropdown_course" class="dropbtn_course-content">
			<a href="instruction-and-courses.php" style="font-weight: bold;">Course Characteristics Landing Page</a>			
			<a href="course_level.php">&nbsp;&nbsp;&nbsp;&#8627;Student-Faculty Ratios by<br>&nbsp;&nbsp;&nbsp; Course Level</a>
			<b>Section Counts</b>
			<a href="regular-sections.php">&nbsp;&nbsp;&nbsp;&#8627;Regular Section</a>
			<a href="supervision-sections.php">&nbsp;&nbsp;&nbsp;&#8627;Supervision Sections</a>
			<a href="average_section_size_by_level.php">&nbsp;&nbsp;&nbsp;&#8627;Section Size by Level</a>
			<b>Course Enrollment</b>
			<a href="undergraduate_course_enrollment.php">&nbsp;&nbsp;&nbsp;&#8627;Undergraduate Enrollment</a>
			<a href="graduate_course_enrollment.php">&nbsp;&nbsp;&nbsp;&#8627;Graduate Enrollment </a>
			<a href="undergraduate_course_list_summary_data.php">&nbsp;&nbsp;&nbsp;&#8627;Undergraduate Course List<br>&nbsp;&nbsp; Summary</a>
			<a href="graduate_course_list_summary_data.php">&nbsp;&nbsp;&nbsp;&#8627;Graduate Course List Summary</a>
		</div>
		   <!--<a href="instruction-and-courses.php">
			<img src="imgs/instructions-and-corses.png" width="90%" alt="Photos of Graph with a camera"></a>-->
		<div class="card-body text-center">
		  <p class="card-text">Examine student-faculty ratios, section counts, and more<br>(Public dashboard)</p>
		</div>
	</div>

	<div class="card border-danger col-lg-4">
		<style>
			.dropbtn_survey {
			  background-image: url("imgs/student survey.png");
			  background-size: contain;
			  background-repeat: no-repeat;
			  margin-right: auto;
			  margin-left: auto;
			  background-color: #FFFFFF;
			  width: 275px;
			  height: 275px;
			  cursor: pointer;
			}
			
		</style>
		<br>
		<button title="Drop down menu with first link going to Student Surveys Landing Page" onclick="myFunction_survey()" class="dropbtn_survey btn"></button>
			<div id="myDropdown_survey" class="dropbtn_survey-content">
				<a href="student-survey.php" style="font-weight: bold;">Student Surveys Landing Page</a>
				<a href="survey_student_outcomes.php">&nbsp;&nbsp;&nbsp;&#8627;The Freshman Survey</a>
				<a href="survey_nsse.php">&nbsp;&nbsp;&nbsp;&#8627;NSSE</a>
				<a href="survey_annual_survey_of_csun_graduating_seniors.php">&nbsp;&nbsp;&nbsp;&#8627;Annual Survey of Graduating<br>&nbsp;&nbsp; Seniors</a>
			</div>		   
			<!--<a href="student-survey.php">
			<img src="imgs/student survey.png" width="90%" alt="magnifying glass"></a>-->
		<div class="card-body text-center">
		  <p class="card-text">Explore students’ responses to surveys about engagement, post-graduation plans and more<br>(Public dashboard)</p>
		</div>
	</div>
  
	<div class="card border-danger col-lg-4">
		<style>
			.dropbtn_faculty {
			  background-image: url("imgs/faculty data.png");
			  background-size: contain;
			  background-repeat: no-repeat;
			  margin-right: auto;
			  margin-left: auto;
			  background-color: #FFFFFF;
			  width: 275px;
		      height: 275px;
			  cursor: pointer;
			}
			
		</style>
		<br>
		<button title="Drop down menu with first link going to Faculty Data Landing Page" onclick="myFunction_faculty()" class="dropbtn_faculty btn"></button>
			<div id="myDropdown_faculty" class="dropbtn_faculty-content">
				<a href="faculty-data.php" style="font-weight: bold;">Faculty Data Landing Page</a>
				<b>Faculty Characteristics</b>
				<i>All Faculty Characteristics</i>
				<a href="all_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
				<a href="byor_all_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
				<i>Tenured and Tenure-Track<br> Faculty Characteristics</i>
				<a href="tenured_and_tenure_track_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
				<a href="byor_tenured_and_tenure_track_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
				<i>Lecturer Faculty Characteristics</i>
				<a href="non-tenure_track_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Trends over Time</a>
				<a href="byor_non-tenure_track_faculty_characteristics.php">&nbsp;&nbsp;&nbsp;&#8627;Build Your Own</a>
				<b>Student-Faculty Ratios</b>
				<a href="faculty_employment_status_university.php">&nbsp;&nbsp;&nbsp;&#8627;Student-Faculty<br>&nbsp;&nbsp; Ratios University</a>
				<a href="faculty_employment_status_department.php">&nbsp;&nbsp;&nbsp;&#8627;Student-Faculty<br>&nbsp;&nbsp; Ratios Department</a>
			</div>
		<!--<a href="faculty-data.php">
           <img src="imgs/faculty data.png" width="90%" alt="Out Stretched Hand Underneath Documents"></a>-->
		<div class="card-body text-center">
		  <p class="card-text">Understand the characteristics of CSUN faculty, including by college or department<br>(Public dashboard)</p>
		</div>
	</div>	
</div>

<!-- LAST TWO CARDS -->
<div class="card-deck mb-5 col-lg-11">
    
  <div class="card border-danger col-lg-4">
    <style>
			.dropbtn_success {
			  background-image: url("imgs/student sucess data tools.png");
			  background-size: contain;
			  background-repeat: no-repeat;
			  margin-right: auto;
			  margin-left: auto;
			  background-color: #FFFFFF;
			  width: 275px;
			  height: 275px;
			  cursor: pointer;
			}
			
		</style>
		<br>
		<button title="Drop down menu with first link going to Student Success Data Tools Landing Page" onclick="myFunction_success()" class="dropbtn_success btn"></button>
			<div id="myDropdown_success" class="dropbtn_success-content">
				<a href="student-success-data-tools.php" style="font-weight: bold;">Student Success Data Tools Landing Page</a>
				<a href="https://counts.csun.edu/t/IR/views/CoursePerformanceTracker_16288956841430/CourseOutcomeTracker" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Course Outcome Tracker</a>
				<a href="https://counts.csun.edu/t/IR/views/CSUN_Course_Impact/CourseImpact" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Course Impact</a>
				<a href="https://counts.csun.edu/t/IR/views/CoursePathways/CoursePathways" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Course Pathways</a>
				<a href="https://counts.csun.edu/t/IR/views/CoursesNewStudentsStruggleWith/Freshmen1stTerm" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Courses New Students<br>&nbsp;&nbsp; Struggle With</a>
				<a href="https://counts.csun.edu/t/IR/views/CreditMomentum/WhoAreMomentumStudents" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Credit Momentum</a>
				<a href="https://counts.csun.edu/t/IR/views/FreshmanMajorMigration/MajorMigration" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Major Migration</a>
				<a href="https://counts.csun.edu/#/site/IR/views/GreenZoneOutcomesDashboard/WhoAreGreenZoneStudents" target="blank">&nbsp;&nbsp;&nbsp;&#8627;Green Zone Outcomes</a>
			</div>
		<!--<a href="student-success-data-tools.php">
          <img src="imgs/student sucess data tools.png" width="90%" alt="People infront of graphs"></a>-->
    <div class="card-body text-center">
      <p class="card-text">Explore what impacts student success including course outcomes, course pathways, 
	  courses new students struggle with, credit momentum, and major migration. 
	  (Available behind a login <br>for CSUN faculty and staff)</p>
    </div>
  </div>
  
  <div class="card border-danger col-lg-6">
    <br>
          <a href="https://counts.csun.edu" target="_blank"><img src="imgs/tableau_server.png" width="100%" alt="bar graph "></a>
    <div class="card-body text-center">
      <p class="card-text"><br><b>Login to the Counts server to explore additional dashboards</b><br>including tools for Chairs and Deans<br>
		(Available behind a login <br>for CSUN faculty and staff)</p>
    </div>   
  </div>
  
  <div class="card border-danger col-lg-4">
    <style>
			.dropbtn_csu {
			  background-image: url("imgs/CSU system dashboards.png");
			  background-size: contain;
			  background-repeat: no-repeat;
			  margin-right: auto;
			  margin-left: auto;
			  background-color: #FFFFFF;
			  width: 275px;
		      height: 275px;
			  cursor: pointer;
			}
			
		</style>
		<br>
		<button title="Drop down menu with first link going to CSU System Dashboards  Landing Page" onclick="myFunction_csu()" class="dropbtn_csu btn"></button>
			<div id="myDropdown_csu" class="dropbtn_csu-content">
				<a href="csu-system-dashboards.php" style="font-weight: bold;">CSU System Dashboards Landing Page</a>
				<a href="https://www.calstate.edu/dashboard" target="blank">&nbsp;&nbsp;&nbsp;&#8627;CSU Student Success<br>&nbsp;&nbsp; Dashboards</a>
				<a href="https://tableau.calstate.edu/views/Application_withsystemwide/AppAdmitEnroll" target="blank">&nbsp;&nbsp;&nbsp;&#8627;CSU Admissions Data</a>
				<a href="https://tableau.calstate.edu/views/ApplicationsandAdmissionsDashboardbyDiscipline/AppAdmitEnrollbyDiscipline" target="blank">&nbsp;&nbsp;&nbsp;&#8627;CSU Undergraduate<br>&nbsp;&nbsp; Admissions Data by Discipline</a>
				<a href="https://tableau.calstate.edu/views/SelfEnrollmentDashboard/EnrollmentSummary" target="blank">&nbsp;&nbsp;&nbsp;&#8627;CSU Enrollment Dashboards</a>
				<a href="https://tableau.calstate.edu/views/LaborMarketOutcomes/LaborMarketDashboard" target="blank">&nbsp;&nbsp;&nbsp;&#8627;CSU Labor Outcomes<br>&nbsp;&nbsp; Dashboards</a>
			</div>
       <!--<a href="csu-system-dashboards.php">
          <img src="imgs/CSU system dashboards.png" width="90%" alt="bar graph "></a>-->
    <div class="card-body text-center">
      <p class="card-text">Dashboards out of the CSU system about student success and more.<br>
		(Available behind a login <br>for CSUN faculty and staff)</p>
    </div>
  </div>
  
</div>

<!-- Links -->
<div class="container mb-5">
	<!--IR Glossary Link-->
	<a href="ir-glossary.php"><img src="imgs/glossary.png" width="70%" alt="Take me to the IR Data Glossary" style="border:1px solid #D22030;" class="rounded float-center"></a>
    <p>&nbsp;</p>

	<!--IR Help Navigating Page Link-->
	<a href="tutorials.php"><img src="imgs/helping-navigate-csun.png" width="70%" alt="Take me to the IR Help Navigating Page" style="border:1px solid #D22030;" class="rounded"></a>
    <p>&nbsp;</p>

	<!--Back to Legacy Counts pages-->
	<a href="https://www.csun.edu/counts/classic"><img src="imgs/button 1.png" width="65%" alt="Take me back to classic CSUN Counts" class="rounded"></a>
    <p>&nbsp;</p>
</div><br>

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
		<div class="col-lg-2"><img src="imgs/question.png" width="70%" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
		<font class="text-danger">Need help?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href ="tutorials.php"><u>Get Help Navigating CSUN Counts</u></a><br>
			&nbsp;&nbsp;<a class="text-danger" href ="https://www.csun.edu/institutional-research/contact-us#dataconsultant"><u>Find your Data Consultant</u></a><br> 
			&nbsp;&nbsp;<a class="text-danger" href ="mailto:ir@csun.edu"><u>Email IR</u></a> 
			<!--<a class="text-danger">or use our livechat by clicking where it says “How can we help you?” in the lower right corner.</a>-->
		</div>   
		<div class="col-lg-2"><img src="imgs/hand-graph.png" width="70%" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
			<font class="text-danger">Can’t find data you need?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href="https://ide.csun.edu:8443/openweb/irdatareqindex.html"><u>Request Data</u></a>
		</div>
	</div>
</div>


<!-- REDIRECT TO MOBILE VERSION -->
<script type="text/javascript">
if (screen.width <= 699) {
     document.location = "https://counts.csun.edu/t/IR/views/QuickfactsUpdated/CSUNQUICKFACTSBYYEAR?iframeSizedToWindow=true&:embed=y&:showAppBanner=false&:display_count=no&:showVizHome=no";
}
</script>

<!-- FOR IPHONES/IPODS SPECIFICALLY -->
<script type="text/javascript">
if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
   location.replace("https://counts.csun.edu/t/IR/views/QuickfactsUpdated/CSUNQUICKFACTSBYYEAR?iframeSizedToWindow=true&:embed=y&:showAppBanner=false&:display_count=no&:showVizHome=no");
}
</script>

<!-- Bottom Links -->
<?php include('inc/bottom_links.php'); ?>
<p>&nbsp;</p>
<?php include('inc/footer.php'); ?>