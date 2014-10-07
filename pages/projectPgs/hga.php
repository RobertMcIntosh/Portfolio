<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
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
	<div id="hga1" class="wbColumns">
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
	<!-- end hga1-->

	<div id="hga2" class="wbColumns">
		<?php
		include_once ('../galleries/HGA_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#hga3"> </a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="hga3" class="wbColumns">
		<h1>HGA Architects and Engineers</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, Project Definition</h2>
			<p>HGA is a large architecture and engineering firm.</p>

			<p>The Lakewood Mausoleum in Minneapolis has won may national and
				international awards and they wanted a short film for use as part of
				an international marketing campaign and for use at speaking events.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreDeliver">
			<h2>Deliverables</h2>
			<ul>
				<li>Storyboard draft reviews</li>
				<li>Raw camera-capture reviews</li>
				<li>Edit review sessions, including sound track</li>
				<li>Final artwork in full HD video format</li>
				<li>Limited License Rights Agreement</li>
			</ul>
		</div>
		<a href="#showMoreDeliver" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreDid">
			<h2>What I Did</h2>
			<ul>
				<li>Client interviews</li>
				<li>Led wireframing</li>
				<li>Led creation of storyboard and directed storytelling</li>
				<li>Set schedule and help established deliverables</li>
				<li>Scouting photography</li>
				<li>Grip, assitant</li>
				<li>Art directed many of the interior shots</li>
				<li>Screened versions with client and made adjustments based on
					client feedback</li>
				<li>Composted video</li>
				<li>Exit interview</li>
			</ul>
		</div>
		<a href="#showMoreDid" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>I was in charge of the initial story creation and I had our team:</p>
			<ul class="hgaUl">
				<li class="hgaLi">-get the building and grounds schematics from HGA</li>
				<li class="hgaLi">-take pictures of the building and grounds</li>
				<li class="hgaLi">-turn the images into 3x5 cards, several hundred
					in total</li>
				<li class="hgaLi">-then meet for a pizza-storyboarding party</li>
			</ul>

			<p>We sorted cards, getting rid of duplicates, noting really
				interesting shots and we then bounced ideas off one another and
				referenced the schematics as we built our story.</p>

			<p>With successive showings with the client we reshot a few things
				and changed the order of some shots and tweaked it here and there
				moving the film toward the final piece.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreObstacle">
			<h2>A Problem or Obstacle</h2>
			<p>The VP asked to have sprinkler heads removed from one of the
				shots. Simple enough, I had worked bigger feats in post for her on
				other shots. I couldn't have been more wrong.</p>

			<p>Nothing I tried worked, the ground always looked like something
				was about to come out of the ground - definitely not the feel we
				were going for in a film about a mausoleum.</p>

			<p>When I had exhausted the possible solutions, I got in touch with
				the VP and explained the process I went through to try and edit the
				shot and why it wasn't working.</p>

			<p>She was a bit disappointed, but she was very understanding and
				grateful for my explanation.</p>
		</div>
		<a href="#showMoreObstacle" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreOutcome">
			<h2>Project Outcome</h2>
			<p>On the final viewing with the client, the VP cried. I haven't had
				many clients cry because of the level of work I've done for them,
				well, none actually.</p>

			<p>Other viewings have caused more tears to be shed; to say that I am
				proud of what we were able to do is quite the understatement.</p>

			<p>Very few things give me the same sense of accomplishment as making
				a client truly happy, which is what we did for HGA with our work on
				this project.</p>
		</div>
		<a href="#showMoreOutcome" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech Used</h2>
			<ul>
				<li>3x5 cards to create storyboards</li>
				<li>White board</li>
				<li>OminGraffle</li>
				<li>DSLR photo</li>
				<li>DSLR video</li>
				<li>After Effects</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end hga3 -->
	<!-- end container -->