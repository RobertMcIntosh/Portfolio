<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48091416-1', 'rmportfolio.info');
  ga('send', 'pageview');

</script>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../styles/styles.css">
<script type="text/javascript" src="../../js/mootools.js"></script>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-1.0.2/selectivizr.js"></script>
	<![endif]-->
<noscript>
	<link rel="stylesheet" type="text/css" href="../../styles/ZeroJs.css">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RmPortfolio</title>
</head>
<body id="container">
	<div id="rv1" class="wbColumns">
		<div id="shortbdr">
			<div id="logo">
				<?php
				include_once ('logo.php');
				?>
			</div>
			<!-- end logo -->

			<div id="nav">
				<?php
				include_once ('nav.php');
				?>
			</div>
			<!-- end nav -->
		</div>
		<!--end shortbdr -->
	</div>
	<!-- end rv1-->

	<div id="rv2" class="wbColumns">
		<?php
		include_once ('../galleries/RV_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#rv3"> </a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="rv3" class="wbColumns">
		<h1>Riverview Cafe Winebar</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, Project Definition</h2>
			<p><a href="http://www.theriverview.net" target="_blank">Riverview Winebar and Cafe</a> is focused on providing a local hub for
				the residents of the Longfellow neighborhood to gather and have a
				cup of coffee or a glass of wine.</p>

			<p>Their website was in need of a redesign. The owner also wanted to
				automate some tasks to help make their lives a bit easier.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div id="showMoreDeliverRV">
			<h2>Deliverables</h2>
			<ul>
				<li>Custom Wordpress site</li>
				<li>Collection customers for email notifications</li>
				<li>Calendar of upcoming events</li>
				<li>Images for site</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreDid">
			<h2>What I did</h2>
			<ul>
				<li>Stakeholder interviews</li>
				<li>User research</li>
				<li>Research competitive landscape</li>
				<li>Creation of personas</li>
				<li>Wireframing</li>
				<li>Established deliverables</li>
				<li>Information architecture</li>
				<li>Coded custom wordpress site</li>
				<li>Installed plugins</li>
				<li>PHP scripting</li>
				<li>User tests for site map, navigation, usability</li>
				<li>Set up web hosting</li>
				<li>Information architecture</li>
				<li>Defined social media strategies</li>
			</ul>
		</div>
		<a href="#showMoreDid" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>We printed out his site and went page by page reviewing the
				shortcomings of the current site. We also discussed the strengths of
				the site and things he liked about it.</p>

			<p>We then went over his wish list for the new site. Through this
				process I kept notes and we were able to very clearly define the
				objectives for the build.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<!--
		<div class="showMoreLess" id="showMoreObstacle">
			<h2>A Problem or Obstacle</h2>
			<p>The owners are overworked and getting content from them had been
				quite a struggle. This resulted in a very long build process.</p>

			<p></p>


		</div>


		<div class="showMoreLess" id="showMoreOutcome">
			<h2>
				Project outcome
			</h2>
			<p>
				</p>
		</div>
		<a href="#showMoreOutcome" class="showLink">More...</a>
		 -->
		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech used</h2>
			<ul>
				<li>3x5 cards</li>
				<li>Illustrator</li>
				<li>OminGraffle</li>
				<li>Eclipse</li>
				<li>MAMP</li>
				<li>Illustrator</li>
				<li>Fetch</li>
				<li>Firebug</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end rv2 -->
	<!-- end container -->