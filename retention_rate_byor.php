<?php include('inc/header.php'); ?>


<h1 class="page-title">Retention Rates</h1>
<center>

<!-- Bread Crumbs -->
<div align="left">
	&nbsp;&nbsp;<a href="./" style="color:black;font-size:18pt">CSUN Counts</a><font size="5">&nbsp;>&nbsp;</font><a href="student-outcomes.php" style="color:black;font-size:18pt">Student Outcomes</a><font size="5">&nbsp;>&nbsp;Retention Rates</font><br><br>
</div>

<script type='module' src='https://counts.csun.edu/javascripts/api/tableau.embedding.3.latest.min.js'></script><tableau-viz id='tableau-viz' src='https://counts.csun.edu/t/IR/views/BuildYourOwnRetentionRates_17686024933530/BuildYourOwnRetentionRates' width='1400' height='804' hide-tabs toolbar='bottom' ></tableau-viz>

<?php include('inc/footer.php'); ?>


