<?php include('inc/header.php'); ?>

  <!-- BANNER -->
  <div class="cont d-flex">
    <div class="home-banner mx-auto">
      <img src="imgs/dashboards_banner.jpg" class="img-fluid"  alt="dashboard banner of broken down graph">
    </div>
  </div>

       <!-- CONTENT -->

  <!-- Start of First Row of Buttons -->
  <div class="container">
     <div class="container mx-auto mb-3">
    <div align="center">
      <br>
    <div class="row">
      <div class="col-lg-6">  
        <a href="https://youtu.be/XNu34Hhrxrk" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 20px)" role="button"><i class="fa fa-mobile" aria-hidden="true" style="font-size: min(4vw, 26px)"></i> Institutional Research Standard Dashboards Tutorial</a>
      </div>
  <div class="col-lg-6">  
        <a href="tutorials.php"id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 20px)" role="button">Need Help Navigating CSUN Counts? View our FAQ, Guides and Tutorials</a></a>
      </div>

    <div class="first-row-btn row mx-auto">
      <div class="col-sm-6 col-md-3">
        <a href="standard.php"> 
          <button class="main-btn img-fluid" id="standard-btn">Standard <br>Dashboards</button>
        </a>
      </div>

      <div class="col-sm-6 col-md-3">
        <a href="byor.php">
          <button class="main-btn img-fluid" id="byor-btn">Build Your <br>Own Reports</button>
        </a>
      </div>

      <div class="col-sm-6 col-md-3">
          <a href="registration.php"> 
            <button class="main-btn img-fluid" id="reg-btn">Registration <br> Reports</button>
          </a>
      </div>

      <div class="col-sm-6 col-md-3">
        <a href="ir-glossary.php" target="blank"> 
          <button class="main-btn img-fluid" id="glossary-btn">IR Data <br>Glossary</button>
        </a>
      </div>

    </div>        
  </div>
  <!-- End of First Row of Buttons -->

  <br>
<script type='text/javascript' src='https://counts.csun.edu/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 1004px; height: 862px;'><object class='tableauViz' width='1004' height='862' style='display:none;'><param name='host_url' value='https%3A%2F%2Fcounts.csun.edu%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='&#47;t&#47;IR' /><param name='name' value='GI2025GradRates_16530000747800&#47;GI2025Goals' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='showAppBanner' value='false' /></object></div>
      <!-- IMPORTANT LINK -->

  


   <!-- Start of Second Row of Buttons -->
 <div class="container mx-auto">
    <div class="row">
      <div class="col-lg-6">
        <a href="https://counts.csun.edu" target="blank"> 
          <button class="large-btn img-fluid" id="additional-dashboard">Login to Additional Dashboards <br>on COUNTS Server</button>
        </a>
      </div>


      <div class="col-lg-6">
        <a href="survey_data.php"> 
          <button class="large-btn img-fluid" id="survey-data">Survey <br>Data</button>
        </a>
      </div>
      
    </div>
  </div>
  <!-- End of Second Row of Buttons -->



  <!-- Start of Grey Buttons * ORGINALLY 20PXxs -->
 <div class="container mx-auto mb-3">
    <div class="row">
        <div class="col-lg-3">  
        <a href="https://counts.csun.edu/t/IR/views/QuickfactsUpdated/CSUNQUICKFACTSBYYEAR?iframeSizedToWindow=true&:embed=y&:showAppBanner=false&:display_count=no&:showVizHome=no" id="faq_home" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 15px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> Use Counts On the Go for Mobile!</a>
      </div>
      <div class="col-lg-3">  
     <a href="csun-loads.php" id="faq_home" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 15px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i>CSUN LOADs Academic Assessment Dashboards</a>
      </div>
  <div class="col-lg-3">  
        <a href="https://www.calstatepays.org/#/" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw,  15px)" role="button"><img src="imgs/csp-logo.png" alt="Calstate Pays Logo" style="max-width:40%"><br>Visit CalState Pays</a>
      </div>

      <div class="col-lg-3">  
        <a href="https://www.calstate.edu/dashboard" target="_blank" id="faq_home" class="btn btn-wrap-text overflown-visible" style="font-size: min(4vw, 15px)" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> More Dashboards From the Chancellor’s Office!</a>
      </div>

    </div>
  </div>
  <!-- End of Red Buttons -->




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