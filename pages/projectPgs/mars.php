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
	<div id="mars1" class="wbColumns">
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
	<!-- end mars1-->

	<div id="mars2" class="wbColumns">
		<?php
		include_once ('../galleries/Mars_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#mars3"> </a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="mars3" class="wbColumns">
		<h1>Midwest Animal Rescue Services</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, Project Definition</h2>
			<p>Midwest Animal Rescue Services is committed to the rescue, rehab
				and placement of homeless animals. They provide client education and
				training of companion animals to promote responsible pet ownership
				while uniting fellow animal rescuers in the pursuit of ending animal
				homelessness.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div id="showMoreDeliverMars">
			<h2>Deliverables</h2>
			<ul>
				<li>Custom WordPress site</li>
				<li>Backup methods and schedule</li>
				<li>Created WordPress Training Videos</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreDid">
			<h2>What I did</h2>
			<ul>
				<li>Stakeholder interviews</li>
				<li>Established business objectives</li>
				<li>Established deliverables</li>
				<li>User research</li>
				<li>Research competitive landscape</li>
				<li>Use case scenarios</li>
				<li>Mood board</li>
				<li>Wireframing</li>
				<li>Defined schedule</li>
				<li>Built information architecture from content inventory</li>
				<li>Coded custom WordPress site</li>
				<li>Installed plugins</li>
				<li>Hand coded scripts, PHP, Javascript</li>
				<li>User tests for site map, navigation, usability</li>
				<li>Embedded CMS videos in PDF to do things like login, update
					pages, manage comments, etc.</li>
			</ul>
		</div>
		<a href="#showMoreDid" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>I knew to have a good user experience,the search function had to
				be better than the native WordPress search.</p>

			<p>I found a pretty good plugin and installed it. It wasn't until
				later during a testing cycle that I realized the plugin was broken.
				Of course it was only broken in certain search configurations. From
				the tests I saw that there must be something off with the MySQL
				queries. Instead of writing off the plugin off entirely I decided to
				spent a little time to see if I could fix it. After a short while in
				the folders, I found the incorrect database query and I rewrote it.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreObstacle">
			<h2>A Problem or Obstacle</h2>
			<p>Pet ownership is a very large demographic. I had a really hard
				time trying to create a single persona, or even a couple, to
				accurately define the users of the MARS site.</p>

			<p>After struggling for a while with this I decided to focus on the
				users stories. I researched the MARS website and their social media
				examining how people were using the website and why. I continued my
				research looking at competitors sites and their social media to look
				at the discussions there as well.</p>

			<p>What I found was that are three types of users
				stories for pet adoption sites. The first are users that know that
				they are ready to adopt and may have a good idea as to type and
				breed. Second are users that are considering getting a pet and they
				are not sure what type. Last are the users that just like to browse
				the galleries as a comfort with no interest in adopting an animal.</p>

			<p>From reading what users were posting I realized the most important
				thing was the search functionality and the gallery display. I knew I
				needed to create a way for all the users to easily achieve their
				objectives with the search function.</p>
		</div>
		<a href="#showMoreObstacle" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreOutcome">
			<h2>Project Outcome</h2>
			<p></p>

			<p></p>
		</div>
		<a href="#showMoreOutcome" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech Used</h2>
			<ul>
				<li>Eclipse</li>
				<li>MAMP</li>
				<li>Fetch</li>
				<li>Illustrator</li>
				<li>VirtualBox</li>
				<li>OminGraffle</li>
				<li>Firebug</li>
				<li>After Effects</li>
				<li>HTML/CSS</li>
				<li>PHP</li>
				<li>Javascript</li>
				<li>JQuery</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end mars3 -->
	<!-- end container -->
