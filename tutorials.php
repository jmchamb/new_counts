<!-- <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" /> -->

<style>btn .option:hover a {
    background-image: url(imgs/button.png);
  btn .option:hover a {
    background-image: url(imgs/button.png);
  </style>

<?php include('inc/header.php'); ?>

<div class="cont">
<!-- BANNER -->
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/help-navigating.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em;">Help Navigating CSUN Counts</h1>
	</div>
</div>
<?php //include('inc/secondary-nav.php') ?>
<?php include('inc/tut-quick.php') ?> <br>
 <div class="container mx-auto">
   <div class="container mx-auto">  
    <div class="row d-flex">

<!-- Bread Crumbs -->
<div class="main-content d-flex">
	<div class="container mx-auto mt-3 mb-3">
		<p align="left"><a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;Help Page</font></p>
	</div>
</div>  

 <div class="redh id=tip"> <h1 id="main">TIPSHEETS</h1></div>
	<div class="row align-items-center">
	<div class="col-6 col-md-4">
        <a href="imgs/dashboard_help.pdf" target="blank"> 
          <button class="large-btn img-fluid rounded" id="pdf-btn">Finding a dashboard you <br>know in the new Counts </button>
        </a>
      </div>
	<div class="col-6 col-md-4">
        <a href="imgs/001.pdf" target="blank"> 
          <button class="large-btn img-fluid rounded" id="pdf-btn">Creating a Custom View <br>for IR Dashboards </button>
        </a>
      </div>
      <div class="col-6 col-md-4">
     <a href="imgs/002.pdf" target="blank">
          <button class="large-btn img-fluid rounded" id="pdf-btn">Expanding Dashboards to <br>the College, Department, <br>and Program Level </button>
        </a>
      </div>
	</div>

 <div class="redh" id=video> <h1>VIDEO TUTORIALS</h1></div>

 <div class="col-lg-12">
        <a href="https://www.youtube.com/watch?v=1qkb2AKaL0c&list=PLPRgbD4hILmAIyeDsph3AJB8vhzi5CTB5" target="blank"> 
          <button class="large-btn img-fluid rounded" id="pdf-you">Check Out Our Video Tutorial Playlist</button>
        </a>
       <br> <strong>Our Video Tutorial Playlist Includes:</strong> <br>
       <p><a href="https://www.youtube.com/watch?v=1qkb2AKaL0c&list=PLPRgbD4hILmAIyeDsph3AJB8vhzi5CTB5&index=1" class="link-danger" target="blank">Getting Started with CSUN Counts </a>,

        <a href="https://www.youtube.com/watch?v=tiy4VrHwImo&list=PLPRgbD4hILmAIyeDsph3AJB8vhzi5CTB5&index=2" class="link-danger" target="blank">Navigating CSUN Counts </a>,

        Student Characteristics <a href="https://www.youtube.com/watch?v=g0qQoazNY8M&list=PLPRgbD4hILmAIyeDsph3AJB8vhzi5CTB5&index=3" class="link-danger" target="blank">Part 1 </a>

         and <a href="https://www.youtube.com/watch?v=_50xviVDxQI&list=PLPRgbD4hILmAIyeDsph3AJB8vhzi5CTB5&index=4" class="link-danger" target="blank">Part 2 </a>
      </div>
<div class="redh"id=add> <h1>CONTENT CURATED FOR SPECIFIC ROLES</h1></div>
 <div class="col-lg-4">
        <a href="new-faculty-content.php"> 
          <button class="large-btn img-fluid rounded" id="standard-btn">Content For<br>New Faculty </button>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="dean-content.php"> 
          <button class="large-btn img-fluid rounded" id="byor-btn">Content For Deans<br> And Associate Deans </button>
        </a>
      </div>


      <div class="col-lg-4">
     <a href="department-chair-content.php"> 
          <button class="large-btn img-fluid rounded" id="reg-btn"> Content For <br>Department Chairs</button>
        </a>
      </div> </div>
  
  

 
    <div class="redh" id=question><h1>FREQUENTLY ASKED QUESTIONS</h1> </div>
    <strong>Frequently Asked Question Cattegories Include:</strong> <br>
       <p><a href="#standard_dashboards" class="link-danger">Standard Dashboards</a>,

        <a href="#byor" class="link-danger">Build Your Own Reports </a>,

        <a href="#registration_reports" class="link-danger">Registration Reports</a>, 

<!-- End of Red Header -->
    <div class="row" id="standard_dashboards">
      <h2 class="faq_title mb-4"><strong>Standard Dashboards</strong></h2>  
    </div>

    <!-- Start of the accordion -->
    <div class="faq_accordion mx-auto" id="faq_section">
      <!-- Q1 -->
      <div class="card">
          <div class="card-header" id="heading1">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="font-size: min(4vw, 18px);">
                How do I find the six-year graduation rate for currently enrolled students?
              </button>
            </p>
          </div>

          <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The six-year graduation rate is the default, but the Graduation Years drop down menu will
            change the years.<br>
            <a href="graduation_rates_by_semester.php" >https://www.csun.edu/counts/graduation_rates_by_semester.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q2 -->
      <div class="card">
          <div class="card-header" id="heading2">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" style="font-size: min(4vw, 18px);">
                How do I find the continuation rates for First Time Freshman?
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#F"  target="blank" style="color: #000;">First Time Freshman)</a></p> 
             </p>
          </div>

          <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                Continuation rates show how many students continue to attend CSUN. The default is two years but the Continuation Years drop down menu will change the years.<br>
            <a href="continuation_rate_by_semester.php" >https://www.csun.edu/counts/continuation_rate_by_semester.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q3 
      <div class="card">
          <div class="card-header" id="heading3">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" style="font-size: min(4vw, 18px);">
                How do I find the level of education for CSUN student’s parents? 
              </button>
            </p>
          </div>

          <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To find the education level of parents use the Parental Education drop down menu at the bottom of the dashboard. This same drop down menu is found on the Enrollment Landing Page of CSUN Counts.<br>
            <a href="enrollment.php" > https://www.csun.edu/counts/enrollment.php</a>
          </p>
            </div>
          </div>
      </div>-->

      <!-- Q4 -->
      <div class="card">
          <div class="card-header" id="heading4">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" style="font-size: min(4vw, 18px);">
                How can I get the number of degree recipients that are self and/or state supported? 
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#S" target="blank"  style="color: #000;">State or Self Supported)</a></p> 
             </p>
          </div>

          <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To determine the number of students that are state or self-supported use the drop down menu State and/or Self Support. This same drop down menu is on all Degree Recipients dashboards.<br>
            <a href="all_degree_recipients.php" >https://www.csun.edu/counts/all_degree_recipients.php </a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q5 -->
      <div class="card">
          <div class="card-header" id="heading5">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5" style="font-size: min(4vw, 18px);">
                How do I find the number of undergraduates enrolled in a specific course?
              </button>
            </p>
          </div>

          <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The list of courses is available by a college or department using the drop down menu.<br>
            <a href="undergraduate_course_list_summary_data.php" >https://www.csun.edu/counts/undergraduate_course_list_summary_data.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q6 -->
      <div class="card">
          <div class="card-header" id="heading6">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6" style="font-size: min(4vw, 18px);">
                How do I find the number of graduates enrolled in a specific course?
              </button>
            </p>
          </div>

          <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The list of courses is available by a college or department using the drop down menu.<br>
            <a href="graduate_course_list_summary_data.php" >https://www.csun.edu/counts/graduate_course_list_summary_data.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q7 -->
      <div class="card">
          <div class="card-header" id="heading7">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7" style="font-size: min(4vw, 18px);">
                 How do I find the average number of units that undergraduate students take in the Fall semester? 
              </button>
            </p>
          </div>

          <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faq_section">
        
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                Available behind a login for CSUN faculty and staff.<br>
            <a href="https://counts.csun.edu/#/site/IR/views/AverageUnitLoad_16977476743500/allstudents" target="blank">https://counts.csun.edu/#/site/IR/views/AverageUnitLoad_16977476743500/allstudents</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q8 
      <div class="card">
          <div class="card-header" id="heading8">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8" style="font-size: min(4vw, 18px);">
                How do I find the number of new students that are Full Time Equivalent Students/FTES?  
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#F"  target="blank" style="color: #000;">Full Time Equivalent Students/FTES)</a></p> 
             </p>
          </div>

          <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                Use the Numbers drop down menu and select FTES. The FTES numbers are available in all undergraduate dashboards in the Characteristics of New Students section.<br>
            <a href="https://www.csun.edu/counts/standard.php" >https://www.csun.edu/counts/standard.php</a>
          </p>
            </div>
          </div>
      </div>-->

      <!-- Q9 -->
      <div class="card">
          <div class="card-header" id="heading9">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9" style="font-size: min(4vw, 18px);">
                How do I find the continuation rate of students by semester? 
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#C"  target="blank" style="color: #000;">Continuation Rate)</a></p> 
             </p>
          </div>

          <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#faq_section">
        
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                If you want to find the rate that students continue to study at CSUN from Fall to Spring select 0.5 from the Continuation Years drop down menu. Selecting the .5 numbers from the Continuation Years drop down menu will allow you to see the Fall to Spring numbers. <br>
            <a href="continuation_rate_by_semester.php" >https://www.csun.edu/counts/continuation_rate_by_semester.php</a>
          </p>
            </div>
          </div>
      </div>
  <!-- Q10 -->
       <div class="card">
          <div class="card-header" id="heading10">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse9" style="font-size: min(4vw, 18px);">
               What’s the difference between Trends Over Time and Build Your Own Reports? Why should I start from one versus the other?
              </button>
              </div>

          <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faq_section">
        
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
            Trends Over Time Dashboards show one way of displaying data and they often show historical trends over time. You can filter to specific groups based on a variety of fields. Build Your Own Reports allow you to customize how the data will be displayed – you can select what fields to use for columns and rows which allows you to disaggregate or break down the data to be displayed.
          </p>
            </div>
          </div>
      </div>
    <!-- End of FAQ Accordion -->
    </div> 

  <!-- End of container -->
  </div>

<!-- End of d-flex  -->
</div>
<!-- END OF STANDARD DASHBOARDS -->



<!-- START OF BUILD YOUR OWN REPORT -->
<div class="d-flex">
  <div class="container mt-5">

    <!-- BUILD YOUR OWN REPORT -->
    <div class="row" id="byor">
      <h2 class="faq_title mb-4 mt-5"><strong>Build Your Own Report</strong></h2> 
    </div>

    <!-- Start of the accordion -->
    <div class="faq_accordion mx-auto" id="faq_section">
      <!-- Q1 -->
      <div class="card">
          <div class="card-header" id="heading10">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10" style="font-size: min(4vw, 18px);">
                How do I find the six-year graduation rate for students by gender? 
              </button>
               <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#G"  style="color: #000;">Graduation Rate)</a></p> 
             </p>
          </div>

          <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view the gender on the row or column of the table use the drop down menus at the top of the dashboard. The six-year graduation rate is the default, but the Graduation Years drop down menu will change the years.<br>
            <a href="graduation_rates_by_semester.php" >https://www.csun.edu/counts/graduation_rates_by_semester.php </a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q2 -->
      <div class="card">
          <div class="card-header" id="heading11">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11" style="font-size: min(4vw, 18px);">
                How do I find the one-year continuation rates for students by ethnicity?
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#C"  style="color: #000;">Continuation Rate)</a></p> 
            </p>
          </div>

          <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view the gender on the row or column of the table use the drop down menus at the top of the dashboard. The two-year continuation rate is the default, but the Continuation Years drop down menu will change the years.<br>
            <a href="continuation_rate_by_semester.php" >https://www.csun.edu/counts/continuation_rate_by_semester.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q3 -->
      <div class="card">
          <div class="card-header" id="heading12">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12" style="font-size: min(4vw, 18px);">
                How do I find the number of students that received their degree with honors broken down by gender? 
              </button>
            </p>
          </div>

          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view the specific honors select the Honors received drop down menu. To view the gender on the row or column of the table use the drop down menus at the top of the dashboard.<br>
            <a href="byor_all_degree_recipients.php" >https://www.csun.edu/counts/byor_all_degree_recipients.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q4 -->
      <div class="card">
          <div class="card-header" id="heading13">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13" style="font-size: min(4vw, 18px);">
                How do I find the number of students are the first to attend college in their family broken down by gender? 
              </button>
          </div>

          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                These numbers can found on all and new student characteristics dashboards. These students are First Generation Students (definition here: <a href="ir-glossary.php#F" >First Generation Student</a>).
              </p>

              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);"> To view these numbers use the Row Selection drop down menu and select First Generation Students. To view the gender on the row or column of the table use the drop down menus at the top of the dashboard. View the dashboards in the Enrolled Student Characteristics section.<br>
            <a href="enrollment.php" >https://www.csun.edu/counts/enrollment.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q5 -->
      <div class="card">
          <div class="card-header" id="heading14">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14" style="font-size: min(4vw, 18px);">
                How do I find the number of Pell grant recipients that are First Time Freshman?
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#F)"  style="color: #000;">First Time Freshman)</a></p> 
             </p>
          </div>

          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view the Pell grant recipients on the row or column of the table use the drop down menus at the top of the dashboard.<br>
            <a href="byor_all_new_students.php" >https://www.csun.edu/counts/byor_all_new_students.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q6 -->
      <div class="card">
          <div class="card-header" id="heading15">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15" style="font-size: min(4vw, 18px);">
                How do I find the percentage of students that their parent or guardian attended a four-year university? 
              </button>
             </p>
          </div>

          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                Use the Row Selection drop down menu and select Parent Education. This will show the headcounts. To view the percentage select Data Type Selection drop down menu and then scroll down to Percent (of Headcount). These percentages can be found on both All and New Student Characteristics dashboards. View the dashboards in the Enrolled Student Characteristics section.<br>
            <a href="enrollment.php" >https://www.csun.edu/counts/enrollment.php</a>
          </p>
            </div>
          </div>
      </div>

    <!-- End of FAQ Accordion -->
    </div> 

  <!-- End of container -->
  </div>

<!-- End of d-flex  -->
</div>
<!-- END OF BUILD YOUR OWN REPORT -->



<!-- START OF REGISTRATION REPORTS -->
<div class="d-flex">
  <div class="container mt-5">

    <!-- REGISTRATION REPORTS -->
    <div class="row" id="registration_reports">
      <h2 class="faq_title mb-4 mt-5"><strong>Registration Reports</strong></h2>  
    </div>

    <!-- Start of the accordion -->
    <div class="faq_accordion mx-auto" id="faq_section">
      <!-- Q1 -->
      <div class="card">
          <div class="card-header" id="heading16">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16" style="font-size: min(4vw, 18px);">
               How do I view the number of students that have registered for the Fall semester broken down by department?    
              </button>
            </p>
          </div>

          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                By default all programs are shown, but the list can be modified to show all the students that registered by College, Department or Program.<br>
            <a href="fall_semester_headcounts_major.php" >https://www.csun.edu/counts/fall_semester_headcounts_major.php </a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q2 -->
      <div class="card">
          <div class="card-header" id="heading17">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17" style="font-size: min(4vw, 18px);">
               How do I view the number of students that have registered for the Spring semester broken down by department? 
              </button>
             </p>
          </div>

          <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                By default all programs are shown, but the list can be modified to show all the students that registered by College, Department or Program.<br>
            <a href="spring_semester_headcounts_major.php" >https://www.csun.edu/counts/spring_semester_headcounts_major.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q3 -->
      <div class="card">
          <div class="card-header" id="heading18">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18" style="font-size: min(4vw, 18px);">
                How do I view the number of Master’s students that have registered for classes that are state or self-supported?  
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#S"  target="blank" style="color: #000;">State or Self Supported)</a></p> 
             </p>
          </div>

          <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view this data scroll down to the bottom of the dashboard and hover over the numbers to show the state and self-supported students. To view the current day number scroll to the right the day listed under the Current Day number.<br>
            <a href="masters_headcount_by_department.php" >https://www.csun.edu/counts/masters_headcount_by_department.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q4 -->
      <div class="card">
          <div class="card-header" id="heading19">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19" style="font-size: min(4vw, 18px);">
                How do I view the number of full time equivalent students enrolled in a specific course before or after census? 
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#C"   target="blank" style="color: #000;">Census)</a></p> 
             </p>
          </div>

          <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The chart at the top of the dashboard will show how many days until census for the current semester. For semesters in the past, the census date is the last day shown on the table if you scroll all the way the right. This dashboard is helpful to see the progress of full time equivalent students/FTES (definition here: <a href="ir-glossary.php#F" target="blank" >Full Time Equivalent Students/FTES</a>) registering for classes. View the dashboards in the Enrolled Student Characteristics section. 
              </p>

              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
            <a href="enrollment.php" >https://www.csun.edu/counts/enrollment.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q5 -->
      <div class="card">
          <div class="card-header" id="heading20">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20" style="font-size: min(4vw, 18px);">
                How do I find the year-to-year comparison of student headcounts broken down by department?
              </button>
            </p>
          </div>

          <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The report can broken down by college, department or major.<br>
            <a href="multi_year_student_headcount_by_major.php" >https://www.csun.edu/counts/multi_year_student_headcount_by_major.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q6 -->
      <div class="card">
          <div class="card-header" id="heading21">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21" style="font-size: min(4vw, 18px);">
                How do I find the daily registration numbers for First Time Transfers/FTT? 
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#F"   target="blank" style="color: #000;">First Time Transfers/FTT)</a></p> 
             </p>
          </div>

          <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                To view these numbers scroll down to table at the numbers are broken down student level. Some Freshman are shown in the FTF column.<br>
            <a href="headcount_by_level.php" >https://www.csun.edu/counts/headcount_by_level.php</a>
          </p>
            </div>
          </div>
      </div>

      <!-- Q7 -->
      <div class="card mb-5">
          <div class="card-header" id="heading22">
            <p class="faq_question mb-0">
              <button class="btn btn-link btn-block text-left btn-wrap-text overflown-visible" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22" style="font-size: min(4vw, 18px);">
                How do I do a year-by-year comparison on the number of Full Time Equivalent Students/FTES that have registered for a specific course?  
              </button>
              <p class="text-left ml-4" style="font-size: min(4vw, 14px);"> (definition here: <a href="ir-glossary.php#F"   target="blank" style="color: #000;">Full Time Equivalent Students/FTES)</a></p> 
             </p>
          </div>

          <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#faq_section">
            <div class="card-body ml-4">
              <p class="faq_answer text-left" style="font-size: min(4vw, 16px);">
                The list of courses are be shown by college or department.<br>
            <a href="multi_year_ftes_by_course.php" >https://www.csun.edu/counts/multi_year_ftes_by_course.php</a>
          </p>
            </div>
          </div>
      </div>
    <!-- End of FAQ Accordion -->
    </div> 

  <!-- End of container -->
  </div>

<!-- End of d-flex  -->
</div>
<!-- END OF REGISTRATION REPORTS -->
<div class="container mb-5">
    <p>&nbsp;</p>
    <!-- Bottom Links -->
    <?php include('inc/bottom_links.php'); ?>
</div>
<?php include('inc/footer.php'); ?> 
