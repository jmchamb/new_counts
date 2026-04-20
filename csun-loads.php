<?php include('inc/header.php'); ?>


<h1 class="page-title">CSUN LOADs</h1>

<!-- Bread Crumbs -->
<div align="left">
	&nbsp;&nbsp;<a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;</font><a href="student-outcomes.php" style="color:black;font-size:18pt">Student Outcomes</a><font size="5">&nbsp;>&nbsp;CSUN LOADs</font><br><br>
</div>
<div class="container">

 

     <div class="container mx-auto mb-3">
	 
	 
	
<center>



	<br>
 <h6 id="main"><strong>CSUN LOADs (Learning Outcomes Assessment Dashboard)</strong> displays the level at which students achieve the institutional learning outcomes (ILOs). All ILOs are aligned to department program learning outcomes and are used to assess student achievement of the outcome within and across courses.</h6>
<br>
<script type='module' src='https://counts.csun.edu/javascripts/api/tableau.embedding.3.latest.min.js'></script>

<div class='tableauPlaceholder' style='width: 1000px; height: 662px;'>
	<tableau-viz id='tableau-viz' src='https://counts.csun.edu/t/IR/views/CSUNLOADS_16601548542510/AboutCSUNLOADs' width='1000' height='662' toolbar='bottom' ></tableau-viz>
</div>

</center></div></div>

<?php include('inc/footer.php'); ?>

