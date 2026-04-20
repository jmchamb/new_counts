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

<!-- CSUN Web 2 -->
<script src="//live-csu-northridge.pantheonsite.io/sites/default/files/google_tag/gtm_5j76zzx/google_tag.script.js?sswtty" defer></script>
<script src="//live-csu-northridge.pantheonsite.io/sites/default/files/google_tag/primary_container/google_tag.script.js?sswtty" defer></script>
<link rel="stylesheet" media="all" href="//live-csu-northridge.pantheonsite.io/sites/default/files/css/css_I2pWMaC5yghBGRrsKUqaasXPhUhomy6xWRAPI5N1tz0.css" />
<link rel="stylesheet" media="all" href="//live-csu-northridge.pantheonsite.io/sites/default/files/css/css_W32dQKnCvj8JyU8jvMkT7umEBm3EhGP2jNZqtIeMKlA.css" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto+Slab&display=swap" rel="stylesheet">

<?php include('inc/header.php'); ?>

<div class="cont d-flex">
    <div class="home-banner mx-auto">
        <img src="imgs/enrollment-.png" width="100%"class="img-fluid"  alt="dashboard banner of broken down graph">
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
	<div class="header__nav-wrapper">
          <nav id="main-nav" class="header__nav header__nav--menu">
                

        <ul>
          <li>
                  <button class="header__nav__toggle header__nav__toggle--menu" aria-expanded="false" data-popup>Explore CSUN Data</button>
          <div class="header__nav__sub-menu">
            <a href="/institutional-research/explore-csun-data" data-drupal-link-system-path="node/8554">Explore CSUN Data</a>
                    <ul>
          <li>
                  <a href="/institutional-research/explore-csun-data/snapshot-dashboard" data-drupal-link-system-path="node/8559">Snapshot Dashboard</a>
              </li>
          <li>
                  <a href="/institutional-research/explore-csun-data/fall-student-snapshot" data-drupal-link-system-path="node/8560">Fall Student Snapshot</a>
              </li>
          <li>
                  <a href="/institutional-research/explore-csun-data/csun-profiles" data-drupal-link-system-path="node/8561" class="is-active">CSUN Profiles</a>
              </li>
          <li>
                  <a href="/institutional-research/explore-csun-data/common-data-set" data-drupal-link-system-path="node/8562">Common Data Set</a>
              </li>
          <li>
                  <a href="https://www.csun.edu/counts/">CSUN Counts (Dashboards)</a>
              </li>
          <li>
                  <a href="https://www.csun.edu/institutional-research/inside-counts">Inside Counts (Reports)</a>
              </li>
          <li>
                  <a href="https://calstatepays.org/#/">CalStatePays</a>
              </li>
          <li>
                  <a href="/institutional-research/explore-csun-data/archive" data-drupal-link-system-path="node/8563">Archive</a>
              </li>
        </ul>
  
          </div>
              </li>
          <li>
                  <a href="https://www.csun.edu/assessment-and-program-review">Academic Assessment &amp; Program Review</a>
              </li>
          <li>
                  <button class="header__nav__toggle header__nav__toggle--menu" aria-expanded="false" data-popup>Guides</button>
          <div class="header__nav__sub-menu">
            <a href="/institutional-research/guides" data-drupal-link-system-path="node/8555">Guides</a>
                    <ul>
          <li>
                  <a href="/institutional-research/guides/student-evaluations-faculty" data-drupal-link-system-path="node/8568">Student Evaluations of Faculty</a>
              </li>
          <li>
                  <a href="https://ide.csun.edu:8443/APDB/">Academic Planning Data Base</a>
              </li>
        </ul>
  
          </div>
              </li>
          <li>
                  <a href="/institutional-research/news" data-drupal-link-system-path="node/8556">News</a>
              </li>
          <li>
                  <a href="https://ide.csun.edu:8443/openweb/irdatareqindex.html">Data Request</a>
              </li>
          <li>
                  <a href="/institutional-research/contact-us" data-drupal-link-system-path="node/8558">Contact Us</a>
              </li>
        </ul>
  




            <!--
              Close Button - Fixed header alt menu - Desktop only
            -->
            <button class="header__fixed header__fixed--open menu--toggle">
              <span class="screen-reader-text">Alternate Menu</span>
                <span class="svg svg--navicon ">
        <svg viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 .5v1H0v-1zm-8 4h8v-1H0zm0 3h8v-1H0z"/>
