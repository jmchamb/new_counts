

<?php include('inc/header.php'); ?>

<h1 class="page-title">Student Faculty Ratios  </h1>
<center>

<!-- Bread Crumbs -->
<div align="left" id="main">
	&nbsp;&nbsp;<a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;</font><a href="faculty-data.php" style="color:black;font-size:18pt">Faculty Data</a><font size="5">&nbsp;>&nbsp;Student Faculty Ratios</font><br><br>
</div>

<script type='module' src='https://counts.csun.edu/javascripts/api/tableau.embedding.3.latest.min.js'></script>
<tableau-viz id='tableau-viz' src='https://counts.csun.edu/t/IR/views/studentfacultyratios-springadded_17902750634480/studentfacultyratiosbyemploymentstatus' width='1400' height='862' toolbar='bottom' ></tableau-viz>


<?php include('inc/footer.php'); ?>

