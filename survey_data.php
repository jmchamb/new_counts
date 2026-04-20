<?php include('inc/header.php') ?>

<div class="cont d-flex">
    <div class="home-banner mx-auto">
        <img src="imgs/survey_data.jpg" class="img-fluid"  alt="dashboard banner of broken down graph">
    </div> 
</div>

<?php include('inc/secondary-nav.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>



<div class="row main-content">

	<div class="col-xs-9 con-acc mr-5">
<div align="center">
		
		<button class="accordion" > The Freshman Survey</button>
		<div class="panel">
		 	<div class="option collapse show">
		  		The CIRP Freshman Survey is designed to be administered to incoming freshmen before starting their first semester of college, and collects data on incoming college students’ background characteristics, high school experiences, attitudes, behaviors, and expectations for college.  For more information, please see the UCLA HERI website: <a href="https://heri.ucla.edu/cirp-freshman-survey/">https://heri.ucla.edu/cirp-freshman-survey/</a>
		  		<br>Student responses are available in the Freshman Survey Response Data dashboard below.  For an examination of how student responses are associated with student outcomes (one-year retention, first-year GPA, and first-year academic standing), use the Freshman Survey and Student Outcomes Data dashboard. 
			</div>
			
				<button class="option">
					<a href="survey_freshman_survey.php">Freshman Survey Response Data</a> 
				</button>
				<button class="option">
					<a href="survey_student_outcomes.php">Freshman Survey and Student Outcomes Data</a> 
				</button>
			
		</div>


		<!-- **********************************New Acordion "National Survey of Student Engagement"***************************** -->
		<button class="accordion">National Survey of Student Engagement</button>
		<div class="panel">
		 	<div class="option collapse show">
		  		The National Survey of Student Engagement (NSSE) is administered to first-time freshmen and graduating seniors in the spring.  At CSUN, we participate every odd year.  The survey asks about how students spend their time and what they gain from their undergraduate experience.  For more information, please see the NSSE website:<br><a href="http://nsse.indiana.edu/">http://nsse.indiana.edu/</a>
		  	<!-- 	<br>Student responses are available in the NSSE Response Data dashboard below.  For an examination of how student responses are associated with student outcomes, please see the NSSE Freshman Outcomes dashboard or the NSSE Senior Outcomes dashboard below.  -->
			</div>
			
				<button class="option">
					<a href="survey_nsse.php">NSSE Response Data</a> 
				</button>
			
		</div>
		<!-- ********************************End of New Accordion "National Survey of Student Engagement"************************* -->


		<button class="accordion">Annual Survey of CSUN Graduating Seniors</button>
	
		<div class="panel">
		  <div class="option collapse show">The Annual Survey of CSUN Graduating Seniors gathers information on graduating students’ plans for paid employment and further education after graduation. The survey is administered during the end of each spring semester to all students expecting to graduate in that academic year (Fall, Spring, and Summer).</div></a>
	
			
		<button class="option">
			<a href="survey_annual_survey_of_csun_graduating_seniors.php">Annual Survey Data</a>
			
		</button>
			
			</div>
	</div>

 	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


<!-- VIEW ON MOBILE -->
<div class="container mt-5 mb-5">
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


<?php include('inc/bottom_links.php'); ?>

<?php include('inc/footer.php'); ?>	
