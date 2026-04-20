
<?php include('inc/header.php'); ?>

<center>

<!-- BANNER -->
<div class="home-banner mx-auto" style="background-color: #121212; height: 250px;background-image: url('imgs/enrollment-banner.png');background-size: contain; background-repeat: no-repeat; background-position: center;">
	<div style="padding-top:125px; padding-left: 20%;">
		<h1 style="color: #fff; font-family: museo; font-size: 3em; text-align: left;">IR Team Strengths</h1>
	</div>
</div>

<div class="main-content" id="main">
	<div class="container">
		<a href="https://www.gallup.com/cliftonstrengths/en/253715/34-cliftonstrengths-themes.aspx" target="_blank"><h4 align="left" style="color: black;"><u>Learn more about Clifton Strengths</u></h4></a>

		<script type='module' src='https://counts.csun.edu/javascripts/api/tableau.embedding.3.latest.min.js'></script><tableau-viz id='tableau-viz' src='https://counts.csun.edu/t/IR/views/CliftonStrengths/IRCliftonStrengths' width='1400' height='1500' hide-tabs toolbar='bottom' ></tableau-viz>
	</div>
</div>

<?php include('inc/footer.php'); ?>
