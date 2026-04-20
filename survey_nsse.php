

<?php include('inc/header.php'); ?>

<h1 class="page-title">NSSE Response Data</h1>
<center>

<!-- Bread Crumbs -->
<div align="left" id="main">
	&nbsp;&nbsp;<a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;</font><a href="student-survey.php" style="color:black;font-size:18pt">Student Survey</a><font size="5">&nbsp;>&nbsp;NSSE Response Data</font><br><br>
</div>

<script type='module' src='https://counts.csun.edu/javascripts/api/tableau.embedding.3.latest.min.js'></script>
<div class='tableauPlaceholder' style='width: 1400px; height: 862px;'>
	<tableau-viz id='tableau-viz' src='https://counts.csun.edu/t/IR/views/NSSE_16944487363060/NSSE' width='1400' height='862' hide-tabs toolbar='bottom' ></tableau-viz>
</div>

<?php include('inc/footer.php'); ?>
