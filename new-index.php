<?php include('inc/header.php'); ?>

  <!-- BANNER -->

    <div class="home-banner mx-auto">
      <img src="imgs/dash.jpg" class="img-fluid" width="100%" alt="dashboard banner of broken down graph">
    </div>
  </div>

       <!-- CONTENT -->
       <!-- THIS PAGE WILL REPLACE CURRENT INDEX PAGE ONCE IT IS DONE -->
       <!-- <h1 class="page-title"> At-A-Glance  </h1> -->
        <div class="redh id=tip"> <h1>At-A-Glance</h1></div>

  <!-- Start of First Row of Buttons -->
  <div class="container">

    <div align="center">
      <br>

    <div class="card-deck mb-5 col-lg-12">

  <div class="card border-danger">
    <br>
       <a href="https://www.csun.edu/institutional-research/snapshot">
        <img src="imgs/snap-dash.png" width="90%" alt="Photos of Graph with a camera"></a>
        <!-- <button class="large-btn img-fluid" id="three">Continuation <br>Rates<br> Standard <br></button></a> -->
             <!-- <img src="imgs/button-cards-03.jpg" alt="Generic placeholder image" width="100%"></a> -->
    <div class="card-body text-center">
      <p class="card-text">An interactive dashboard summarizing student characteristics
</p>
    </div>
  </div>

  <div class="card border-danger">
    <br>
     <a href="https://www.csun.edu/institutional-research/fall-csun-student-snapshots">
      <img src="imgs/fall-snap.png" width="90%" alt="magnifying glass"></a>
      <!-- <button class="large-btn img-fluid" id="four">Continuation <br>Rates<br> BYOR <br></button></a> -->
             <!-- <img src="imgs/button-cards-04.jpg" alt="Generic placeholder image" width="100%"></a> -->
    <div class="card-body text-center">
      <p class="card-text"> A downloadable infographic summarizing student characteristics
</p>
    </div>
  </div>
  <div class="card border-danger">
    <br>
       <a href="https://www.csun.edu/institutional-research/csun-profiles ">
           <img src="imgs/csun-profiles.png" width="90%" alt="Out Stretched Hand Underneath Documents"></a>

    <div class="card-body text-center">
      <p class="card-text"> A downloadable 2-page report  
</p>
    </div>
  </div>
</div>

<!-- NEXT TWO BUTTONS  -->
    <div class="card-deck mb-5 col-lg-12">
   <div class="card border-white col-lg-6">
    <br>
       
    </div> 
  <div class="card border-danger col-lg-4">
    <br>
       <a href="https://counts.csun.edu/t/IR/views/GI2025GradRates_16530000747800/GI2025Goals">
          <img src="imgs/gi-2025.png" width="90%" alt="People infront of graphs"></a>
    <div class="card-body text-center">
      <p class="card-text">GI 2025 Dashboard  </p>
    </div></div>
  <div class="card border-danger col-lg-4">
    <br>
       <a href="https://www.csun.edu/institutional-research/common-data-set">
          <img src="imgs/common-data-set.png" width="90%" alt="bar graph "></a>
    <div class="card-body text-center">
      <p class="card-text">Common Data Set </p>
    </div>
</div>
</div></div></div></div>
  <!-- <h1 class="page-title"> Fully Interactive Dashboards </h1> -->
 <div class="redh id=tip"> <h1> Fully Interactive Dashboards</h1></div>

  <!-- TWO BUTTONS -->

    <div class="row">
      <div class="col-lg-6">
         <a href="https://www.calstate.edu/dashboard" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 25px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> Enrollment</a>
      </div>


      <div class="col-lg-6">
         <a href="https://www.calstate.edu/dashboard" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 25px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> Registration Reports</a>
      </div>
      
   
<!-- FOUR -->
        <div class="col-lg-3">  
        <a href="https://counts.csun.edu" target="blank"> 
          <button class="large-btn img-fluid" id="additional-dashboard">Student Outcomes
</button>
      </div>
      <div class="col-lg-3">  
    <a href="https://counts.csun.edu" target="blank"> 
          <button class="large-btn img-fluid" id="additional-dashboard">Course Data</button>
      </div>
  <div class="col-lg-3">  
        <a href="https://counts.csun.edu" target="blank"> 
          <button class="large-btn img-fluid" id="additional-dashboard">Student Survey Data</button>
      </div>

      <div class="col-lg-3">  
       <a href="https://counts.csun.edu" target="blank"> 
          <button class="large-btn img-fluid" id="additional-dashboard">Faculty Data
</button>
      </div>


  <!-- End of Red Buttons -->



   <!-- Start of Second Row of Buttons -->

   
      <div class="col-lg-6">
         <a href="https://www.calstate.edu/dashboard" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 25px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> Student Success Data Tools</a>
    
      </div>


      <div class="col-lg-6">
         <a href="https://www.calstate.edu/dashboard" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 25px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> CSU System Dashboards</a>
      </div>
      
    </div>
  </div>
  <!-- End of Second Row of Buttons -->
<br><br>

  <!-- Bottom Links -->
 <?php include('inc/bottom_links.php'); ?>





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

<!-- Start of LiveChat (www.livechatinc.com) code
	<script type="text/javascript">
	  window.__lc = window.__lc || {};
	  window.__lc.license = 15781800;
	  ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
	  var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
	  i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
	  get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
	  return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
	  var n=t.createElement("script");
	  n.async=!0,n.type="text/javascript",
	  n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
	  !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
	</script>
	<noscript>
	<a href="https://www.livechatinc.com/chat-with/15781800/" rel="nofollow">Chat with us</a>,
	powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
	</noscript>
End of LiveChat code -->

<!-- Start of Chatlio Code -->
<chatlio-widget widgetid="6e25c5f7-2227-4b9e-7299-6610bc951a7a"></chatlio-widget>
<!-- End of Chatlio Code -->
<?php include('inc/footer.php'); ?>
<br>