</svg>
  </span>

            </button>
          </nav>

          <!--
            Search - Desktop
          -->
          <div class="header__search__wrapper header__search__wrapper--desktop">
            <button class="header__toggle header__toggle--desktop search--open" aria-expanded="false" data-popup data-header-search>
              <span class="screen-reader-text">Search Form</span>
                <span class="svg svg--search ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="var:currentColor" fill-rule="evenodd" d="M21.795053,10.8962264 C21.795053,4.89622642 16.9045936,0 10.9116608,0 C4.91872792,0 0,4.89622642 0,10.8962264 C0,16.8962264 4.89045936,21.7924528 10.8833922,21.7924528 C13.4840989,21.7924528 15.8586572,20.8867925 17.7526502,19.3584906 L22.3886926,24 L24,22.3867925 L19.335689,17.7735849 C20.8621908,15.9056604 21.795053,13.5 21.795053,10.8962264 Z M10.8833922,19.5566038 C6.13427562,19.5566038 2.2614841,15.6792453 2.2614841,10.9245283 C2.2614841,6.16981132 6.13427562,2.29245283 10.8833922,2.29245283 C15.6325088,2.29245283 19.5053004,6.16981132 19.5053004,10.9245283 C19.5053004,15.6792453 15.6607774,19.5566038 10.8833922,19.5566038 Z"/></svg>  </span>

            </button>
            <div class="header__search">
              <form class="header__search__form">
                <label class="header__search__label">
                  <span class="screen-reader-text">Search</span>
                  <input id="searchInputDesktop" type="search" class="header__search__input" placeholder="What can we help you find?">
                </label>
                <button class="header__search__submit">
                  <span class="screen-reader-text">Submit Search</span>
                    <span class="svg svg--search header__search__icon ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="var:currentColor" fill-rule="evenodd" d="M21.795053,10.8962264 C21.795053,4.89622642 16.9045936,0 10.9116608,0 C4.91872792,0 0,4.89622642 0,10.8962264 C0,16.8962264 4.89045936,21.7924528 10.8833922,21.7924528 C13.4840989,21.7924528 15.8586572,20.8867925 17.7526502,19.3584906 L22.3886926,24 L24,22.3867925 L19.335689,17.7735849 C20.8621908,15.9056604 21.795053,13.5 21.795053,10.8962264 Z M10.8833922,19.5566038 C6.13427562,19.5566038 2.2614841,15.6792453 2.2614841,10.9245283 C2.2614841,6.16981132 6.13427562,2.29245283 10.8833922,2.29245283 C15.6325088,2.29245283 19.5053004,6.16981132 19.5053004,10.9245283 C19.5053004,15.6792453 15.6607774,19.5566038 10.8833922,19.5566038 Z"/></svg>  </span>

                </button>
              </form>
            </div>
          </div>

        </div>

	<div class="container">
		<h3 align="left"><b>Enrollment Landing Page</b></h3>
		<p align="left">Enrollment dashboards allow you to explore the characteristics of students who have applied, been accepted or enrolled at CSUN as well as the ratio of students to faculty.</p>
		<br>
		
		<div class="content__side">
            
<nav class="subnav">
  <div class="subnav__heading">In Explore CSUN Data</div>
  <button class="subnav__toggle" aria-expanded="false">In Explore CSUN Data</button>
  <div class="subnav__list">
                        <ul>
                              <li>
                                              <a href="/institutional-research/explore-csun-data/snapshot-dashboard" data-drupal-link-system-path="node/8559">Snapshot Dashboard</a>
                                </li>
                              <li>
                                              <a href="/institutional-research/explore-csun-data/fall-student-snapshot" data-drupal-link-system-path="node/8560">Fall Student Snapshot</a>
                                </li>
                              <li class="active">
                                              CSUN Profiles
                                </li>
                              <li>
                                              <a href="/institutional-research/explore-csun-data/common-data-set" data-drupal-link-system-path="node/8562">Common Data Set</a>
                                </li>
                              <li>
                                              <a href="https://www.csun.edu/counts/">CSUN Counts (Dashboards)</a>
                                </li>
                              <li>
                                              <a href="https://www.csun.edu/institutional-research/inside-counts">Inside Counts (Reports)</a>
                                </li>
                              <li>
                                              <a href="https://calstatepays.org/#/">CalStatePays</a>
                                </li>
                              <li>
                                              <a href="/institutional-research/explore-csun-data/archive" data-drupal-link-system-path="node/8563">Archive</a>
                                </li>
                </ul>
          
      </div>
</nav>



        <div class="desktop-only">  <div class="widget widget--border">
      <h2>  CSUN Counts
</h2>
          <p>Our home for dashboards.</p>



      <p>
            <a href="https://www.csun.edu/counts/" class="link">
      Explore CSUN Counts
    </a>
  
    </p>
  </div>

  <div class="widget widget--border">
      <h2>  Inside Counts
</h2>
          <p>Our home for reports.</p>



      <p>
            <a href="https://www.csun.edu/institutional-research/inside-counts" class="link">
      Inside Counts
    </a>
  
    </p>
  </div>

</div>
      </div>
		
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
					&#8627;<b>Application/admission/enrollment</b> - disaggregate based on student characteristics like type (first-time freshmen, first-time transfer, graduate, returning, and more), ethnicity, and more.<br>
					<a href="apps_admits_and_enrolls.php">https://www.csun.edu/counts/apps_admits_and_enrolls.php</a><br>
					&#8627;<b>Application/admission/enrollment by feeder school</b> - explore the previous institutions students attended before applying to CSUN.<br>
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
					Enrolled Student Characteristics 
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
					&nbsp;&#8627;Trends over Time</a><br>
					<a href="all_current_students.php">https://www.csun.edu/counts/all_current_students.php</a><br>
					&nbsp;&#8627;Build Your Own</a><br>
					<a href="byor_all_current_students.php">https://www.csun.edu/counts/byor_all_current_students.php</a><br><br>
					
					<b>Characteristics of New Student Cohorts</b> - Each year a new cohort of students enrolls at CSUN for the first time. Explore the characteristics of these new student cohorts. Select all new students, all new undergraduates, new first-time freshmen, new first-time transfers, new graduate students and more.<br>
					&nbsp;&#8627;Trends over Time</a><br>
					<a href="characteristics-of-new-students.php">https://www.csun.edu/counts/characteristics-of-new-students.php</a><br>
					&nbsp;&#8627;Build Your Own</a><br>
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
		<div class="col-lg-2"><img src="imgs/question.png" width="80%" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
		<font class="text-danger">Need help?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href ="tutorials.php"><u>Get Help Navigating CSUN Counts</u></a><br>
			&nbsp;&nbsp;<a class="text-danger" href ="//www.csun.edu/institutional-research/contact-us/"><u>Find your Data Consultant</u></a><br> 
			&nbsp;&nbsp;<a class="text-danger" href ="mailto:ir@csun.edu"><u>Email IR</u></a> 
			<!--<a class="text-danger">or use our livechat by clicking where it says “How can we help you?” in the lower right corner.</a>-->
		</div>   
		<div class="col-lg-2"><img src="imgs/hand-graph.png" width="80%" alt="People infront of graphs"></div>
		<div class="col-lg-4" align="left">
			<font class="text-danger">Can’t find data you need?</font><br>
			&nbsp;&nbsp;<a class="text-danger" href="https://ide.csun.edu:8443/openweb/irdatareqindex.html"><u>Request Data</u></a>
		</div>
	</div>
</div>

<?php include('inc/bottom_links.php'); ?>

<?php include('inc/footer.php'); ?>	